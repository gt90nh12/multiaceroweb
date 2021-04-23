<?php

namespace App\Http\Controllers;

use App\Venta;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index()
    {
      $venta = Venta::all();
      //return $venta;//solo es para probar

      //le pasamos los datos almacenados en venta en un compact('venta')
      return view( "ventas.ventas_hoy", compact('venta') );
    }

    public function create()
    {
      return view("ventas.nueva_factura");
    }

    public function store(Request $request)
    {
        //
    }

    // public function show($id)
    public function show($id)
    {
      return view("ventas.revisar_facturas");
    }
    
    public function ver($id)
    { 
      $dato = Venta::find($id);
      return view( "ventas.ver_factura", compact('dato') );

    }

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
