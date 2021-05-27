<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;
use Carbon\carbon;
use App\Sucursale;
use App\Empresa;
use DB;

class SucursalController extends Controller
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
        return view('sucursal/registrar_sucursal')->with(compact('empresas'));
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
            'empresa'=>'required',
            'sucursal'=>'required',
            // 'nombresucursall'=>'required',
            'archivo_seleccionado'=>'required',
            'direccion'=>'required',
            'pais'=>'required',
            'estado_departamento'=>'required',
            'ciudad'=>'required',
            'telefono'=>'required',
            'correo'=>'required',
            'descripcion'=>'required',
        ];
        $messages = [
            'empresa.required' => 'Debe seleccionar la empresa.',
            'sucursal.required' => 'Debe ingresar el numero de sucursal.',
            // 'nombresucursall.required' => 'Debe ingresar el nombre de la sucursal.',
            'archivo_seleccionado.required' => 'Debe ingresar el logo de la sucursal.',
            'direccion.required' => 'Debe ingresar la direccion donde se localiza la sucursal.',
            'pais.required' => 'Debe ingresar el pais donde esta registrado la sucursal.',
            'estado_departamento.required' => 'Debe ingresar el departamento donde esta registrado la sucursal.',
            'ciudad.required' => 'Debe ingresar la ciudad donde esta registrado la sucursal.',
            'telefono.required' => 'Debe ingresar el telefono de contacto de la sucursal.',
            'correo.required' => 'Debe ingresar el correo electronico de la sucursal.',
            'descripcion.required' => 'la descripción de la sucursal es requerida.',
        ];
         $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error de validacion')->with('typealert', 'danger');
            else:
                /*------------------------- $sucursalar imagen  -------------------------*/
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
                /*------------------------- $empresaar imagen  -------------------------*/
                $numeroRegistroTablaSucursal = empresa::count();
                $cod_sucursal="emp".$numeroRegistroTablaSucursal;
                /*---------------------------------------------------------------------*/
                $sucursal = new Sucursale;
                    $sucursal->cod_sucursal=$cod_sucursal;
                    $sucursal->usuario=$usuario;
                    $sucursal->cod_empresa=e($request->input('empresa'));
                    $sucursal->numero_sucursal=e($request->input('sucursal'));
                    $sucursal->nombre_sucursal=e($request->input('nombresucursal'));
                    $sucursal->archivo_seleccionado=$Nombreimagen;
                    $sucursal->direccion=e($request->input('direccion'));
                    $sucursal->pais=e($request->input('pais'));
                    $sucursal->estado_departamento=e($request->input('estado_departamento'));
                    $sucursal->ciudad=e($request->input('ciudad'));
                    $sucursal->telefono=e($request->input('telefono'));
                    $sucursal->correo=e($request->input('correo'));
                    $sucursal->descripcion=e($request->input('descripcion'));
                    $sucursal->created_at=Carbon::now();
                    $sucursal->updated_at=Carbon::now();
                    $sucursal->estado=false;
                if($sucursal->save()):
                   return back()->withErrors($validator)->with('message','sucursal registrado')->with('typealert', 'success');
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
