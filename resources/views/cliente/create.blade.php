@extends('layouts\admin')
@section('titulo_pagina', 'Clientes')
@section('descripcion_pagina', 'Formulario Ventas')

@section('content')

  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box">
          <h4 class="page-title">Agregar Cliente</h4>
        </div>
      </div>
    </div>
    <div class="tab-content">
      <div class="tab-pane show active">
        <form action="{{route('clientes.store')}}" method="POST" novalidate>
          @csrf
          <div class="form-group mb-3">
            <label for="validationNombre">Razón Social</label>
            <input type="text" name="nombre_razon_social" value="{{old('nombre_razon_social')}}"  class="form-control" id="validationNombre" placeholder="Razón Social"/>
            @error('nombre_razon_social')
              <div class="alert alert-danger" role="alert">
                <strong>* </strong> {{$message}}
              </div>
            @enderror
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <label for="validationNumDocumento">Numero de Documento</label>
                <input type="number" class="form-control" name="num_documento" id="validationNumDocumento" placeholder="Numero de documento" value="{{old('num_documento')}}" min="99999"/>
                @error('num_documento')
                  <div class="alert alert-danger" role="alert">
                    <strong>* </strong> {{$message}}
                  </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <label for="validationSelect">Tipo de Documento</label>
                <?php
                  switch(old('tipo_documento')) {
                    case "CI":
                    $selected_ci = 'selected';
                    $selected_nit = '';
                    break;
                    case "NIT":
                    $selected_ci = '';
                    $selected_nit = 'selected';
                    break;
                    default:
                    $selected_ci = '';
                    $selected_nit = '';
                  }
                ?>
                <select name="tipo_documento" class="form-control" id="validationSelect">
                  <option value=""></option>
                  <option value="CI" {{$selected_ci}}>CI</option>
                  <option value="NIT" {{$selected_nit}}>NIT</option>
                </select>
                @error('tipo_documento')
                  <div class="alert alert-danger" role="alert">
                    <strong>* </strong> {{$message}}
                  </div>
                @enderror
              </div>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Agregar Cliente</button>
          <a href="{{route('clientes.index')}}" class="btn btn-danger">
            Cancelar
          </a>
        </form><hr>
      </div> <!-- end preview-->
    </div> <!-- end tab-content-->
  </div>

@endsection