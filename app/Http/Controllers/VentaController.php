<?php

namespace App\Http\Controllers;

use App\almacen_producto;
use App\Almacene;
use App\Caracteristica;
use App\Cliente;
use App\detalle_movimiento_inventario;
use App\Empleado;
use App\Factura;
use App\Producto;
use App\Empresa;
use App\Sucursale;
use App\transacciones_movimiento_inventarios;
use App\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;
use Dompdf\Dompdf;
use PDF;

class VentaController extends Controller
{
  public function index()
  { 
    DB::enableQueryLog();
    $todasLasVentas=new Venta();
    $todasLasVentas=DB::table('clientes')->select()->join('ventas','ventas.id_clientes','=','clientes.id')->get();
    $consultaBaseDeDatosJson = json_encode((DB::getQueryLog()));
    /*---------------------- Activida de logs del sistema ---------------------*/
    $actividadUsuario = "Visualiza la lista de ventas.";
    $actividadBaseDeDatos = $consultaBaseDeDatosJson;
    $this->user_activity($actividadUsuario,$actividadBaseDeDatos);
    /*------------- finaliza la actividad de registro del usuario -------------*/
    return view('venta.index', compact('todasLasVentas'));
  }

  public function create()
  {
    $usuarioautenticado = auth()->id();
    // echo($usuarioautenticado);
    DB::enableQueryLog();
    if($usuarioautenticado==1){
      $sucursalUsuario=DB::table('almacenes') ->select('sucursales.nombre_sucursal','sucursales.pais','sucursales.estado_departamento','sucursales.municipio','sucursales.direccion','sucursales.correo','sucursales.telefono')
      ->join('sucursales','sucursales.id','=','almacenes.id_sucursal')
      ->where('almacenes.id','=',1)
      ->get();
    }else{  
      $sucursalUsuario=DB::table('almacenes') ->select('sucursales.nombre_sucursal','sucursales.pais','sucursales.estado_departamento','sucursales.municipio','sucursales.direccion','sucursales.correo','sucursales.telefono')
      ->join('empleados','empleados.id_almacenes','=','almacenes.id')
      ->join('sucursales','sucursales.id','=','almacenes.id_sucursal')
      ->where('empleados.id','=',$usuarioautenticado)
      ->get();
    }
    $pro_to=new Producto();
    $clientes_total=new Cliente();
    $al=Almacene::all();
    $caracteristicas=new Caracteristica();
    $fa=Factura::all()->last();
    $sucursal=Sucursale::all();
    $pro_to=Producto::all();
    $clientes_total=Cliente::all();
    $em=Empleado::all();
    $al_pro=almacen_producto::all();
    $caracteristicas=Caracteristica::all();
    $empresa=Empresa::find(1);
    $consultaBaseDeDatosJson = json_encode((DB::getQueryLog()));
    /*---------------------- Activida de logs del sistema ---------------------*/
    $actividadUsuario = "Ingresa a crear nueva factura.";
    $actividadBaseDeDatos = $consultaBaseDeDatosJson;
    $this->user_activity($actividadUsuario,$actividadBaseDeDatos);
    /*------------- finaliza la actividad de registro del usuario -------------*/
    return view('venta.create',compact('pro_to','clientes_total','al','caracteristicas','em','sucursal','al_pro','fa','empresa','sucursalUsuario'));
  }

