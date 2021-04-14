<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;
// use App\Persona;
use Carbon\carbon;


class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nombre'=>'required',
            'genero'=>'required',
            'ci'=>'numeric|required|min:7',
            'fecha_nacimiento'=>'required',
            'celular'=>'numeric|required|min:8',
            'correo_electronico'=>'required'
        ];
        $messages = [
            'nombre.required' => 'Debe ingresar el nombre de la persona.',
            'genero.required' => 'Debe seleccionar el género de la persona.',
            'ci.numeric' => 'El número de cedula debe ser numérico.',
            'ci.required' => 'Debe ingresar el numero de cedula de identidad.',
            'ci.min:7' => 'El numero de celdula de identidad debe tener al menos 7 caracteres.',
            'fecha_nacimiento.required' => 'Debe ingresar la fecha de nacimiento.',
            'celular.numeric' => 'El número de celular debe ser numérico.',
            'celular.required' => 'Debe ingresar el número de celular.',
            'celular.min:8' => 'El numero de celular debe tener al menos 8 caracteres.',
            'correo_electronico.required' => 'Debe ingresar el correo electrónico.',
            'correo_electronico.email' => 'El formato de su correo electrónico es invalido.'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error de validacion')->with('typealert', 'danger');
            echo "los datos no estan validados";
        else:
            // $registroTablaPersona = Persona::count(); $idPersona=$registroTablaPersona+1;
            // $persona=[
            //     'id'=>$idPersona,
            //     'nombre'=>$request->input('nombre'),
            //     'apellido_paterno'=>$request->input('apellido_paterno'),
            //     'apellido_materno'=>$request->input('apellido_materno'),
            //     'sexo'=>$request->input('genero'),
            //     'ci'=>$request->input('ci'),
            //     'fecha_nacimiento'=>$request->input('fecha_nacimiento'),
            //     'celular'=>$request->input('celular'),
            //     'correo_electronico'=> $request->input('correo_electronico'),
            //     'created_at'=>Carbon::now(),
            //     'updated_at'=>Carbon::now(),
            //     'estado'=>false
            // ];
            // Persona::insert($persona);
            // return redirect()->route('listar_persona');
            
                    // if($user->save()):
                    //     return back()->withErrors($validator)->with('message','Usuario registrado')->with('typealert', 'success');
                    // endif;
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

     public function registro()
    {
        return view('layouts.register_login');

    }

     public function inicio()
    {
        return view('welcome');

    }

    public function admin()
    {
        return view('layouts/admin');

    }

    


    public function almacen_lista()
    {
        return view('almacen/lista');

    }
    
}
