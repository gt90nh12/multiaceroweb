<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;
use Carbon\carbon;

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
            'lugar_origen_producto'=>'required',
            'marca_producto'=>'required',
            'color_producto'=>'required',
            'material_producto'=>'required',
            'longitud'=>'required',
            'espesor'=>'required',
            'dimension_producto'=>'required',
            'dimension_producto_medida'=>'required',
            'unidad_compra'=>'required',
            'unidad_factor_compra'=>'required',
            'unidad_venta'=>'required',
            'unidad_factor_venta'=>'required',
            'unidad_almacen'=>'required',
            'unidad_factor_almacen'=>'required',
            'precio_venta'=>'required|between:0,99.99',
        ];
        $messages = [
            'nombre.required' => 'Debe ingresar el nombre del producto.',
            'descripcion.required' => 'Debe ingresar la descripción del producto registrado.',
            'imagen_producto.required' => 'Debe ingresar la imagen del producto.',
            'lugar_origen_producto.required' => 'Debe el lugar de origen del producto.',
            'marca_producto.required' => 'Debe ingresar la marca del producto.',
            'color_producto.required' => 'Debe ingresar el color del producto.',
            'material_producto.required' => 'Debe ingresar el material de elaboración del producto.',
            'longitud.required' => 'Debe ingresar la longitud producto.',
            'espesor.required' => 'Debe ingresar el espesor del producto.',
            'dimension_producto.required' => 'Debe ingresar la dimension externa del producto.',
            'dimension_producto_medida.required' => 'Debe seleccionar las unidd de medida del producto.',
            'unidad_compra.required' => 'Seleccione la unidad utilizada de compra.',
            'unidad_factor_compra.required' => 'Seleccione el factor de unidad de compra.',
            'unidad_venta.required' => 'Seleccione la unidad utilizada de venta.',
            'unidad_factor_venta.required' => 'Seleccione el factor de unidad de venta.',
            'unidad_almacen.required' => 'Seleccione la unidad de almacenamiento.',
            'unidad_factor_almacen.required' => 'Seleccione el factor de almacenamiento.',
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
            if (e($request->input("imagen_producto")) === " "){
                $nombreImagenProducto = $this->imagenStore("imagen_juego", $imagen_id);
            }else if (e($request->input("imagen_juego")) != " ") {
                $nombreImagenProducto="no hay imagen";
            }{
                $nombreImagenProducto="nada";
            }
            /*-----------------------------------------------------------------------------------------*/
            echo ("Formulario totalmente validado");
            // $registroTablaPersona = Persona::count(); $idPersona=$registroTablaPersona+1;
            $producto=[
                'id'=>1,
                'nombre'=>$request->input('nombre'),
                'descripcion'=>$request->input('descripcion'),
                'imagen_producto'=>$nombreImagenProducto,
                'lugar_origen_producto'=>$request->input('lugar_origen_producto'),
                'marca_producto'=>$request->input('marca_producto'),
                'material_producto'=>$request->input('material_producto'),
                'longitud'=>$request->input('longitud'),
                'espesor'=> $request->input('espesor'),
                'dimension_producto'=> $request->input('dimension_producto'),
                'dimension_producto_medida'=> $request->input('dimension_producto_medida'),
                'unidad_compra'=> $request->input('unidad_compra'),
                'unidad_factor_compra'=> $request->input('unidad_factor_compra'),
                'unidad_factor_compra'=> $request->input('unidad_venta'),
                'unidad_factor_compra'=> $request->input('unidad_factor_venta'),
                'unidad_factor_compra'=> $request->input('unidad_almacen'),
                'unidad_factor_compra'=> $request->input('unidad_factor_almacen'),
                'unidad_factor_compra'=> $request->input('manejo_lote'),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
                'estado'=>false
            ];
            var_dump($producto);
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
