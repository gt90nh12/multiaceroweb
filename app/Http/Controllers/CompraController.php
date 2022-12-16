<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Hash, Auth;
use Carbon\carbon;
use App\AlmacenProducto;
use App\transacciones_movimiento_inventarios;
use App\DetalleMovimientoInventarios;
use App\Producto;
use App\Proveedor;
use App\ContactoProveedore;
use App\Almacene;
use App\Compra;
use DB;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        DB::enableQueryLog();
        $compras = DB::table('compras')
        ->join('transacciones_movimiento_inventarios', 'transacciones_movimiento_inventarios.id_compras', '=', 'compras.id')
        ->join('almacenes', 'almacenes.id', '=', 'transacciones_movimiento_inventarios.id_almacen')

        ->select('almacenes.nombre as nombre_almacen','compras.id', 'compras.fecha_recepion_producto', 'compras.costo_total_compra', 'compras.recepion_producto', 'compras.documentacion')
        ->get();
        $consultaBaseDeDatosJson = json_encode((DB::getQueryLog()));
        /*---------------------- Activida de logs del sistema ---------------------*/
        $actividadUsuario = "Visualiza la lista de compras.";
        $actividadBaseDeDatos = $consultaBaseDeDatosJson;
        $this->user_activity($actividadUsuario,$actividadBaseDeDatos);
        /*------------- finaliza la actividad de registro del usuario -------------*/
        return view('compra.listar')->with(compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        DB::enableQueryLog();
        $contactoProveedores = DB::table('contacto_proveedores')
        ->join('proveedores', 'proveedores.id', '=', 'contacto_proveedores.id')
        ->select('proveedores.id as id_proveedores','proveedores.logo', 'proveedores.nombre as proveedor', 'contacto_proveedores.id', 'contacto_proveedores.persona', 'contacto_proveedores.cargo')
        ->get();
        $productos = Producto::all();
        $almacenes = Almacene::all();
        $consultaBaseDeDatosJson = json_encode((DB::getQueryLog()));
        /*---------------------- Activida de logs del sistema ---------------------*/
        $actividadUsuario = "Ingresa a realizar compra.";
        $actividadBaseDeDatos = $consultaBaseDeDatosJson;
        $this->user_activity($actividadUsuario,$actividadBaseDeDatos);
        /*------------- finaliza la actividad de registro del usuario -------------*/
        return view('compra.registro_compra')->with(compact('productos','contactoProveedores','almacenes'));
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
         'metodo_entrega'=>'required',
         'costo_total_compra'=>'required|between:0,99.99',
         'seleccion_almacen'=>'required',
         // 'direccion_entrega'=>'required',
         'fecha_recepion_producto'=>'required',
         // 'costo_transporte'=>'required',
     ];
     $messages = [
         'proveedor.required' => 'Debe seleccionar el proveedor.',
         'descripcion_compra.required' => 'Debe ingresar la descripción de compra del producto.',
         'metodo_entrega.required' => 'Debe selccionar el metodo de entrega del producto.',
         'costo_total_compra.required' => 'Debe ingresar el costo total del producto.',
         'seleccion_.required' => 'Seleccione el alamacen que realiza la compra.',
         // 'direccion_entrega'=>'La dirección de entrega es necesario',
         'fecha_recepion_producto.required' => 'Debe ingresar la fecha de recepción de producto.',
         // 'costo_transporte'=>'Debe ingresar el consto de transporte.',
     ];
     $validator = Validator::make($request->all(), $rules, $messages);
    if($validator->fails()):
        return back()->withErrors($validator)->with('message','Se ha producido un error de validacion')->with('typealert', 'danger');
    else:
        /*----------------------------------- Usuario  ----------------------------------*/
        $numeroRegistroTablaCompras = compra::count();$numeroRegistroTablaCompras=$numeroRegistroTablaCompras+1;;
        /*-------------------------------------------------------------------------------*/
        /*----------------------------------- Usuario  ----------------------------------*/
        $usuario = 1;
        /*-------------------------------------------------------------------------------*/
        /*----------------------------- Almacenar documento  ----------------------------*/
        $formato = array('.png', '.jpeg','.PNG','.JPEG','.JPG');
        $imagen = ($_FILES['documentacion']['name']);
        $extencion = substr($imagen, strrpos($imagen, '.'));
        if(!in_array($extencion, $formato)) {
            $data['documento_general']='El tipo de archivo no esta permitido.';
            echo("El tipo de archivo no esta permitido");
        }else {
            $ruta="../storage/documentacion/".$_FILES['documentacion']['name'];
            $nombreArchivo = $_FILES['documentacion']['name'];
            move_uploaded_file($_FILES['documentacion']['tmp_name'], $ruta);
        }
        if (e($request->input("documentacion")) === ""){
            $nombreArchivo = ($_FILES['documentacion']['name']);
        }
        /*-------------------------------------------------------------------------------*/
        /*------------------------------- Unidad de medida  -----------------------------*/
        if(e($request->input('switchTipoCambio'))){
            $unidadMonetariaCostoCompra = e($request->input('unidad_monetaria_costo_compra'));
            $tipoCambioCostoCompra = e($request->input('tipo_cambio_costo_compra'));
        }else{
            $unidadMonetariaCostoCompra = "Bs.";
            $tipoCambioCostoCompra = 0;
        }
        /*-------------------------------------------------------------------------------*/

        $compra = new Compra;
        $compra->usuario=$usuario;
        $compra->descripcion_compra=e($request->input('descripcion_compra'));
        $compra->metodo_entrega=e($request->input('metodo_entrega'));
        $compra->costo_total_compra=e($request->input('costo_total_compra'));
        $compra->unidad_monetaria_costo_compra=$unidadMonetariaCostoCompra;
        $compra->tipo_cambio_costo_compra = $tipoCambioCostoCompra;
        $compra->direccion_entrega=e($request->input('direccion_entrega'));
        $compra->costo_transporte=e($request->input('costo_transporte'));
        $compra->fecha_recepion_producto=e($request->input('fecha_recepion_producto'));
        $compra->recepion_producto=e($request->input('recepion_producto'));
        $compra->documentacion=$nombreArchivo;
        $compra->created_at=Carbon::now();
        $compra->updated_at=Carbon::now();
        $compra->estado=false;
        if($compra->save()):
            /*------------ Numero de la tabla transaccion movimiento de inventarios------------*/
            $numeroTMI = transacciones_movimiento_inventarios::count();$numeroTMI=$numeroTMI+1;
            /*---------------------------------------------------------------------------------*/
            $transaccionMI = new transacciones_movimiento_inventarios;
            $transaccionMI->id_usuario=$usuario;
            $transaccionMI->fecha_transaccion=e($request->input('fecha_recepion_producto'));
            $transaccionMI->observaciones=e($request->input('observaciones'));
            $transaccionMI->tipo_transaccion="compras";
            $transaccionMI->id_compras=$numeroRegistroTablaCompras;
            $transaccionMI->id_ventas=0;
            $transaccionMI->id_movimientos=0;
            $transaccionMI->id_devoluciones=0;
            $transaccionMI->id_almacen_producto=0;               
            $transaccionMI->id_almacen=e($request->input('seleccion_almacen'));
            $transaccionMI->created_at=Carbon::now();
            $transaccionMI->updated_at=Carbon::now();
            if($transaccionMI->save()):
                $id_almacen = e($request->input('seleccion_almacen'));
                $id_producto = $request->input('id_producto');
                $cantidad = $request->input('cantidad');
                $lote = $request->input('lote');
                $costo= $request->input('costo');
                $fechaFabricacion = $request->input('fechaFabricacion');
                $fechaCaducidad = $request->input('fechaCaducidad');
                $descuento = $request->input('descuento');
                $color = $request->input('color');
                $identificador = $request->input('identificador');
                $caracteristicasProducto = $request->input('caracteristicas');
                $longitud = count($id_producto);
                for($i=0; $i<$longitud;){
                    //------------- Armar caracteristicas de producto -------------\\
                    $caracteristicas=[];
                    $armarCaracteristicaProducto=[];
                    $armarCaracteristicaProducto= array(
                        "Lote"=>$lote[$i],
                        "Fecha caducidad"=>$fechaCaducidad[$i],
                        "color"=>$color[$i],
                        "Identificador"=>$identificador[$i],
                        "Caracteristicas"=>$caracteristicasProducto[$i]
                    );
                    array_push($caracteristicas, $armarCaracteristicaProducto);
                    $caracteristicasProductoJson=json_encode($caracteristicas);
                    //----- finaliza el armado de caracteristicas de producto -----\\
                    $detalleMI = new DetalleMovimientoInventarios;
                    $detalleMI->costo=$costo[$i];
                    $detalleMI->cantidad=$cantidad[$i];
                    $detalleMI->descuento=$descuento[$i];
                    $detalleMI->identificador_producto=$identificador[$i];
                    $detalleMI->id_producto=$id_producto[$i];
                    $detalleMI->caracteristicas_producto=$caracteristicasProductoJson;
                    $detalleMI->id_transacciones_movimiento_inventarios=$numeroTMI;
                    $detalleMI->created_at=Carbon::now();
                    $detalleMI->updated_at=Carbon::now();
                    $detalleMI->save();
                    $resultado = self::tablaAlmacenProducto($id_producto[$i],$id_almacen,$cantidad[$i],$costo[$i]);
                    $i++;
                }  
            endif;
            return redirect()->route('listar_compra');
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

    public function tablaAlmacenProducto($id_productos, $id_almacenes, $cantidad_producto_compra, $costo_promedio){
        $dato_almacen_producto = DB::table('almacen_productos')
        ->where('id_productos',$id_productos)
        ->where('id_almacenes',$id_almacenes)
        ->select('id','cantidad_producto')
        ->get();{}
        if(empty($dato_almacen_producto[0])){
            echo "Registro nuevo en almacenpoductos";
            /*------ Numero de la tabla transaccion movimiento de inventarios------*/
            $numeroAP = AlmacenProducto::count();$numeroAP=$numeroAP+1;
            /*---------------------------------------------------------------------*/
            $usuario=1;
            $almacenProducto = new AlmacenProducto;
            $almacenProducto->usuario=$usuario;
            $almacenProducto->cantidad_producto=$cantidad_producto_compra;
            $almacenProducto->stock_minimo=0;
            $almacenProducto->stock_maximo=0;
            $almacenProducto->compras_por_recibir=0;
            $almacenProducto->pendientes_en_venta=0;
            $almacenProducto->costo_promedio=0;
            $almacenProducto->id_productos=$id_productos;
            $almacenProducto->id_almacenes=$id_almacenes;
            $almacenProducto->created_at=Carbon::now();
            $almacenProducto->updated_at=Carbon::now();
            $almacenProducto->estado=false;
            if($almacenProducto->save()){
                return true;
            }else{
                return false;
            }
        }else{
            echo ("Actualizar registro en almacenproducto");
            $id_almacen_productos = $dato_almacen_producto[0]->id;
            $cantidad_producto_tabla = $dato_almacen_producto[0]->cantidad_producto;
            $cantidadActual = $cantidad_producto_tabla + $cantidad_producto_compra;
            $almacenProducto = AlmacenProducto::find($id_almacen_productos);
            $almacenProducto->cantidad_producto = $cantidadActual;
            $almacenProducto->updated_at = Carbon::now();
            if($almacenProducto->save()){
                return true;
            }else{
                return false;
            }
        }
    }
    public function proveedor($id){
        return Proveedor::select('id','logo','nombre')
        ->where('id','=',$id)->get();
    }

    /*------------- Lo necesario para realizar logs del sistema -------------*/
    public function user_activity($actividadUsuario,$actividadBaseDeDatos)
    {
        $activityLog = [
            'name'=>$this->nombre_usuario_autenticado(),
            'image'=>$this->imagen_usuario_autenticado(),
            'registro_db_id'=>auth()->user()->persona_id,
            'description'=>$actividadUsuario,
            'date_time'=> date('Y-m-d H:i:s'),
            'created_at'=>Carbon::now(),
            'consulta'=>$actividadBaseDeDatos,
        ];
        DB::table('activity_logs')->insert($activityLog);
    }
    public function nombre_usuario_autenticado(){
        $Id_Persona_Atenticada = auth()->user()->id;
        $DatosEnElSistema = DB::table('empleados')
        ->select('nombre','apellido_paterno','apellido_materno')
        ->join('users', 'users.id', '=', 'empleados.id_users')
        ->join('personas', 'personas.id', '=', 'empleados.id_personas')
        ->where('empleados.id_users', '=', $Id_Persona_Atenticada)
        ->get();
        $NombreUsuarioEnElSistema = $DatosEnElSistema[0]->nombre." ".$DatosEnElSistema[0]->apellido_paterno." ".$DatosEnElSistema[0]->apellido_materno;
        return($NombreUsuarioEnElSistema);
    }
    public function imagen_usuario_autenticado(){
        $Id_Persona_Atenticada = auth()->user()->id;
        $DatosEnElSistema = DB::table('empleados')
        ->select('foto')
        ->join('users', 'users.id', '=', 'empleados.id_users')
        ->join('personas', 'personas.id', '=', 'empleados.id_personas')
        ->where('empleados.id_users', '=', $Id_Persona_Atenticada)
        ->get();
        $ImagenUsuarioEnElSistema = $DatosEnElSistema[0]->foto;
        return($ImagenUsuarioEnElSistema);
    }
    /*-------------------- Finaliza los logs del sistema --------------------*/

}
