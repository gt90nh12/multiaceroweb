<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;
use Carbon\carbon;
use App\Proveedore;
use App\Empresa;
use DB;

class ProveedorController extends Controller
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
        $empresas = Empresa::all();
        return view('proveedor.registrar_proveedor')->with(compact('empresas'));
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
            'nombre'=>'required',
            'descripcion'=>'required',
            'archivo_seleccionado'=>'required',
            'direccion'=>'required',
            'pais'=>'required',
            'estado'=>'required',
            'municipio'=>'required',
            'correo_electronico'=>'required',
            'telefono'=>'required'
        ];
        $messages = [
            'nombre.required' => 'Debe ingresar el nombre del proveedor.',
            'descripcion.required' => 'la descripción del proveedor requerida.',
            'archivo_seleccionado.required' => 'Debe ingresar el logo que representa al proveedor.',
            'direccion.required' => 'Debe ingresar la direccion.',
            'pais.required' => 'Debe ingresar el el pais que pertenece el proveedor.',
            'estado.required' => 'Debe ingresar el estado.',
            'municipio.required' => 'Debe ingresar el municipio.',
            'correo_electronico.required' => 'Debe ingresar el correo electronico del proveedor.',
            'telefono.required' => 'Debe ingresar el número de telefono del proveedor.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error de validacion')->with('typealert', 'danger');
        else:
            /*------------------------- Almacenar imagen  -------------------------*/
            $formato = array('.png', '.jpg', '.jpeg','.PNG', '.JPG', '.JPEG','.JPG');
            $imagen = ($_FILES['archivo_seleccionado']['name']);
            $extencion = substr($imagen, strrpos($imagen, '.'));
            if(!in_array($extencion, $formato)) {
                $data['documento_general']='El tipo de archivo no esta permitido.';
                echo("El tipo de archivo no esta permitido");
            }else {
                $ruta="../storage/logos/".$_FILES['archivo_seleccionado']['name'];
                $nombreArchivo = $_FILES['archivo_seleccionado']['name'];
                move_uploaded_file($_FILES['archivo_seleccionado']['tmp_name'], $ruta);
            }
            if (e($request->input("archivo_seleccionado")) === ""){
                $Nombreimagen = ($_FILES['archivo_seleccionado']['name']);
            }
            /*---------------------------------------------------------------------*/
            /*------------------------- Codigo Proveedor  -------------------------*/
            $numero_registro_proveedor = Proveedore::count();
            $cod_proveedor = "pvr".$numero_registro_proveedor;
            //echo($cod_proveedor);
            /*---------------------------------------------------------------------*/
            $proveedor = new proveedore;
            $proveedor->cod_proveedor=$cod_proveedor;
            $proveedor->usuario=$usuario;
            $proveedor->nombre=e($request->input('nombre'));
            $proveedor->descripcion=e($request->input('descripcion'));
            $proveedor->logo=$Nombreimagen;
            $proveedor->direccion=e($request->input('direccion'));
            $proveedor->pais=e($request->input('pais'));
            $proveedor->estado_departamento=e($request->input('estado'));
            $proveedor->municipio=e($request->input('municipio'));
            $proveedor->correo_electronico=e($request->input('correo_electronico'));
            $proveedor->telefono=e($request->input('telefono'));
            $proveedor->created_at=Carbon::now();
            $proveedor->updated_at=Carbon::now();
            $proveedor->estado=false;
            if($proveedor->save()):
                return back()->withErrors($validator)->with('message','Proveedor registrado')->with('typealert', 'success');
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
