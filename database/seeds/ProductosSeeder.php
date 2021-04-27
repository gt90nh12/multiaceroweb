<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $producto=new Producto();
      $producto->usuario=11;
      $producto->nombre="Talabro";
      $producto->descripcion="¿Que hace un perro con un talabro?, esta Ladrando jajaja";
      $producto->imagen="url de la imagen";
      $producto->lugar_origen_producto="Germany";
      $producto->marca_producto="Boch";
      $producto->color_producto="Verde";
      $producto->material_producto="50% plastico 50% metal";
      $producto->longitud=45;
      $producto->espesor=18;
      $producto->dimension_producto="50x20";
      $producto->dimension_producto_medida="dimension_producto_medida";
      $producto->peso_producto="2kg";
      $producto->peso_producto_medida="peso_producto_medida";
      $producto->unidad_compra="700";
      $producto->factor_unidad_compra="factor_unidad_compra";
      $producto->unidad_venta="750";
      $producto->factor_unidad_venta="factor_unidad_venta";
      $producto->unidad_almacen="25";
      $producto->factor_unidad_almacen="factor_unidad_almacen";
      $producto->precio_venta=750;
      $producto->manejo_lote=true;
      $producto->complementario='{"complemento":"uno"}';
      $producto->estado=true;
      $producto->save();
      //----------------------------------------
      $producto=new Producto();
      $producto->usuario=22;
      $producto->nombre="Martillo";
      $producto->descripcion="Es el autentico martillo de Thor jeje";
      $producto->imagen="url de la imagen den martillo";
      $producto->lugar_origen_producto="Germany";
      $producto->marca_producto="Uyustuls";
      $producto->color_producto="Amarillo";
      $producto->material_producto="Madera y Metal";
      $producto->longitud=35;
      $producto->espesor=13;
      $producto->dimension_producto="40x50";
      $producto->dimension_producto_medida="dimension_producto_medida";
      $producto->peso_producto="1kg";
      $producto->peso_producto_medida="peso_producto_medida";
      $producto->unidad_compra="75";
      $producto->factor_unidad_compra="factor_unidad_compra";
      $producto->unidad_venta="90";
      $producto->factor_unidad_venta="factor_unidad_venta";
      $producto->unidad_almacen="30";
      $producto->factor_unidad_almacen="factor_unidad_almacen";
      $producto->precio_venta=90;
      $producto->manejo_lote=true;
      $producto->complementario='{"complemento":"dos"}';
      $producto->estado=true;
      $producto->save();

    }
}