  public function store(Request $request){
    $ve=new Venta();
    $tr=new transacciones_movimiento_inventarios();
    $fa=new Factura();
    $date=date('Y-m-d');
    $ve->monto_total=$request->totalFinal;
    $ve->monto_total_sujeto_iva=$request->totalFinal-(($request->totalFinal)/100)*13;
    $ve->descuento_total=$request->descuentoTotal;
    $ve->cantidad_productos=$request->max;
    $ve->codigo_moneda=0;
    $ve->tipo_cambio=0;
    $ve->monto_total_moneda=$request->totalFinal;
    $ve->id_clientes=$request->id_cliente;
    $ve->id_users=1;
    $ve->save();
    $tr->id_usuario=0;
    $tr->fecha_transaccion=$date;
    $tr->observaciones='';
    $tr->tipo_transaccion='ventas';
    $tr->id_compras=0;
    $tr->id_ventas=Venta::all()->last()->id;
    $tr->id_movimientos=0;
    $tr->id_devoluciones=0;
    $tr->id_almacen_producto=0;
    $tr->id_almacen=1;
    $tr->save();
    for($i=0; $i<$request->max; $i++){
      $de=new detalle_movimiento_inventario();
      $st=new almacen_producto();
      $j=explode(',',$request->$i);
      $de->costo=$j[1];
      $de->cantidad=$j[2];
      $de->descuento=$request->descuentoTotal/$request->max;
      $de->identificador_producto=0;
      $de->id_producto=$j[0];
      $st=almacen_producto::find($j[0]);
      $de->id_transacciones_movimiento_inventarios=transacciones_movimiento_inventarios::all()->last()->id;
      $st->cantidad_producto=$st->cantidad_producto-$j[2];
      $st->save();
      $de->save();
    }
    $fa->numero_factura=$request->nfa;
    $fa->fecha_emicion=$date;
    $fa->codigo_metodo_pago=1;
    $fa->codigo_control=$request->cod;
    $fa->id_ventas=Venta::all()->last()->id;
    $fa->save();
    $todasLasVentas=DB::table('clientes')->select()->join('ventas','ventas.id_clientes','=','clientes.id')->get();
    return redirect()->route('ventas.index','todasLasVentas');
  }

  public function show($id)
  {
    $pro=new Producto();
    $ve=Venta::find($id);
    $tr=transacciones_movimiento_inventarios::where('tipo_transaccion','=','ventas')->where('id_ventas','=',$id)->first();
    $pr=DB::table('detalle_movimiento_inventarios')->where('id_transacciones_movimiento_inventarios',$tr->id_ventas)->get();
    foreach($pr as $k=>$val){
      $val->pro=Producto::find($val->id_producto);
    }
    $cl=Cliente::find($ve->id_clientes);
    return view('venta.show',compact('tr','ve','pr','cl'));
  }

  public function edit($id)
  {
      //
  }

  public function update(Request $request, $id)
  {
      //
  }

