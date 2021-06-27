@extends('layouts\admin')
@section('titulo_pagina', 'Clientes')
@section('descripcion_pagina', 'Formulario Ventas')

@section('content')

  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box">
          <h4 class="page-title">DATOS DEL NUEVO USUARIO</h4>
        </div>
      </div>
    </div>
    <div class="tab-content">
      <div class="tab-pane show active">
        <form action="{{route('auths.store')}}" method="POST" class="needs-validation" novalidate>
          @csrf
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group mb-3">
                <label for="validationNombre">Nombre</label>
                <input type="text" name="nombre" value=""  class="form-control" id="validationNombre" placeholder="Nombre"  >
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta el Nombre
                </div>
                @error('nombre')
                <div class="alert alert-danger" role="alert">
                  <strong>* </strong> {{$message}}
                </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <label for="validationApellido_paterno">Apellido Paterno</label>
                <input type="text" name="apellido_paterno" class="form-control" id="validationApellido_paterno" placeholder="Apellidos" value="" >
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Apellido
                </div>
                @error('apellido_paterno')
                  <div class="alert alert-danger" role="alert">
                    <strong>* </strong> {{$message}}
                  </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <label for="validationApellido_materno">Apellido Materno</label>
                <input type="text" name="apellido_materno" class="form-control" id="validationApellido_materno" placeholder="Apellidos" value="" >
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Apellido
                </div>
                @error('apellido_materno')
                  <div class="alert alert-danger" role="alert">
                    <strong>* </strong> {{$message}}
                  </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group mb-3">
                <label for="validationNumDocumento">Numero de Documento de Identidad (CI)</label>
                <input type="number" class="form-control" name="numero_documento_ci" id="validationNumDocumento" placeholder="Numero de documento de Identidad" value="" >
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Numero de Documento
                </div>
                @error('numero_documento_ci')
                <div class="alert alert-danger" role="alert">
                  <strong>* </strong> {{$message}}
                </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group mb-3">
                <label for="validationDireccion">Direccón</label>
                <input type="text" name="direccion" value="" class="form-control" id="validationDireccion" placeholder="Direccion"  >
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Telefono Movil
                </div>
                @error('direccion')
                <div class="alert alert-danger" role="alert">
                  <strong>* </strong> {{$message}}
                </div>
                @enderror
              </div>
            </div>
          </div><hr>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <label for="validationTelefonoMovil">Telefono Movil</label>
                <input type="text" name="telefono_movil" value="" class="form-control" id="validationTelefonoMovil" placeholder="Telefono Movil"  >
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Telefono Movil
                </div>
                @error('telefono_movil')
                <div class="alert alert-danger" role="alert">
                  <strong>* </strong> {{$message}}
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <label for="validationTelefonoFijo">Telefono Fijo</label>
                <input type="text" name="telefono_fijo" value="" class="form-control" id="validationTelefonoFijo" placeholder="Telefono Fijo"  >
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
            <input type="email" name="email" class="form-control" id="validationEmail" placeholder="Coreo Electronico" >
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
                <input type="date" name="fecha_nacimiento" class="form-control" id="validationFechaNacimiento" >
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Fecha de Nacimiento
                </div>
                @error('fecha_nacimiento')
                <div class="alert alert-danger" role="alert">
                  <strong>* </strong> {{$message}}
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group mb-3">
                <div class="form-group">
                  <label for="file">Foto</label>
                  <input type="file" id="file" class="form-control-file">
                  <div class="valid-feedback">
                    Muy Bien!
                  </div>
                  <div class="invalid-feedback">
                    Seleccione una foto
                  </div>
              </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group mb-3">
                <label>Genero</label><br>
                <label> Masculino </label>
                <input type="radio" name="genero" value="Masculino"/>
                <label> Femenino </label>
                <input type="radio" name="genero" value="Femenino"/>
              </div>
            </div>
          </div><hr>
          <div class="row">
            <div class="col-12">
              <div class="page-title-box">
                <h4 class="page-title">ASIGNAR | CARGO | SUCURSAL | ALMACEN</h4>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
              <div class="form-group mb-3">
                <label for="validationS0">Cargo</label>
                <select name="cargo" class="form-control" id="validationS0">
                  <option></option>
                  <option value="cajero">Cajero</option>
                  <option value="almacenero">Almacenero</option>
                  <option value="chofer">Chofer</option>
                  <option value="ejecutivo_ventas">Ejecutivo de ventas</option>
                </select>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group">
                <label for="da">Experiencia (Meses)</label>
                <input class="form-control" id="da" type="number" name="experiencia_meses">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group mb-3">
                <label for="validationS1">Sucursal</label>
                <select name="sucursal" class="form-control" id="validationS1">
                  <option></option>
                  <option value="0">Casa Matriz</option>
                  <option value="1">Sucursal 1</option>
                  <option value="2">Sucursal 2</option>
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group mb-3">
                <label for="validationS2">Almacen</label>
                <select name="almacen" class="form-control" id="validationS2">
                  <option></option>
                  <option value="1">Almacen 1</option>
                  <option value="2">Almacen 2</option>
                  <option value="3">Almacen 3</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="page-title-box">
                <h4 class="page-title">FECHAS Y HORARIOS</h4>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="date1">Fecha que iniciara la actividad</label>
                <input class="form-control" id="date1" type="date" name="fecha_inicio_actividad">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="date2">Fecha en la que terminara la actividad</label>
                <input class="form-control" id="date2" type="date" name="fecha_fin_actividad">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="form-group mb-3">
                <label for="date3">Horario mañana ingreso</label>
                <input type="time" name="horario_mañana_inicio" value="" class="form-control" id="date3"  >
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Horario mañana ingreso.
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group mb-3">
                <label for="date4">Horario mañana salida</label>
                <input type="time" name="horario_mañana_fin" value="" class="form-control" id="date4"  >
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Horario mañana salida
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group mb-3">
                <label for="date5">Horario tarde ingreso</label>
                <input type="time" name="horario_tarde_inicio" value="" class="form-control" id="date5"  >
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Horario tarde ingreso
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group mb-3">
                <label for="date6">Horario tarde salida</label>
                <input type="time" name="horario_tarde_fin" value="" class="form-control" id="date6" >
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Horario tarde salida
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-12">
              <div class="page-title-box">
                <h4 class="page-title">CREAR USUARIO Y CONTRASEÑA</h4>
              </div>
            </div>
          </div>
          <div class="form-group mb-3">
            <label for="validationUser">Nombre de Usuario</label>
            <input type="text" name="user" class="form-control" id="validationNombre" placeholder="Nombre de Usuario" />
            @error('user')
              <div class="alert alert-danger" role="alert">
                <strong>* </strong> {{$message}}
              </div>
            @enderror
          </div>
          <div class="form-group mb-3">
            <label for="validationPassword">Contraseña</label>
            <input type="text" name="password" class="form-control" id="validationPassword" placeholder="Contraseña" />
            @error('password')
              <div class="alert alert-danger" role="alert">
                <strong>* </strong> {{$message}}
              </div>
            @enderror
          </div>
          <button class="btn btn-primary" type="submit">Agregar Cliente</button>
          {{-- <a href="{{route('clientes.index')}}" class="btn btn-danger">
            Cancelar
          </a> --}}
        </form><hr>
        
      </div> <!-- end preview-->
    </div> <!-- end tab-content-->
  </div>

@endsection