<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Venta;
use App\Cliente;
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
      $producto = Producto::all();
      $cliente = Cliente::all();
      return view("ventas.nueva_factura",compact('producto','cliente'));
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

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function buscar_producto()
    {
      $venta = Venta::all();
      //return $venta;//solo es para probar

      //le pasamos los datos almacenados en venta en un compact('venta')
      return view( "ventas.buscar_productos", compact('venta') );
    }
}
