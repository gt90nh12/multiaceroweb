<?php

use Illuminate\Database\Seeder;

use App\Venta;//solo si llammos a Factory en venta si no NO
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        
        //llamar al seeder de Venta
        $this->call(VentaSeeder::class);//lo usamos si llamamos a seeder
        
        //factory(Venta::class, 30)->create();//lo llamamos directamente al factory de venta
        //desde el factory USER
        factory(User::class, 33)->create();
    }
}
