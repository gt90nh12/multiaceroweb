@extends('layouts\admin')
@section('titulo_pagina', 'Clientes')
@section('descripcion_pagina', 'Formulario Ventas')

@section('content')

  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box">
          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Multiacero</a></li>
              <li class="breadcrumb-item"><a href="javascript: void(0);">Clientes</a></li>
              <li class="breadcrumb-item active">Agregar Cliente</li>
            </ol>
          </div>
          <h4 class="page-title">Agregar Cliente</h4>
        </div>
      </div>
    </div>
    <div class="tab-content">
      <div class="tab-pane show active">

        <form action="{{route('clientes.store')}}" method="POST" class="needs-validation" novalidate>
          @csrf
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <label for="validationNombre">Nombre</label>
                <input type="text" name="nombre" value=""  class="form-control" id="validationNombre" placeholder="Nombre"  >
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta el Nombre
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <label for="validationApellidos">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" id="validationApellidos" placeholder="Apellidos" value="" required>
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Apellido
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <label for="validationNumDocumento">Numero de Documento</label>
                <input type="number" class="form-control" name="num_documento" id="validationNumDocumento" placeholder="Numero de documento" value="" required>
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Numero de Documento
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <label for="validationSelect">Tipo de Documento</label>
                <select name="tipo_documento" class="form-control" id="validationSelect">
                  <option value="CI">CI</option>
                  <option value="NIT">NIT</option>
                </select>
              </div>
            </div>
          </div><hr>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <label for="validationTelefonoMovil">Telefono Movil</label>
                <input type="text" name="telefono_movil" value="" class="form-control" id="validationTelefonoMovil" placeholder="Nombre"  required>
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Telefono Movil
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <label for="validationTelefonoFijo">Telefono Fijo</label>
                <input type="text" name="telefono_fijo" value="" class="form-control" id="validationTelefonoFijo" placeholder="Nombre"  required>
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Telefono Fijo
                </div>
              </div>
            </div>
          </div>
          <div class="form-group mb-3">
            <label for="validationEmail">Correo Electronico</label>
            <input type="email" name="email" class="form-control" id="validationEmail" placeholder="Coreo Electronico" required>
            <div class="valid-feedback">
              Muy Bien!
            </div>
            <div class="invalid-feedback">
              Falta Correo Electronico
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <label for="validationFechaNacimiento">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" id="validationFechaNacimiento" value="2021-04-23" required>
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Fecha de Nacimiento
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <label for="validationFechaNacimiento">Genero</label><br>
                <label> Masculino</label>
                <input type="radio" name="sexo" value="Masculino"/>
                <label> Femenino</label>
                <input type="radio" name="sexo" value="Femenino"/>
              </div>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Agregar Cliente</button>
        </form>
      </div> <!-- end preview-->
    </div> <!-- end tab-content-->
  </div>

@endsection