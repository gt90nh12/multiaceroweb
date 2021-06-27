<?php

namespace App\Http\Controllers;

use App\Persona;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
  public function index()
  {
    return view('auth.index');
  }

  public function login(Request $request)
  { 
    $credentials=$request->validate([
      'user'=>['required','string'],
      'password'=>['required','string']
    ]);
    if(Auth::attempt($credentials)){
      request()->session()->regenerate();
      return redirect()->intended(route('admin'));
    }
    throw ValidationException::withMessages([
      'user' => 'Estas credenciales no coiciden con nuestros registros'
    ]);
  }

  public function create()
  {
    return view('auth.create');
  }

  public function store(Request $request){
    $request->validate([
      'user'=>['required', 'min:5', 'unique:users,user'],
      'password'=>'required|max:30',
      'nombre' => ['required', 'min:5', 'max:30'],
      'apellido_paterno' =>['required', 'min:5','max:20' ],
      'apellido_materno' =>['required', 'min:1','max:20' ],
      'numero_documento_ci' => ['required', 'min:5'],
      'telefono_movil' => ['required', 'min:8','max:8'],
      'direccion' => ['required', 'min:5'],
      'fecha_nacimiento' => ['required', 'min:5'],
      'genero' => ['required'],
    ]);
    $per=new Persona();
    $per->nombre=$request->nombre;
    $per->apellido_paterno=$request->apellido_paterno;
    $per->apellido_materno=$request->apellido_materno;
    $per->numnero_documento_ci=$request->numero_documento_ci;
    $per->direccion=$request->direccion;
    $per->telefono_movil=$request->telefono_movil;
    $per->telefono_fijo=$request->telefono_fijo;
    $per->email=$request->email;
    $per->fecha_nacimiento=$request->fecha_nacimiento;
    $per->save();
    $us=new User();
    $us->status=1;
    $us->user=$request->user;
    $us->password=Hash::make($request->password);
    $us->save();
  }

  public function show($id)
  {
      //
  }

  public function edit($id)
  {
      //
  }

  public function update(Request $request, $id)
  {
      //
  }

  public function destroy($id)
  {
      //
  }

  public function logout(Request $request){
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    Auth::logout();
    return redirect(route('auths.index'));
  }
  
}
