<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Producto;
use App\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
      $todasLasVentas = new Venta();
      $todasLasVentas = Venta::all();
      return view('venta.index', compact('todasLasVentas'));
    }

    public function create()
    {
      $todosLosProductos = new Producto();
      $todosLosProductos = Producto::all();
      $clientes_total=new Cliente();
      $clientes_total = Cliente::all();

      return view('venta.create',compact('todosLosProductos','clientes_total'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
}