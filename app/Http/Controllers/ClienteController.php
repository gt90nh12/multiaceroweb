<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use PHPUnit\Util\TestDox\CliTestDoxPrinter;

class ClienteController extends Controller
{
    public function index()
    {
      $clientes=Cliente::all();
      return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
      return view('cliente.create');
    }

    public function store(Request $request)
    { 
      $crearCliente = new Cliente();
      $crearCliente->nombre=$request->nombre;
      $crearCliente->apellidos=$request->apellidos;
      $crearCliente->sexo=$request->sexo;
      $crearCliente->fecha_nacimiento=$request->fecha_nacimiento;
      $crearCliente->tipo_documento=$request->tipo_documento;
      $crearCliente->num_documento=$request->num_documento;
      $crearCliente->telefono_fijo=$request->telefono_fijo;
      $crearCliente->telefono_movil=$request->telefono_movil;
      $crearCliente->email=$request->email;
      $crearCliente->save();
      return redirect()->route('clientes.index');

    }

    public function show($id)
    {   
      $verCliente = new Cliente();
      $verCliente = Cliente::find($id);
      return view('cliente.show', compact('verCliente'));
    }

    public function edit($id)
    {   
      $editarCliente = new Cliente();
      $editarCliente = Cliente::find($id);
      return view('cliente.edit', compact('editarCliente'));
    }

    public function update(Request $request, $id)
    {
      $actualizarCliente = new Cliente();
      $actualizarCliente= Cliente::find($id);
      $actualizarCliente->id=$request->id;
      $actualizarCliente->nombre=$request->nombre;
      $actualizarCliente->apellidos=$request->apellidos;
      $actualizarCliente->sexo=$request->sexo;
      $actualizarCliente->fecha_nacimiento=$request->fecha_nacimiento;
      $actualizarCliente->tipo_documento=$request->tipo_documento;
      $actualizarCliente->num_documento=$request->num_documento;
      $actualizarCliente->telefono_fijo=$request->telefono_fijo;
      $actualizarCliente->telefono_movil=$request->telefono_movil;
      $actualizarCliente->email=$request->email;
      $actualizarCliente->save();
      return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
      $eliminarCliente = new Cliente();
      $eliminarCliente = Cliente::find($id);
      $eliminarCliente->delete($id);
      return redirect()->route('clientes.index');
    }
}
