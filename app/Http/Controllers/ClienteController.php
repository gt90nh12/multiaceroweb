<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    { 
      $clientes_total = new Cliente();
      $clientes_total = Cliente::all();
      // return $clientes_total;
      return view('cliente.index', compact('clientes_total'));
    }

    public function create()
    {
      return view('cliente.create');
    }

    public function store(Request $request)
    {
      $request->validate([
        'nombre_razon_social'=>'required|max:30',
        'tipo_documento'=>'required',
        'num_documento'=>['required','min:5','unique:clientes,num_documento'],
      ]);
      $agregarCliente = new Cliente();
      $agregarCliente->nombre_razon_social = $request->nombre_razon_social;
      $agregarCliente->tipo_documento = $request->tipo_documento;
      $agregarCliente->num_documento = $request->num_documento;
      $agregarCliente->save();
      return redirect()->route('clientes.index');
    }

    public function show($id)
    {
      $verCliente = new Cliente();
      $verCliente = Cliente::find($id);
      return view('cliente.show',compact('verCliente'));
    }

    public function edit($id)
    { 
      $editarCliente = new Cliente();
      $editarCliente = Cliente::find($id);
      // return $editarCliente;
      return view('cliente.edit', compact('editarCliente'));
    }

    public function update(Request $request, $id)
    {
      $request->validate([
        'nombre_razon_social'=>'required|max:30',
        'tipo_documento'=>'required',
        'num_documento'=>['required','min:5'],
      ]);
      $actualizarCliente = new Cliente();
      $actualizarCliente = Cliente::find($id);

      $actualizarCliente->nombre_razon_social = $request->nombre_razon_social;
      $actualizarCliente->tipo_documento = $request->tipo_documento;
      $actualizarCliente->num_documento = $request->num_documento;
      $actualizarCliente->save();
      return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
      $eliminarCliente = new Cliente();
      $eliminarCliente = Cliente::find($id);
      $eliminarCliente->delete();
      return redirect()->route('clientes.index');
    }
}
