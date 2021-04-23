<?php

use App\Cliente;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $cliente=new Cliente();
      $cliente->nombre="Denny";
      $cliente->apellidos="Castillo";
      $cliente->sexo="Masculino";
      $cliente->fecha_nacimiento=null;
      $cliente->tipo_documento="NIT";
      $cliente->num_documento=67343265011;
      $cliente->telefono_fijo=22815993;
      $cliente->telefono_movil=78860849;
      $cliente->email="dennycastillo123@gmail.com";
      //salvamos la consulta;
      $cliente->save();
      
      //-------------------

      $cliente=new Cliente();
      $cliente->nombre="Evangeline";
      $cliente->apellidos="Marks";
      $cliente->sexo="Femenino";
      $cliente->fecha_nacimiento="2121-11-11";
      $cliente->tipo_documento="CI";
      $cliente->num_documento=61343265;
      $cliente->telefono_fijo=22885443;
      $cliente->telefono_movil=79545545;
      $cliente->email="Conner09@gmail.com";
      //salvamos la consulta;
      $cliente->save();
    }
}
