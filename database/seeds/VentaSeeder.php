<?php

use Illuminate\Database\Seeder;

//llamamos nuestro modelo
use App\Venta;
class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $venta = new Venta();
      $venta->nombre = "Martillo";
      $venta->cantidad = 33;
      $venta->estado = true;
      //salvamos la consulta;
      $venta->save();

      //solo llamamos al sedder desde aqui
      // Venta::factory(30)->create();//laravel8
      factory(Venta::class, 300)->create();//laravel7

    }
}
