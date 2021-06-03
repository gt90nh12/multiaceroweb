<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;
use App\AlmacenProducto;
use App\Almacene;
use App\Producto;
use Carbon\carbon;

class AlmacenproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacenproductos = AlmacenProducto::all();
        return view('almacenproducto.listar_almacenproducto', compact('almacenproductos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        $almacenes = Almacene::all();
        return view('almacenproducto.registro_almacenproducto')->with(compact('productos', 'almacenes'));
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
            'almacen'=>'required',
            'producto'=>'required',
            'cantidadproducto'=>'required',
            'stockmaximo'=>'required',
            'stockminimo'=>'required',
        ];
        $messages = [
            'almacen.required' => 'Debe ingresar el nombre del almacen.',
            'producto.required' => 'Debe seleccionar la empresa a la que pertenece el almacen.',
            'cantidadproducto.required' => 'Debe ingresar el tipo de almacen.',
            'stockminimo.required' => 'Debe ingresar la imagen del almacen.',
            'stockmaximo.required' => 'la descripción del del almacen es requerida.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error de validacion')->with('typealert', 'danger');
        else:
            $usuario=1;
            $almacenProducto = new AlmacenProducto;
            $almacenProducto->usuario=$usuario;
            $almacenProducto->almacen_id=e($request->input('almacen'));
            $almacenProducto->producto_id=e($request->input('producto'));;
            $almacenProducto->cantidadproducto=e($request->input('cantidadproducto'));;
            $almacenProducto->stockminimo=e($request->input('stockminimo'));
            $almacenProducto->stockmaximo=e($request->input('stockmaximo'));
            $almacenProducto->comprasporrecibir=e($request->input('comprasporrecibir'));
            $almacenProducto->pendientesporventa=e($request->input('pendientesporventa'));
            $almacenProducto->costopromedio=e($request->input('costopromedio'));
            $almacenProducto->created_at=Carbon::now();
            $almacenProducto->updated_at=Carbon::now();
            $almacenProducto->estado=false;
            if($almacenProducto->save()):
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