  public function destroy($id)
  {
      //
  }
  public function uno(Request $request){
    /** @author Denny Castillo @version 2.1  */
    function calc5($n){
      $d=[[0,1,2,3,4,5,6,7,8,9],[1,2,3,4,0,6,7,8,9,5],[2,3,4,0,1,7,8,9,5,6],[3,4,0,1,2,8,9,5,6,7],[4,0,1,2,3,9,5,6,7,8],[5,9,8,7,6,0,4,3,2,1],[6,5,9,8,7,1,0,4,3,2],[7,6,5,9,8,2,1,0,4,3],[8,7,6,5,9,3,2,1,0,4],[9,8,7,6,5,4,3,2,1,0]];
      $p=[[0,1,2,3,4,5,6,7,8,9],[1,5,7,6,2,8,3,0,9,4],[5,8,0,3,7,9,6,1,4,2],[8,9,1,6,0,4,3,5,2,7],[9,4,5,3,1,2,6,8,7,0],[4,2,8,6,5,7,3,9,0,1],[2,7,9,3,8,0,6,4,1,5],[7,0,4,6,9,1,3,2,5,8]];
      $inv=[0,4,3,2,1,5,6,7,8,9];
      $r=0;
      foreach(array_reverse(str_split($n))as$n=>$N){
        $r=$d[$r][$p[($n+1)%8][$N]];
      }
      return $inv[$r];
    }
    function VffD($v,$d){
      for($i=1;$i<=$d;$i++){
        $v.=calc5($v);
      }
      return $v;
    }
    function ct($v){
      $dic=[
        "0","1","2","3","4","5","6","7","8","9",
        "A","B","C","D","E","F","G","H","I","J",
        "K","L","M","N","O","P","Q","R","S","T", 
        "U","V","W","X","Y","Z","a","b","c","d",
        "e","f","g","h","i","j","k","l","m","n",
        "o","p","q","r","s","t","u","v","w","x",
        "y","z","+","/"];
        $c=1;
        $w="";
        while ($c>0){
          $c=floor($v/64);
          $r=$v%64;
          $w=$dic[$r].$w;
          $v=$c;
        }
        return $w;
      }
      function CR4($m,$k,$un=false){
        $st=range(0,255);
        $x=0;
        $y=0;
        $i1=0;
        $i2=0;
        $mE="";
        for($i=0;$i<=255;$i++){
          $i2=(ord($k[$i1])+$st[$i]+$i2)%256;
          $aux=$st[$i];
          $st[$i]=$st[$i2];
          $st[$i2]=$aux;
          $i1=($i1+1)%strlen($k);
        }
        for($i=0;$i<strlen($m);$i++){
          $x=($x+1)%256;
          $y=($st[$x]+$y)%256;
          $aux=$st[$x];
          $st[$x]=$st[$y];
          $st[$y]=$aux;
          $mH=strtoupper(dechex((ord($m[$i]))^$st[($st[$x]+$st[$y])%256]));
          $mE=$mE.($un?"":"-").(strlen($mH)===1?'0'.$mH:$mH);
        }
        return $un?$mE:substr($mE,1,strlen($mE));
      }
      function g($d){
        $k=$d->f;
        $iN=VffD($d->b,2);
        $nc=VffD($d->c,2);
        $f=VffD(date('Ymd'),2);
        $m=VffD(round($d->e),2);
        $sVV5=VffD($iN+$nc+$f+$m,5);
        $d5Vff=substr($sVV5,strlen($sVV5)-5);
        $n=str_split($d5Vff);
        for($i=0;$i<5;$i++){
          $n[$i]=$n[$i]+1;
        }
        $st1=substr($k,0,$n[0]);
        $st2=substr($k,$n[0],$n[1]);
        $st3=substr($k,$n[0]+$n[1],$n[2]);
        $st4=substr($k,$n[0]+$n[1]+$n[2],$n[3]);
        $st5=substr($k,$n[0]+$n[1]+$n[2]+$n[3],$n[4]);
        $RC4=CR4($d->a.$st1.$iN.$st2.$nc.$st3.$f.$st4.$m.$st5,$k.$d5Vff,1);    
        $chars=str_split($RC4);
        $mT=0;$sp1=0;$sp2=0;$sp3=0;$sp4=0;$sp5=0;$tmp=1;
        for($i=0;$i<strlen($RC4);$i++){
          $mT+=ord($chars[$i]);
          switch($tmp){
            case 1: $sp1+=ord($chars[$i]);break;
            case 2: $sp2+=ord($chars[$i]);break;
            case 3: $sp3+=ord($chars[$i]);break;
            case 4: $sp4+=ord($chars[$i]);break;
            case 5: $sp5+=ord($chars[$i]);break;
          }            
          $tmp=($tmp<5)?$tmp+1:1;
        }
        $tmp1=floor($mT*$sp1/$n[0]);
        $tmp2=floor($mT*$sp2/$n[1]);
        $tmp3=floor($mT*$sp3/$n[2]);
        $tmp4=floor($mT*$sp4/$n[3]);
        $tmp5=floor($mT*$sp5/$n[4]);
        return CR4(ct($tmp1+$tmp2+$tmp3+$tmp4+$tmp5),$k.$d5Vff);
      }
      return g($request);
    }
    public function reporteGeneral(){
      $todasLasVentas=new Venta();
      $todasLasVentas=DB::table('clientes')->select()->join('ventas','ventas.id_clientes','=','clientes.id')->get();
      // $todasLasVentas=Venta::all();
      $fecha = date('Y-m-d');
      $data = compact('todasLasVentas','fecha');
      $pdf = PDF::loadView('venta.reporteGeneralVentas', $data);
      // return $pdf->stream();
      return $pdf->download('Venta_general'.time().'.pdf');

      //     return view('venta.index', compact('todasLasVentas'));
      //     // instantiate and use the dompdf class
      // $dompdf = new Dompdf();
      // $dompdf->loadHtml('hello world');
      // // (Optional) Setup the paper size and orientation
      // $dompdf->setPaper('A4', 'landscape');
      // // Render the HTML as PDF
      // $dompdf->render();
      // // Output the generated PDF to Browser
      // $dompdf->stream();
    }
    /*---------------------- Almacena logs del sistema ----------------------*/
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
    /*------------- Lo necesario para realizar logs del sistema -------------*/
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