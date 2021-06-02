<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;
use App\Producto;
use App\Proveedor;
use App\ContactoProveedore;


class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contactoProveedores = ContactoProveedore::all();
        $productos = Producto::all();
        return view('compra.registro_compra')->with(compact('productos','contactoProveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'proveedor'=>'required',
            'descripcion_compra'=>'required',
            'fecha_recepion'=>'required',
            'metodo_entrega'=>'required',
            'costo_total_compra'=>'required|between:0,99.99',
            'unidad_monetaria_TP'=>'required',
            'almacen'=>'required',
            // 'costo_transporte'=>'required|between:0,99.99',
            // 'observaciones'=>'required'
        ];
        $messages = [
            'Proveedor.required' => 'Debe seleccionar el proveedor.',
            'descripcion_compra.required' => 'Debe ingresar la descripción de compra del producto.',
            'fecha_recepion.required' => 'Debe ingresar la fecha de entrega de producto por parte del proveedor.',
            'metodo_entrega.required' => 'Debe selccionar el metodo de entrega del producto.',
            'costo_total_compra.required' => 'Debe ingresar el costo total del producto.',
            'unidad_monetaria_TP.required' => 'Seleccione la unidad monetario del costo total de la compra.',
            'almacen.required' => 'Seleccione el alamacen que realiza la compra.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error de validacion')->with('typealert', 'danger');
        else:
            echo("Datos correctamente validados");
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
