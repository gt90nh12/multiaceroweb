<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;
use Carbon\carbon;
use App\tipoProducto;
use DB;

class TipoProductoController extends Controller
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
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoproducto = tipoProducto::all();
        return view('tipoproducto/registrar')->with(compact('tipoproducto'));
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
            'validacion'=>'required',
            'tipo_dato'=>'required'
        ];
        $messages = [
            'nombre.required' => 'Debe ingresar el nombre de la caracteristica de producto.',
            'validacion.required' => 'Describa la validación para la caracteristica del producto.',
            'tipo_dato.required' => 'Seleccione el tipo de dato para la caracteristica del producto.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error de validacion')->with('typealert', 'danger');
        else:
            $seleccionTipoProducto = e($request->input('seleccion_tipo_producto'));
            $nuevoTipoProducto = e($request->input('nuevo_tipo_producto'));
            if($nuevoTipoProducto!=""){
                $tipoProductoAlmacenar = $nuevoTipoProducto;
            }else{
                $tipoProductoAlmacenar = $seleccionTipoProducto;
            }

            $tipoProducto = new tipoProducto;
            $tipoProducto->usuario=$usuario;
            $tipoProducto->nombre=e($request->input('nombre'));
            $tipoProducto->validacion=e($request->input('validacion'));
            $tipoProducto->tipo_dato=e($request->input('tipo_dato'));
            $tipoProducto->rango_de=e($request->input('rango_de'));
            $tipoProducto->rango_hasta=e($request->input('rango_hasta'));
            $tipoProducto->unidad_medida=e($request->input('unidad_medida'));
            $tipoProducto->unidad_medida_alternativa=e($request->input('unidad_medida_alternativa'));
            $tipoProducto->descripcion=e($request->input('descripcion'));
            $tipoProducto->tipo_producto=$tipoProductoAlmacenar;
            $tipoProducto->created_at=Carbon::now();
            $tipoProducto->updated_at=Carbon::now();
            $tipoProducto->estado=false;
            if($tipoProducto->save()):
               return back()->withErrors($validator)->with('message','Tipo de producto registrado')->with('typealert', 'success');
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
