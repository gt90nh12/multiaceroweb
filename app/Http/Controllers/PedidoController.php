<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;
use Carbon\carbon;
use App\Pedidos;
use Dompdf\Dompdf;
use PDF;
use DB;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos=Pedidos::all();
        return view('pedido/listar')->with(compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pedido/registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo("estas en pedido");
        $rules = [
            'placa'=>'required',
            'factura'=>'required',
            'direccion'=>'required',
        ];
        $messages = [
            'placa.required' => 'La placa del vehículo es requerido.',
            'factura.required' => 'El numero de factura es requerido.',
            'direccion.required' => 'Debe ingresar la dirección del cliente al que se realizará la entrega.',
            
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error de validacion')->with('typealert', 'danger');
        else:
            $pedido = new pedidos;
            $pedido->factura=e($request->input('factura'));
            $pedido->placa=e($request->input('placa'));
            $pedido->direccion=e($request->input('direccion'));
            $pedido->created_at=Carbon::now();
            $pedido->estado=false;
            if($pedido->save()):

                // return back()->withErrors($validator)->with('message','Pedido de cliente registrado')->with('typealert', 'success');

                // $todasLasVentas=new Venta();
                // $todasLasVentas=DB::table('clientes')->select()->join('ventas','ventas.id_clientes','=','clientes.id')->get();
                $fecha = date('Y-m-d');
                // $data = compact('todasLasVentas','fecha');
                $data = compact('fecha');
                $pdf = PDF::loadView('pedido.reportePedido', $data);
                return $pdf->download('pedido_cliente'.time().'.pdf');
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
