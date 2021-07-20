<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;
use Carbon\carbon;
use App\Almacene;
use App\Sucursale;
use DB;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacenes = DB::table('almacenes')
        ->join('sucursales', 'sucursales.id', '=', 'almacenes.id_sucursal')
        ->select('sucursales.nombre_sucursal','almacenes.nombre', 'almacenes.imagen', 'almacenes.direccion')
        ->get();
        return view('almacen/registrar')->with(compact('almacenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursales = Sucursale::all();
        // $sucursaless = DB::table('sucursales')->get();
        // var_dump($sucursales);
        return view('almacen/registrar')->with(compact('sucursales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario=1;
        $rules = [
            'nombre'=>'required',
            'descripcion'=>'required',
            'archivo_seleccionado'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
            'horario_abierto_m'=>'required',
            'horario_cerrado_m'=>'required',
            'horario_abierto_t'=>'required',
            'horario_cerrado_t'=>'required',
            'id_sucursal'=>'required',
        ];
        $messages = [
            'nombre.required' => 'Debe ingresar el nombre del almacén.',
            'descripcion.required' => 'la descripción del del almacén es requerida.',
            'archivo_seleccionado.required' => 'Debe ingresar la imagen del almacén.',
            'direccion.required' => 'Debe ingresar la dirección de almacén.',
            'telefono.required' => 'Debe ingresar el número de telefono de almacén.',
            'horario_abierto_m.required' => 'Debe ingresar el horario de atención de inicio por la mañana.',
            'horario_cerrado_m.required' => 'Debe ingresar el horario de atención de finalización por la mañana.',
            'horario_abierto_t.required' => 'Debe ingresar el horario de atención de inicio por la tarde.',
            'horario_cerrado_t.required' => 'Debe ingresar el horario de atención de finalización por la tarde.',
            'id_sucursal.required' => 'Debe seleccionar la sucursal a la que pertenece el almacén.',
        ];
         $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error de validacion')->with('typealert', 'danger');
            else:
                /*------------------------- Almacenar imagen  -------------------------*/
                $formato = array('.png', '.jpeg','jpg','.PNG','.JPEG','.JPG');
                $imagen = ($_FILES['archivo_seleccionado']['name']);
                $extencion = substr($imagen, strrpos($imagen, '.'));
                if(!in_array($extencion, $formato)) {
                    $data['documento_general']='El tipo de archivo no esta permitido.';
                    echo("El tipo de archivo no esta permitido");
                }else {
                    $ruta="assets/almacenes/".$_FILES['archivo_seleccionado']['name'];
                    $nombreArchivo = $_FILES['archivo_seleccionado']['name'];
                    move_uploaded_file($_FILES['archivo_seleccionado']['tmp_name'], $ruta);
                    echo "Se almaceno la imagen";
                }
                if (e($request->input("archivo_seleccionado")) === ""){
                    $Nombreimagen = ($_FILES['archivo_seleccionado']['name']);
                }
                /*---------------------------------------------------------------------*/
                $almacen = new almacene;
                    $almacen->usuario=$usuario;
                    $almacen->nombre=e($request->input('nombre'));
                    $almacen->descripcion=e($request->input('descripcion'));
                    $almacen->imagen=$Nombreimagen;
                    $almacen->direccion=e($request->input('direccion'));
                    $almacen->telefono=e($request->input('telefono'));
                    $almacen->horario_abierto_m=e($request->input('horario_abierto_m'));
                    $almacen->horario_cerrado_m=e($request->input('horario_cerrado_m'));
                    $almacen->horario_abierto_t=e($request->input('horario_abierto_t'));
                    $almacen->horario_cerrado_t=e($request->input('horario_cerrado_t'));
                    $almacen->created_at=Carbon::now();
                    // $almacen->updated_at=Carbon::now();
                    $almacen->estado=false;
                    $almacen->id_sucursal=e($request->input('id_sucursal'));;
                if($almacen->save()):
                   return back()->withErrors($validator)->with('message','Almacen registrado')->with('typealert', 'success');
                endif;
            endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
