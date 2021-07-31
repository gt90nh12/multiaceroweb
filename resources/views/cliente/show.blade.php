@extends(mb_strtolower('layouts/'.explode(' ',DB::table('empleados')->where('id',Auth::user()->id)->first()->cargo==='Administrador'?'Admin':DB::table('empleados')->where('id',Auth::user()->id)->first()->cargo)[0],'UTF-8'))
@section('titulo_pagina', 'Ventas')
@section('descripcion_pagina', 'Formulario Ventas')
@section('content')
  <!-- start page title -->
<div class="row">
  <div class="col-12">
      <div class="page-title-box">
        <h4 class="page-title">DETALLE CLIENTE</h4>
      </div>
  </div>
</div>
<!-- end page title --> 
<?php
$c=0;
$ax=0;
$ax2=0;
$t=0;
$tp=0;
  foreach ($vCli as $key=>$val){
    $t=$ax+$val->monto_total;
    $ax=$t;
    $tp=$ax2+$val->cantidad_productos;
    $ax2=$tp;
    $c++;
  }
?>
<div class="row">
  <div class="col-sm-12">
    <div class="card bg-primary">
      <div class="card-body profile-user-box">
        <div class="row">
          <div class="col-sm-8">
            <div class="media">
              <span class="float-left m-2 mr-4"><img src="{{asset('assets/images/users/avatar-0.jpg')}}" style="height: 100px;" alt="" class="rounded-circle img-thumbnail"></span>
              <div class="media-body">
                <h4 class="mt-1 mb-1 text-white">{{$vCli[0]->nombre_razon_social}}</h4>
                <p class="font-13 text-white-50">Cliente de Multiacero</p>
                <ul class="mb-0 list-inline text-light">
                  <li class="list-inline-item mr-3">
                    <h5 class="mb-1">Bs. {{$t}}</h5>
                    <p class="mb-0 font-13 text-white-50">Total Ingresos</p>
                  </li>
                  <li class="list-inline-item">
                    <h5 class="mb-1">{{$c}}</h5>
                    <p class="mb-0 font-13 text-white-50">Numero de Compras</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="text-center mt-sm-0 mt-3 text-sm-right">
              <a href="{{route('clientes.edit', $vCli[0]->id_clientes)}}" class="btn btn-light">
                <i class="mdi mdi-account-edit mr-1"></i> Editar Cliente
              </a>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title mt-0 mb-3">Información del Cliente </h4>
        <hr/>
        <div class="text-left">
          <p class="text-muted"><strong>Razón Social :</strong> <span class="ml-2">{{$vCli[0]->nombre_razon_social}}</span></p>
          <p class="text-muted"><strong>Tipo de Documento :</strong><span class="ml-2">{{$vCli[0]->tipo_documento}}</span></p>
          <p class="text-muted"><strong>N° de Documento :</strong><span class="ml-2">{{$vCli[0]->num_documento}}</span></p>
          <p class="text-muted"><strong>Creado el :</strong><span class="ml-2">{{$vCli[0]->created_at}}</span></p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8">
    <div class="row">
      <div class="col-sm-4">
        <div class="card tilebox-one">
          <div class="card-body">
            <i class="dripicons-basket float-right text-muted"></i>
              <h6 class="text-muted text-uppercase mt-0">N° Compras</h6>
              <h2 class="m-b-20">{{count($vCli)}}</h2>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card tilebox-one">
          <div class="card-body">
            <i class="dripicons-box float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Total Ingresos</h6>
            <h2 class="m-b-20">Bs <span>{{$t}}</span></h2>
          </div>
        </div>
      </div>    
      <div class="col-sm-4">
        <div class="card tilebox-one">
          <div class="card-body">
            <i class="dripicons-jewel float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Total Productos<br>Comprados</h6>
            <h2 class="m-b-20">{{$tp}}</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="header-title mb-3">Products Comprados</h4>
        <div class="table-responsive">
          <table class="table table-hover table-centered mb-0">
            <thead>
              <tr>
                <th>#CODIGO</th>
                <th>FECHA DE LA VENTA</th>
                <th>CANTIDAD</th>
                <th>TOTAL(Bs)</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($vCli as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->created_at}}</td>
                <td><span class="badge badge-warning">{{$item->cantidad_productos}} Productos</span></td>
                <td>{{$item->monto_total}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@stop