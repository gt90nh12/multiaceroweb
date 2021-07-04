<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;
use Carbon\carbon;
use App\Empresa;
use App\Sucursale;
use DB;

class EmpresaController extends Controller
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
        return view("empresa.registrar_empresa");
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
            'nombre_empresa'=>'required',
            'actividad'=>'required',
            'nit'=>'required',
            'archivo_seleccionado'=>'required',
            'mision'=>'required',
            'vision'=>'required',
            'valores'=>'required',
            'conocenos'=>'required',
            'historia'=>'required',
            'pais'=>'required',
            'estado_departamento'=>'required',
            'municipio'=>'required',
            'telefono'=>'required',
            'correo'=>'required',
        ];
        $messages = [
            'nombre_empresa.required' => 'Debe ingresar el nombre de la empresa.',
            'actividad.required' => 'Debe ingresar la actividad principal que desarrolla la empresa.',
            'nit.required' => 'Debe ingresar el número de identificación tributaria de la empresa.',
            'archivo_seleccionado.required' => 'Debe ingresar la imagen el logo de la empresa.',
            'mision.required' => 'Debe ingresar la misión de la empresa.',
            'vision.required' => 'Debe ingresar la visión de la empresa.',
            'valores.required' => 'Debe ingresar los valores de la empresa.',
            'conocenos.required' => 'Debe ingresar una descripción corta de la empresa.',
            'historia.required' => 'Debe ingresar la historia de la empresa.',
            'direccion.required' => 'Debe ingresar la direccion donde se localiza la empresa.',
            'pais.required' => 'Debe ingresar el pais donde esta registrado la empresa.',
            'estado_departamento.required' => 'Debe ingresar el departamento donde esta registrado la empresa.',
            'municipio.required' => 'Debe ingresar la ciudad donde esta registrado la empresa.',
            'telefono.required' => 'Debe ingresar el telefono de contacto de la empresa.',
            'correo.required' => 'Debe ingresar el correo electronico de la empresa.',
        ];
         $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error de validacion')->with('typealert', 'danger');
            else:
                /*------------------------- Empresa imagen  -------------------------*/
                $formato = array('.png', '.jpeg','.PNG','.JPEG','.JPG');
                $imagen = ($_FILES['archivo_seleccionado']['name']);
                $extencion = substr($imagen, strrpos($imagen, '.'));
                if(!in_array($extencion, $formato)) {
                    $data['documento_general']='El tipo de archivo no esta permitido.';
                    echo("El tipo de archivo no esta permitido");
                }else {
                    $ruta="../storage/imagenes/".$_FILES['archivo_seleccionado']['name'];
                    $nombreArchivo = $_FILES['archivo_seleccionado']['name'];
                    move_uploaded_file($_FILES['archivo_seleccionado']['tmp_name'], $ruta);
                }
                if (e($request->input("archivo_seleccionado")) === ""){
                    $Nombreimagen = ($_FILES['archivo_seleccionado']['name']);
                }
                /*---------------------------------------------------------------------*/
                /*------------------------- Sucursal imagen  -------------------------*/
                $formatoS = array('.png', '.jpeg','.PNG','.JPEG','.JPG');
                $imagenS = ($_FILES['archivo_seleccionadoS']['name']);
                $extencionS = substr($imagenS, strrpos($imagenS, '.'));
                if(!in_array($extencionS, $formatoS)) {
                    $data['documento_general']='El tipo de archivo no esta permitido.';
                    echo("El tipo de archivo no esta permitido");
                }else {
                    $ruta="../storage/imagenes/".$_FILES['archivo_seleccionadoS']['name'];
                    $nombreArchivoS = $_FILES['archivo_seleccionadoS']['name'];
                    move_uploaded_file($_FILES['archivo_seleccionadoS']['tmp_name'], $ruta);
                }
                if (e($request->input("archivo_seleccionadoS")) === ""){
                    $NombreimagenS = ($_FILES['archivo_seleccionadoS']['name']);
                }
                /*---------------------------------------------------------------------*/
                
                /*------------------------- Codigo de mepresa  -------------------------*/
                $numeroRegistroTablaEmpresa = empresa::count();
                $cod_empresa="emp".$numeroRegistroTablaEmpresa;
                // echo($cod_empresa);
                /*---------------------------------------------------------------------*/
                    $empresa = new empresa;
                    $empresa->usuario=$usuario;
                    $empresa->nombre_empresa=e($request->input('nombre_empresa'));
                    $empresa->archivo_seleccionado=$Nombreimagen;
                    $empresa->nit=e($request->input('nit'));
                    $empresa->actividad=e($request->input('actividad'));
                    $empresa->direccion=e($request->input('direccion'));
                    $empresa->pais=e($request->input('pais'));
                    $empresa->estado_departamento=e($request->input('estado_departamento'));
                    $empresa->ciudad=e($request->input('municipio'));
                    $empresa->telefono=e($request->input('telefono'));
                    $empresa->correo=e($request->input('correo'));
                    $empresa->mision=e($request->input('mision'));
                    $empresa->vision=e($request->input('vision'));
                    $empresa->valores=e($request->input('valores'));
                    $empresa->conocenos=e($request->input('conocenos'));
                    $empresa->descripcion=e($request->input('descripcion'));
                    $empresa->created_at=Carbon::now();
                    $empresa->updated_at=Carbon::now();
                    $empresa->estado=false;
                if($empresa->save()):
                    $sucursal = new Sucursale;
                    $sucursal->usuario=$usuario;
                    $sucursal->id_empresa=$cod_empresa;
                    $sucursal->nombre_sucursal="CASA MATRIZ";
                    $sucursal->archivo_seleccionado=$nombreArchivoS;
                    $sucursal->descripcion=e($request->input('descripcion'));
                    $sucursal->actividad=e($request->input('actividad'));
                    $sucursal->codigo_punto_venta=0;
                    $sucursal->numero_autorizacion=e($request->input('numero_autorizacion'));
                    $sucursal->direccion=e($request->input('direccion'));
                    $sucursal->pais=e($request->input('pais'));
                    $sucursal->estado_departamento=e($request->input('estado_departamento'));
                    $sucursal->municipio=e($request->input('municipio'));
                    $sucursal->telefono=e($request->input('telefono'));
                    $sucursal->correo=e($request->input('correo'));
                    $sucursal->created_at=Carbon::now();
                    $sucursal->updated_at=Carbon::now();
                    $sucursal->estado=false;
                    if($sucursal->save()):
                       return back()->withErrors($validator)->with('message','La información de la Empresa y Casa matriz a sido registrada.')->with('typealert', 'success');
                    endif;
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
