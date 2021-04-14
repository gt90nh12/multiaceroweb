<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nombre'=>'required',
            'descripcion'=>'required',
            'imagen_producto'=>'required',
            'categoria_id'=>'required',
            'tipo_id'=>'required',
            'unidad_compra'=>'required',
            'unidad_factor_compra'=>'required',
            'unidad_venta'=>'required',
            'unidad_factor_venta'=>'required',
            'unidad_almacen'=>'required',
            'unidad_factor_almacen'=>'required',
            'precio_compra'=>'required|between:0,99.99',
            'precio_venta'=>'required|between:0,99.99',
        ];
        $messages = [
            'nombre.required' => 'Debe ingresar el nombre del producto.',
            'descripcion.required' => 'Debe ingresar la descripción del producto registrado.',
            'imagen_producto.required' => 'Debe ingresar la imagen del producto.',
            'categoria_id.required' => 'Debe selccionar la categoría del producto.',
            'tipo_id.required' => 'Debe seleccionar el tipo de producto.',
            'unidad_compra.required' => 'Seleccione la unidad utilizada de compra.',
            'factor_unidad_compra.required' => 'Seleccione el factor de unidad de compra.',
            'unidad_venta.required' => 'Seleccione la unidad utilizada de venta.',
            'factor_unidad_venta.required' => 'Seleccione el factor de unidad de venta.',
            'unidad_almacen.required' => 'Seleccione la unidad de almacenamiento.',
            'factor_unidad_venta.required' => 'Seleccione el factor de almacenamiento.',
            'precio_compra.required' => 'Debe ingresar el precio de compra.',
            'precio_venta.required' => 'Debe ingresar el precio de venta.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error de validacion')->with('typealert', 'danger');
        else:
            /*------------------------------- Almacenar imagen producto -------------------------------*/
            $formato = array('.png', '.jpeg');//extenciones validas
            $imagenProducto = ($_FILES['imagen_producto']['name']);//Nombre de la imagen
            $extencion = substr($imagenProducto, strrpos($imagenProducto, '.'));//Extencion de la imagen 
            if(!in_array($extencion, $formato)) {
                $data['documento_general']='El tipo de archivo no esta permitido.';
                echo("El tipo de archivo no esta permitido");
            }else {
                $ruta="../storage/imagenes/".$_FILES['imagen_producto']['name'];
                $nombreArchivo = $_FILES['imagen_producto']['name'];
                move_uploaded_file($_FILES['imagen_producto']['tmp_name'], $ruta);
            }
            /*-----------------------------------------------------------------------------------------*/

            // echo ("Formulario totalmente validado");
            // $registroTablaPersona = Persona::count(); $idPersona=$registroTablaPersona+1;
            // $persona=[
            //     'id'=>$idPersona,
            //     'nombre'=>$request->input('nombre'),
            //     'apellido_paterno'=>$request->input('apellido_paterno'),
            //     'apellido_materno'=>$request->input('apellido_materno'),
            //     'sexo'=>$request->input('genero'),
            //     'ci'=>$request->input('ci'),
            //     'fecha_nacimiento'=>$request->input('fecha_nacimiento'),
            //     'celular'=>$request->input('celular'),
            //     'correo_electronico'=> $request->input('correo_electronico'),
            //     'created_at'=>Carbon::now(),
            //     'updated_at'=>Carbon::now(),
            //     'estado'=>false
            // ];
            // Persona::insert($persona);
            // return redirect()->route('listar_persona');
            // if($user->save()):
            //     return back()->withErrors($validator)->with('message','Usuario registrado')->with('typealert', 'success');
            // endif;
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
