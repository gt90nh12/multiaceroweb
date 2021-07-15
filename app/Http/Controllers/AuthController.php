<?php

namespace App\Http\Controllers;

use App\Almacene;
use App\Empleado;
use App\Persona;
use App\Sucursale;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
  public function index()
  {
    return view('auth.index');
  }

  public function list()
  {
    $per=DB::table('empleados')->select()->join('personas','personas.id','=','empleados.id_personas')->join('users','users.id','=','empleados.id_users')->get();
    return view('auth.list', compact('per'));
  }

  public function login(Request $request)
  { 
    //  return $request;
    $credentials=$request->validate([
      'user'=>['required','string'],
      'password'=>['required','string']
    ]);
    if(!empty(User::where('user',$request->user)->where('status',1)->first())&&Auth::attempt($credentials)){
      request()->session()->regenerate();
      $cargo=DB::table('empleados')->join('users','users.id','empleados.id_users')->where('empleados.id_users',User::where('user',$request->user)->first()->id)->first()->cargo;
      if($cargo==='Cajero'){
        return redirect()->intended(route('cargo.cajeros'));
      }
      if($cargo==='Almacenero'){
        return redirect()->intended(route('cargo.almaceneros'));
      }
      if($cargo==='Chofer'){
        return redirect()->intended(route('cargo.choferes'));
      }
      if($cargo==='Ejecutivo de ventas'){
        return redirect()->intended(route('cargo.ejecutivo_de_ventas'));
      }
      if($cargo==='Administrador'){
        return redirect()->intended(route('admin'));
      }
    }
    throw ValidationException::withMessages([
      'user' => 'Estas credenciales no coiciden con nuestros registros o tiene algun pendiente administrativo, pase a Sistemas por favor.'
    ]);
  }

  public function create()
  { 
    $su=Sucursale::all();
    $al=Almacene::all();
    return view('auth.create',compact('su','al'));
  }
  
  public function store(Request $request)
  {
    $emp=new Empleado();
    $per=new Persona();
    $us=new User();
    $request->validate([
      'telefono_fijo_corporativo'=>['size:7','required',],
      'telefono_movil_corporativo'=>['required','min:8'],
      'user'=>['required', 'min:5','unique:users,user'],
      'password'=>'required|min:8|max:30',
      'nombre'=>['required', 'min:3','max:30'],
      'apellido_paterno'=>['required','min:5','max:20' ],
      'apellido_materno'=>['required','min:1','max:20' ],
      'numero_documento_ci'=>['required','min:5','unique:personas,numero_documento_ci'],
      'telefono_movil'=>['required','size:8'],
      'direccion'=>['required','min:5'],
      'fecha_nacimiento'=>['date','required'],
      'foto'=>['mimes:jpg,jpeg,png,','required'],
      'cargo'=>'required',
      'almacen'=>'required',
      'horario_mañana_inicio'=>['date_format:H:i','required'],
      'horario_mañana_fin'=>['date_format:h:H','required'],
      'horario_tarde_inicio'=>['date_format:H:i','required'],
      'horario_tarde_fin'=>['date_format:H:i','required'],
      'fecha_inicio_actividad'=>['date','required'],
      'fecha_fin_actividad'=>['date','required'],
      'experiencia_meses'=>['required','numeric'],
      'genero'=>'required'
    ]);
    $per->nombre=$request->nombre;
    $per->apellido_paterno=$request->apellido_paterno;
    $per->apellido_materno=$request->apellido_materno;
    $per->numero_documento_ci=$request->numero_documento_ci;
    $per->direccion=$request->direccion;
    $per->telefono_movil=$request->telefono_movil;
    $per->telefono_fijo=$request->telefono_fijo;
    $per->email=$request->email;
    $per->fecha_nacimiento=$request->fecha_nacimiento;
    $per->genero=$request->genero;
    $per->save();
    $us->status=false;
    $us->user=$request->user;
    $us->password=Hash::make($request->password);
    $us->save();
    $foto=explode('\\',$request->file('foto')->move(base_path('\storage\personal'),time().'.'.$request->file('foto')->getClientOriginalExtension()));
    $emp->cargo=$request->cargo;
    $emp->telefono_fijo_corporativo=$request->telefono_fijo_corporativo;
    $emp->telefono_movil_corporativo=$request->telefono_movil_corporativo;
    $emp->foto=end($foto);
    $emp->horario_mañana_inicio=$request->horario_mañana_inicio;
    $emp->horario_mañana_fin=$request->horario_mañana_fin;
    $emp->horario_tarde_inicio=$request->horario_tarde_inicio;
    $emp->horario_tarde_fin=$request->horario_tarde_fin;
    $emp->fecha_inicio_actividad=$request->fecha_inicio_actividad;
    $emp->fecha_fin_actividad=$request->fecha_fin_actividad;
    $emp->experiencia_meses=$request->experiencia_meses;
    $emp->id_personas=Persona::all()->last()->id;
    $emp->id_almacenes=$request->almacen;
    $emp->id_users=User::all()->last()->id;
    $emp->save();
    return redirect(route('auths.list'));
  }

  public function show($id)
  {
    $em=DB::table('empleados')->select()->join('personas','personas.id','empleados.id_personas')->join('users','users.id','empleados.id_users')->where('empleados.id',$id)->get();
    return view('auth.show',compact('em'));
  }

  public function edit($id)
  {
    $em=DB::table('empleados')->select()->join('personas','personas.id','empleados.id_personas')->join('users','users.id','empleados.id_users')->where('empleados.id',$id)->get();
    $su=Sucursale::all();
    $al=Almacene::all();
    return view('auth/edit',compact('em','su','al'));
  }

  public function update(Request $request, $id)
  { 
    $request->validate([
      'telefono_fijo_corporativo'=>['size:7','required',],
      'telefono_movil_corporativo'=>['required','min:8'],
      'user'=>['required',User::find($id)->user===$request->user?null:'unique:users,user','min:5'],
      'password'=>[$request->password?'min:8':null,'max:30'],
      'nombre'=>['required', 'min:3','max:30'],
      'apellido_paterno'=>['required','min:5','max:20' ],
      'apellido_materno'=>['required','min:1','max:20' ],
      'numero_documento_ci'=>['required','numeric',Persona::find($id)->numero_documento_ci===intval($request->numero_documento_ci)?null:'unique:personas,numero_documento_ci','min:5'],
      'telefono_movil'=>['required','size:8','unique:personas,numero_documento_ci'],
      'direccion'=>['required','min:5'],
      'fecha_nacimiento'=>['date','required'],
      'foto'=>['mimes:jpg,jpeg,png'],
      'cargo'=>'required',
      'almacen'=>'required',
      'horario_mañana_inicio'=>['date_format:H:i','required'],
      'horario_mañana_fin'=>['date_format:h:H','required'],
      'horario_tarde_inicio'=>['date_format:H:i','required'],
      'horario_tarde_fin'=>['date_format:H:i','required'],
      'fecha_inicio_actividad'=>['date','required'],
      'fecha_fin_actividad'=>['date','required'],
      'experiencia_meses'=>['required','numeric'],
      'genero'=>'required'
    ]);
    $emp=Empleado::find($id);
    $emp->cargo=$request->cargo;
    $foto=$request->foto?explode('\\',$request->file('foto')->move(base_path('\storage\personal'),time().'.'.$request->file('foto')->getClientOriginalExtension())):$emp->foto;
    $emp->telefono_fijo_corporativo=$request->telefono_fijo_corporativo;
    $emp->telefono_movil_corporativo=$request->telefono_movil_corporativo;
    $emp->foto=$emp->foto===$foto?$foto:end($foto);
    $emp->horario_mañana_inicio=$request->horario_mañana_inicio;
    $emp->horario_mañana_fin=$request->horario_mañana_fin;
    $emp->horario_tarde_inicio=$request->horario_tarde_inicio;
    $emp->horario_tarde_fin=$request->horario_tarde_fin;
    $emp->fecha_inicio_actividad=$request->fecha_inicio_actividad;
    $emp->fecha_fin_actividad=$request->fecha_fin_actividad;
    $emp->experiencia_meses=$request->experiencia_meses;
    $emp->id_almacenes=$request->almacen;
    $emp->save();
    $per=Persona::find($emp->id_personas);
    $per->nombre=$request->nombre;
    $per->apellido_paterno=$request->apellido_paterno;
    $per->apellido_materno=$request->apellido_materno;
    $per->numero_documento_ci=$request->numero_documento_ci;
    $per->direccion=$request->direccion;
    $per->telefono_movil=$request->telefono_movil;
    $per->telefono_fijo=$request->telefono_fijo;
    $per->email=$request->email;
    $per->fecha_nacimiento=$request->fecha_nacimiento;
    $per->genero=$request->genero;
    $per->save();
    $us=User::find($emp->id_users);
    $us->status=Empleado::find($id)->id===1?true:($request->status?true:false);
    $us->user=$request->user;
    $us->password=$request->password?Hash::make($request->password):$us->password;
    $us->save();
    return redirect(route('auths.list'));
  }

  public function destroy($id)
  {
      //?
  }

  public function logout(Request $request){
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    Auth::logout();
    return redirect(route('auths.index'));
  }

}