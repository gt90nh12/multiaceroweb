<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;
use Carbon\carbon;
use App\Vehiculo;
use DB;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos=Vehiculo::all();
        return view('vehiculo/listar')->with(compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiculo/registrar');
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
            'placa'=>'required',
            'chasis'=>'required',
            'tipo_carga'=>'required',
            'modelo'=>'required',
            'marca'=>'required',
            'color'=>'required',
            'peso'=>'required',
        ];
        $messages = [
            'placa.required' => 'La placa del vehículo es requerido.',
            'chasis.required' => 'El numero de chasis del vehiculo es requerida.',
            'tipo_carga.required' => 'Debe ingresar la descrición del tipo de carga que maneja el vehículo.',
            'modelo.required' => 'Debe ingresar el modelo del vehículo.',
            'marca.required' => 'Debe ingresar la marca del vehículo.',
            'color.required' => 'Debe ingresar el color del vehículo.',
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
                     $ruta="../public/assets/vehiculos/".$_FILES['archivo_seleccionado']['name'];
                    $nombreArchivo = $_FILES['archivo_seleccionado']['name'];
                    move_uploaded_file($_FILES['archivo_seleccionado']['tmp_name'], $ruta);
                    echo "Se almaceno la imagen";
                }
                if (e($request->input("archivo_seleccionado")) === ""){
                    $Nombreimagen = ($_FILES['archivo_seleccionado']['name']);
                }
                /*---------------------------------------------------------------------*/
                $vehiculo = new vehiculo;
                    $vehiculo->usuario=$usuario;
                    $vehiculo->placa=e($request->input('placa'));
                    $vehiculo->chasis=e($request->input('chasis'));
                    $vehiculo->tipo_carga=e($request->input('tipo_carga'));
                    $vehiculo->imagen=$Nombreimagen;
                    $vehiculo->modelo=e($request->input('modelo'));
                    $vehiculo->marca=e($request->input('marca'));
                    $vehiculo->color=e($request->input('color'));
                    $vehiculo->peso=e($request->input('peso'));
                    $vehiculo->created_at=Carbon::now();
                    $vehiculo->estado=false;
                if($vehiculo->save()):
                   return back()->withErrors($validator)->with('message','Vehículo registrado')->with('typealert', 'success');
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
