<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class MiniClienteController extends Controller
{
    public function index()
    {
      $clientes_total = new Cliente();
      $clientes_total = Cliente::all();
      return $clientes_total;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      $BucarNumeroDocumento = new Cliente();
      $BucarNumeroDocumento = Cliente::where('num_documento',$request->num_documento)->first();
      if($BucarNumeroDocumento){
        return $BucarNumeroDocumento;
      }else{
        $almacenarClienteNuevo = new Cliente();
        $almacenarClienteNuevo->nombre_razon_social = $request->nombre_razon_social;
        $almacenarClienteNuevo->tipo_documento = $request->tipo_documento;
        $almacenarClienteNuevo->num_documento = $request->num_documento;
        $almacenarClienteNuevo->save();
        // $miArray = array("manzana"=>"verde", "uva"=>"Morada", "fresa"=>"roja");
        return $almacenarClienteNuevo;
      }
    }

    public function show($id)
    {
        //
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
}
