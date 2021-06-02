<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;
use Carbon\carbon;
use App\ContactoProveedore;
use App\Proveedore;
use DB;

class ContactoProveedorController extends Controller
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
        $proveedores = Proveedore::all();
        return view('contactoproveedor/registrocontactoproveedor')->with(compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario=1;
        $rules = [
            'persona'=>'required',
            'proveedor'=>'required',
            'profesion'=>'required',
            'cargo'=>'required',
            'telefono_coorporativo'=>'required',
            'correo_coorporativo'=>'required',
            'fecha_inicio'=>'required',
            'hora_inicio'=>'required',
            // 'fecha_finalizacion'=>'required'
        ];
        $messages = [
            'persona.required' => 'Debe seleccionar el identificador de persona.',
            'proveedor.required' => 'Debe seleccionar el proveedor.',
            'profesion.required' => 'Debe ingresar la profesión del contacto del proveedor.',
            'cargo.required' => 'Debe ingresa el cargo que ocupa.',
            'telefono_coorporativo.required' => 'Debe ingresar el telefono coorporativo.',
            'correo_coorporativo.required' => 'Debe ingresar el correo electronico coorporativo.',
            'fecha_inicio.required' => 'Debe ingresar la fecha de inicio de actividades, del contacto del proveedor.',
            'hora_inicio.required' => 'Debe ingresar la hora de inicio de actividades, del contacto del proveedor.',
            // 'fecha_finalizacion.required' => 'Debe ingresar la fecha de finalización de actividades, del contacto del proveedor.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error de validacion')->with('typealert', 'danger');
        else:
            $contacto_proveedor = new contactoproveedore;
            $contacto_proveedor->usuario=$usuario;
            $contacto_proveedor->persona=e($request->input('persona'));
            $contacto_proveedor->proveedor=e($request->input('proveedor'));;
            $contacto_proveedor->profesion=e($request->input('profesion'));;
            $contacto_proveedor->cargo=e($request->input('cargo'));
            $contacto_proveedor->telefono_coorporativo=e($request->input('telefono_coorporativo'));
            $contacto_proveedor->correo_coorporativo=e($request->input('correo_coorporativo'));
            $contacto_proveedor->fecha_inicio=e($request->input('fecha_inicio'));
            $contacto_proveedor->hora_inicio=e($request->input('hora_inicio'));
            $contacto_proveedor->descripcion_inicio_actividades=e($request->input('descripcion_inicio_actividades'));
            $contacto_proveedor->fecha_finalizacion=e($request->input('fecha_finalizacion'));
            $contacto_proveedor->hora_finalizacion=e($request->input('hora_finalizacion'));
            $contacto_proveedor->descripcion_finalizacion_actividades=e($request->input('descripcion_finalizacion_actividades'));
            $contacto_proveedor->created_at=Carbon::now();
            $contacto_proveedor->updated_at=Carbon::now();
            $contacto_proveedor->estado=false;
            if($contacto_proveedor->save()):
             return back()->withErrors($validator)->with('message','Personal registrado')->with('typealert', 'success');
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
