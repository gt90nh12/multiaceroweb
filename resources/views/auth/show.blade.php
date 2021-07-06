@extends('layouts\admin')
@section('titulo_pagina', 'Ventas')
@section('descripcion_pagina', 'Formulario Ventas')
@section('content')
<div class="row">
  <div class="col-12">
      <div class="page-title-box">
        <h4 class="page-title">DETALLE EMPLEADO</h4>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="card bg-primary">
      <div class="card-body profile-user-box">
        <div class="row">
          <div class="col-sm-8">
            <div class="media">
              <span class="float-left m-2 mr-4"><img src="{{str_replace('public','storage/personal',asset($em[0]->foto))}}" style="height: 100px;" alt="" class="rounded-circle img-thumbnail"></span>
              <div class="media-body">
                <h4 class="mt-1 mb-1 text-white">{{$em[0]->nombre}} {{$em[0]->apellido_paterno}} {{$em[0]->apellido_materno}}</h4>
                <p class="font-13 text-white-50">Nombre</p>
                <ul class="mb-0 list-inline text-light">
                  <li class="list-inline-item mr-3">
                    <h5 class="mb-1">{{$em[0]->cargo}}</h5>
                    <p class="mb-0 font-13 text-white-50">Cargo</p>
                  </li>
                  <li class="list-inline-item">
                    <h5 class="mb-1">{{$em[0]->experiencia_meses}} Meses</h5>
                    <p class="mb-0 font-13 text-white-50">Experiencia</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="text-center mt-sm-0 mt-3 text-sm-right">
              <a href="{{route('auths.edit',$em[0]->id)}}" class="btn btn-light">
                <i class="mdi mdi-account-edit mr-1"></i> Editar Empleado
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
        <h4 class="header-title mt-0 mb-3"> Información del Empleado </h4><hr/>
        <div class="text-left">
          <p class="text-muted"><strong>Nombre de Usuario : </strong><span>{{$em[0]->user}} </span></p>
          <p class="text-muted"><strong>Estado : </strong><span class="badge badge-{{$em[0]->status?'success':'danger'}}"> {{$em[0]->status?'Activo':'Inactivo'}} </span></p>
          <p class="text-muted"><strong>Cargo :</strong><span class="ml-2">{{$em[0]->cargo}}</span></p><hr/>
          <p class="text-muted"><strong>Nombre(s) :</strong><span class="ml-2">{{$em[0]->nombre}}</span></p>
          <p class="text-muted"><strong>Apellido Paterno:</strong><span class="ml-2">{{$em[0]->apellido_paterno}}</span></p>
          <p class="text-muted"><strong>Apellido Materno :</strong><span class="ml-2">{{$em[0]->apellido_materno}}</span></p>
          <p class="text-muted"><strong>N° de Documento (CI) :</strong><span class="ml-2">{{$em[0]->numero_documento_ci}}</span></p>
          <p class="text-muted"><strong>Dirección :</strong><span class="ml-2">{{$em[0]->direccion}}</span></p>
          <p class="text-muted"><strong>Celular :</strong><span class="ml-2">{{$em[0]->telefono_movil}}</span></p>
          <p class="text-muted"><strong>Telefono Fijo :</strong><span class="ml-2">{{$em[0]->telefono_fijo}}</span></p>
          <p class="text-muted"><strong>Email :</strong><span class="ml-2">{{$em[0]->email}}</span></p>
          <p class="text-muted"><strong>Fecha de Nacimiento :</strong><span class="ml-2">{{date("d-m-Y", strtotime($em[0]->fecha_nacimiento))}}</span></p>
          <p class="text-muted"><strong>Genero :</strong><span class="ml-2">{{$em[0]->genero}}</span></p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8">
    <div class="row">  
      <div class="col-sm-6">
        <div class="card tilebox-one">
          <div class="card-body">
            <i class="dripicons-calendar float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Inicio de Actividades</h6>
            <h2 class="m-b-20">{{date("d/m/Y", strtotime($em[0]->fecha_inicio_actividad))}}</h2>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card tilebox-one">
          <div class="card-body">
            <i class="dripicons-calendar float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Fin de Actividades</h6>
            <h2 class="m-b-20">{{date("d/m/Y", strtotime($em[0]->fecha_fin_actividad))}}</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="card tilebox-one">
          <div class="card-body">
            <i class="dripicons-clock float-right text-muted"></i>
              <h6 class="text-muted text-uppercase mt-0">Horarios Mañana</h6>
              <h2 class="m-b-20"><span>{{date("H:i", strtotime($em[0]->horario_mañana_inicio))}} | {{date("H:i", strtotime($em[0]->horario_mañana_fin))}}</span></h2>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card tilebox-one">
          <div class="card-body">
            <i class="dripicons-clock float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Horarios tarde</h6>
            <h2 class="m-b-20"><span>{{date("H:i", strtotime($em[0]->horario_tarde_inicio))}} | {{date("H:i", strtotime($em[0]->horario_tarde_fin))}}</span></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="card tilebox-one">
          <div class="card-body">
            <i class="dripicons-phone float-right text-muted"></i>
              <h6 class="text-muted text-uppercase mt-0">Telefono  Movil Corporativo</h6>
              <h2 class="m-b-20"><span>{{$em[0]->telefono_movil_corporativo}}</span></h2>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card tilebox-one">
          <div class="card-body">
            <i class="dripicons-phone float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Telefono Fijo Corporativo</h6>
            <h2 class="m-b-20"><span>{{$em[0]->telefono_fijo_corporativo}}</span></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card tilebox-one">
          <div class="card-body">
            <i class="dripicons-home float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Direcion </h6>
            <h2 class="m-b-20"><span>{{$em[0]->direccion}}</span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop