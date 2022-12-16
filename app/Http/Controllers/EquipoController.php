<?php

namespace App\Http\Controllers;

use App\Caracteristica;
use Illuminate\Http\Request;
use App\Producto;
use App\Persona;
use DB;


class EquipoController extends Controller
{
    public function index()
    {
      return view('multiacero.equipo');
    }
    public function conocenos()
    {
      return view('multiacero.conocenos');
    }
    public function loginchofer()
    {
      return view('multiacero.loginchofer');
    }
    public function listarproductos()
    {
      return view('multiacero.listarproductos');
    }
    public function detalleproductos($id)
    {
      $producto = DB::table('productos')
      ->select('productos.nombre as nombre_producto','productos.descripcion','productos.estado','productos.material_producto','productos.color_producto','productos.precio_venta','productos.imagen','productos.procedencia_producto','productos.marca_producto')
      ->where('productos.id',$id)
    ->join('caracteristicas','caracteristicas.id_producto','=','productos.id')   
    ->get();
    $detalle = DB::table('caracteristicas')
      ->select('caracteristicas.nombre as nombre_detalle','caracteristicas.dato','caracteristicas.unidad_medida')
      ->join('productos','productos.id','=','caracteristicas.id_producto')
      ->where('caracteristicas.id_producto', $id)      
      ->get();
    $datos_producto = $producto[0];
      return view('multiacero.detalleproductos',compact('datos_producto','detalle'));
      
    
      
    }
}