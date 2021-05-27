<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;
use App\Producto;
use App\tipoProducto;
use App\Empresa;
use App\Caracteristica;
use Carbon\carbon;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $productos = Producto::all();
        // $empresas = Producto::all();
        // return view('producto.listar')->with(compact('productos','empresas'));
    }
    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_productos =    tipoProducto::select('tipo_producto')
        ->DISTINCT('tipo_producto')
        ->get();
        $empresas = Empresa::all();
        return view('producto.registrar')->with(compact('tipo_productos','empresas')); 
        
        //     $tipo_producto = "Fierro Corrugado";
        // return tipoProducto::select('nombre','validacion','tipo_dato','rango_de','rango_hasta','unidad_medida','unidad_medida_alternativa')
        //                      ->where('tipo_producto','=',$tipo_producto)->get();
    }
    public function caracteristica_producto($tipo_producto){
        return tipoProducto::select('nombre','validacion','tipo_dato','rango_de','rango_hasta','unidad_medida','unidad_medida_alternativa')
        ->where('tipo_producto','=',$tipo_producto)->get();
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
            'cod_empresa'=>'required',
            'nombre'=>'required',
            'descripcion'=>'required',
            'imagen_producto'=>'required',
            'pais_procedencia_producto'=>'required',
            'departamento_procedencia_producto'=>'required',
            'marca_producto'=>'required',
            'color_producto'=>'required',
            'material_producto'=>'required',
            'unidad_comercial'=>'required',
            'embalaje'=>'required',
            'manejo_producto'=>'required',
            'precio_venta'=>'required|between:0,99.99',
        ];
        $messages = [
            'cod_empresa.required' => 'Debe seleccionar la empresa proveedora.',
            'nombre.required' => 'Debe ingresar el nombre del producto.',
            'descripcion.required' => 'Debe ingresar la descripción del producto registrado.',
            'imagen_producto.required' => 'Debe ingresar la imagen del producto.',
            'pais_procedencia_producto.required' => 'Debe seleccionar el país de origen del producto.',
            'departamento_procedencia_producto.required' => 'Debe seleccionar el estado de origen del producto.',
            'marca_producto.required' => 'Debe ingresar la marca del producto.',
            'color_producto.required' => 'Debe ingresar el color del producto.',
            'material_producto.required' => 'Debe ingresar el material de elaboración del producto.',
            'unidad_comercial.required' => 'Seleccione unidad comercial del producto.',
            'embalaje.required' => 'Seleccione el tipo de embalaje.',
            'manejo_producto.required' => 'Describa el manejo del producto.',
            'precio_venta.required' => 'Debe ingresar el precio de venta.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error de validacion')->with('typealert', 'danger');
        else:
            echo ("Formulario totalmente validado");
            /*-------------------------- Codigo Empresa ---------------------------*/
            $cod_empresa = $request->input('cod_empresa');
            /*---------------------------------------------------------------------*/
            /*----------------------------------- Almacenar caracteristica -----------------------------------*/
            $nombreCaracteristica = $request->input('nombreCaracteristica');
            $datoCaracteristica = $request->input('dato_caracteristica');
            $unidadMedidaCaracteristica = $request->input('unidad_medida');
            // print_r($nombreCaracteristica);print_r($datoCaracteristica);print_r($unidadMedidaCaracteristica);
            $longitud = count($nombreCaracteristica);
            for($i=0; $i<$longitud; $i++){
                $carateristicaProducto=[
                    'cod_empresa'=>$cod_empresa,
                    'nombre'=> $nombreCaracteristica[$i],
                    'dato'=> $datoCaracteristica[$i],
                    'unidad_medida'=> $unidadMedidaCaracteristica[$i],
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                    'estado'=>false
                ];
                Caracteristica::insert($carateristicaProducto);
            }
            /*------------------------------------------------------------------------------------------------*/
            /*----------------------------------- Almacenar imagen producto ----------------------------------*/
            $formato = array('.png', '.jpeg','.PNG','.JPEG','.JPG');
                $imagen = ($_FILES['imagen_producto']['name']);
                $extencion = substr($imagen, strrpos($imagen, '.'));
                if(!in_array($extencion, $formato)) {
                    $data['documento_general']='El tipo de archivo no esta permitido.';
                    echo("El tipo de archivo no esta permitido");
                }else {
                    $ruta="../storage/imagenes/".$_FILES['imagen_producto']['name'];
                    $nombreArchivo = $_FILES['imagen_producto']['name'];
                    move_uploaded_file($_FILES['imagen_producto']['tmp_name'], $ruta);
                }
                if (e($request->input("imagen_producto")) === ""){
                    $Nombreimagen = ($_FILES['imagen_producto']['name']);
                }
            /*------------------------------------------------------------------------------------------------*/
            $numeroRegistroTablaProducto = producto::count();
            $cod_producto="pdt".$numeroRegistroTablaProducto;
            /*------------------------------------ Procedencia de producto -----------------------------------*/
            $procedenciaProducto = $request->input('pais_procedencia_producto')."/".$request->input('departamento_procedencia_producto')."/".$request->input('municipio_procedencia_producto');
            
            /*------------------------------------------------------------------------------------------------*/

            $producto=[
                'cod_producto'=>$cod_producto,
                'usuario'=>1,
                'cod_empresa'=>$request->input('cod_empresa'),
                'nombre'=>$request->input('nombre'),
                'descripcion'=>$request->input('descripcion'),
                'imagen'=>$imagen,
                'procedencia_producto'=>$procedenciaProducto,
                'marca_producto'=>$request->input('marca_producto'),
                'color_producto'=>$request->input('color_producto'),
                'material_producto'=>$request->input('material_producto'),
                'cod_caracteristicas'=>"null",
                'unidad_comercial'=> $request->input('unidad_comercial'),
                'embalaje'=> $request->input('embalaje'),
                'manejo_producto'=> $request->input('manejo_producto'),
                'precio_venta'=> $request->input('precio_venta'),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
                'estado'=>false
            ];
            if(Producto::insert($producto)):
                return back()->withErrors($validator)->with('message','Producto registrado')->with('typealert', 'success');
            else:
                return back()->withErrors($validator)->with('message','No se almaceno el producto')->with('typealert', 'danger');
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
