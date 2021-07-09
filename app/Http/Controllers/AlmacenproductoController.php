<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;
use Carbon\carbon;
use App\AlmacenProducto;
use App\transacciones_movimiento_inventarios;
use App\DetalleMovimientoInventarios;
use App\Producto;
use App\Proveedor;
use App\ContactoProveedore;
use App\Almacene;
use App\Compra;
use DB;

class AlmacenproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacenproductos = DB::table('almacen_productos')
        ->join('almacenes', 'almacenes.id', '=', 'almacen_productos.id_almacenes')
        ->join('productos', 'productos.id', '=', 'almacen_productos.id_productos')
        ->select('almacen_productos.*', 'productos.nombre as producto', 'almacenes.nombre as almacen')
        ->get();
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
            /*------ Numero de la tabla transaccion movimiento de inventarios------*/
                $numeroAP = AlmacenProducto::count();$numeroAP=$numeroAP+1;
            /*---------------------------------------------------------------------*/
            $usuario=1;
            $almacenProducto = new AlmacenProducto;
            $almacenProducto->usuario=$usuario;
            $almacenProducto->cantidad_producto=e($request->input('cantidadproducto'));
            $almacenProducto->stock_minimo=e($request->input('stockminimo'));
            $almacenProducto->stock_maximo=e($request->input('stockmaximo'));
            $almacenProducto->compras_por_recibir=e($request->input('comprasporrecibir'));
            $almacenProducto->pendientes_en_venta=e($request->input('pendientesporventa'));
            $almacenProducto->costo_promedio=e($request->input('costopromedio'));
            $almacenProducto->id_productos=e($request->input('producto'));
            $almacenProducto->id_almacenes=e($request->input('almacen'));
            $almacenProducto->created_at=Carbon::now();
            $almacenProducto->updated_at=Carbon::now();
            $almacenProducto->estado=false;
            if($almacenProducto->save()):
                /*------ Numero de la tabla transaccion movimiento de inventarios------*/
                $numeroTMI = transacciones_movimiento_inventarios::count();$numeroTMI=$numeroTMI+1;
                /*---------------------------------------------------------------------*/
                $transaccionMI = new transacciones_movimiento_inventarios;
                $transaccionMI->id_usuario=$usuario;
                $transaccionMI->fecha_transaccion=e($request->input('fecha'));
                $transaccionMI->observaciones=e($request->input('observaciones'));
                $transaccionMI->tipo_transaccion="Inventario incial";
                $transaccionMI->id_compras=0;
                $transaccionMI->id_ventas=0;
                $transaccionMI->id_movimientos=0;
                $transaccionMI->id_devoluciones=0;
                $transaccionMI->id_almacen_producto=$numeroAP;                
                $transaccionMI->id_almacen=e($request->input('almacen'));
                $transaccionMI->created_at=Carbon::now();
                $transaccionMI->updated_at=Carbon::now();
                if($transaccionMI->save()):
                    $detalleMI = new DetalleMovimientoInventarios;
                    $detalleMI->costo=e($request->input('costopromedio'));
                    $detalleMI->cantidad=e($request->input('cantidadproducto'));
                    $detalleMI->descuento=0;
                    $detalleMI->identificador_producto="";
                    $detalleMI->id_producto=e($request->input('producto'));
                    $detalleMI->id_transacciones_movimiento_inventarios=$numeroTMI;
                    $detalleMI->created_at=Carbon::now();
                    $detalleMI->updated_at=Carbon::now();
                    if($detalleMI->save()):
                        return back()->withErrors($validator)->with('message','Registro de existencia de producto, almacenado correctamente.')->with('typealert', 'success');
                    endif;    
                endif;
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
