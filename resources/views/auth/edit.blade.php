@extends('layouts\admin')
@section('titulo_pagina', 'Clientes')
@section('descripcion_pagina', 'Formulario Ventas')

@section('content')
<ul>
  @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
  @endforeach
</ul>
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box">
          <h4 class="page-title">EDITAR DATOS DEL USUARIO</h4>
        </div>
      </div>
    </div>
    <div class="tab-content">
      <div class="tab-pane show active">
        <form action="{{route('auths.update',$em[0]->id)}}" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
          @csrf
          @method('put')
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group mb-3">
                <label for="validationNombre">Nombre</label>
                <input type="text" name="nombre" value="{{old('nombre',$em[0]->nombre)}}"  class="form-control" id="validationNombre" placeholder="Nombre"  >
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
                <input type="text" name="apellido_paterno" class="form-control" id="validationApellido_paterno" placeholder="Apellidos" value="{{old('apellido_paterno',$em[0]->apellido_paterno)}}" >
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
                <input type="text" name="apellido_materno" class="form-control" id="validationApellido_materno" placeholder="Apellidos" value="{{old('apellido_materno',$em[0]->apellido_materno)}}" >
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Apellido
                </div>
                @error('apellido_materno')<div class="alert alert-danger" role="alert"><strong>* </strong> {{$message}}</div>@enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group mb-3">
                <label for="validationNumDocumento">Numero de Documento de Identidad (CI)</label>
                <input type="number" class="form-control" name="numero_documento_ci" id="validationNumDocumento" placeholder="Numero de documento de Identidad" value="{{old('numero_documento_ci',$em[0]->numero_documento_ci)}}" >
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
                <input type="text" name="direccion" class="form-control" id="validationDireccion" placeholder="Direccion" value="{{old('direccion',$em[0]->direccion)}}">
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
                <input type="text" name="telefono_movil" class="form-control" id="validationTelefonoMovil" placeholder="Telefono Movil" value="{{old('telefono_movil',$em[0]->telefono_movil)}}">
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
                <input type="text" name="telefono_fijo" class="form-control" id="validationTelefonoFijo" placeholder="Telefono Fijo" value="{{old('telefono_fijo',$em[0]->telefono_fijo)}}">
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
            <input type="email" name="email" class="form-control" id="validationEmail" placeholder="Coreo Electronico" value="{{old('email',$em[0]->email)}}">
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
                <input type="date" name="fecha_nacimiento" class="form-control" id="validationFechaNacimiento" value="{{old('fecha_nacimiento',$em[0]->fecha_nacimiento)}}">
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
                  <label for="file">Nueva Foto</label>
                  <label style="color:rgb(231, 201, 9)" for="validationPassword">No seleccione nada y se conservara la antigua Foto</label>
                  <input accept="image/*" type="file" id="file" name="foto" class="form-control-file">
                  <div class="valid-feedback">
                    Muy Bien!
                  </div>
                  <div class="invalid-feedback">
                    Seleccione una foto
                  </div>
                  @error('foto')
                    <div class="alert alert-danger" role="alert">
                      <strong>* </strong> {{$message}}
                    </div>
                  @enderror
              </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group mb-3">
                <label>Genero</label><br>
                <label> Masculino </label>
                <input type="radio" name="genero" value="Masculino" {{$em[0]->genero==='Masculino'?'checked':''}}/>
                <label> Femenino </label>
                <input type="radio" name="genero" value="Femenina"{{$em[0]->genero==='Femenina'?'checked':''}}/>
              </div>
            </div>
          </div><hr>
          <div class="row">
            <div class="col-12">
              <div class="page-title-box">
                <h4 class="page-title">CANBIAR | CARGO | SUCURSAL | ALMACEN | TELEFONOS</h4>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group mb-3">
                <label for="validationS0">Cargo</label>
                <select name="cargo" class="form-control" id="validationS0">
                  <option value="{{$em[0]->cargo==='Administrador'?$em[0]->cargo:''}}" {{$em[0]->cargo==='Administrador'?'selected':''}}>{{$em[0]->cargo==='Administrador'?$em[0]->cargo:''}}</option>
                  <option value="Cajero" {{$em[0]->cargo==='Cajero'?'selected':''}} {{$em[0]->cargo==='Administrador'?'disabled':''}}>Cajero</option>
                  <option value="Almacenero" {{$em[0]->cargo==='Almacenero'?'selected':''}} {{$em[0]->cargo==='Administrador'?'disabled':''}}>Almacenero</option>
                  <option value="Chofer" {{$em[0]->cargo==='Cajero'?'Chofer':''}} {{$em[0]->cargo==='Administrador'?'disabled':''}}>Chofer</option>
                  <option value="Ejecutivo de ventas" {{$em[0]->cargo==='Ejecutivo de ventas'?'selected':''}} {{$em[0]->cargo==='Administrador'?'disabled':''}}>Ejecutivo de ventas</option>
                </select>
                @error('cargo')
                  <div class="alert alert-danger" role="alert">
                    <strong>* </strong> {{$message}}
                  </div>
                 @enderror
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="da">Experiencia (Meses)</label>
                <input class="form-control" id="da" type="number" name="experiencia_meses" value="{{old('experiencia_meses',$em[0]->experiencia_meses)}}">
                @error('experiencia_meses')
                  <div class="alert alert-danger" role="alert">
                    <strong>* </strong> {{$message}}
                  </div>
                 @enderror
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group mb-4">
                <label for="su">Asignar Almacen</label>
                {{-- <select class="form-control" name="almacen" {{$em[0]->cargo==='Administrador'?'disabled':''}}> --}}
                  <select class="form-control" name="almacen">
                  <option value="{{$em[0]->cargo==='Administrador'?0:''}}" {{$em[0]->cargo==='Administsrador'?'selected':''}}>{{$em[0]->cargo==='Administrador'?'Todos':''}}</option>
                  @foreach ($su as $i)
                    <optgroup label="Sucursal {{$i->numero_sucursal}}">
                      @foreach ($al as $j)
                        @if($j->empresa_id==$i->id)
                          <option value="{{$j->id}}" {{$j->id===$em[0]->id_almacenes?'selected':''}} {{$em[0]->cargo==='Administrador'?'disabled':''}}>{{$j->nombre}}</option>
                        @endif
                      @endforeach
                    </optgroup>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="tel2">Telefono Movil Corporativo</label>
                <input class="form-control" id="tel2" type="number" name="telefono_movil_corporativo" placeholder="Telefono Movil Corporativo" value="{{old('telefono_movil_corporativo',$em[0]->telefono_movil_corporativo)}}">
                @error('telefono_movil_corporativo')
                  <div class="alert alert-danger" role="alert">
                    <strong>* </strong> {{$message}}
                  </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="tel1">Telefoino Fijo Corporativo</label>
                <input class="form-control" id="tel1" type="number" name="telefono_fijo_corporativo" placeholder="Telefono fijo Corporativo" value="{{old('telefono_fijo_corporativo',$em[0]->telefono_fijo_corporativo)}}">
                @error('telefono_fijo_corporativo')
                  <div class="alert alert-danger" role="alert">
                    <strong>* </strong> {{$message}}
                  </div>
                 @enderror
              </div>
            </div>
          </div><hr>
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
                <input class="form-control" id="date1" type="date" name="fecha_inicio_actividad" value="{{old('fecha_inicio_actividad',$em[0]->fecha_inicio_actividad)}}">
                @error('fecha_inicio_actividad')
                  <div class="alert alert-danger" role="alert">
                    <strong>* </strong> {{$message}}
                  </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="date2">Fecha en la que terminara la actividad</label>
                <input class="form-control" id="date2" type="date" name="fecha_fin_actividad" value="{{old('fecha_fin_actividad',$em[0]->fecha_fin_actividad)}}">
                @error('fecha_fin_actividad')
                  <div class="alert alert-danger" role="alert">
                    <strong>* </strong> {{$message}}
                  </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="form-group mb-3">
                <label for="date3">Horario mañana ingreso</label>
                <input type="time" name="horario_mañana_inicio" class="form-control" id="date3" value="{{old('horario_mañana_inicio',date('h:i',strtotime($em[0]->horario_mañana_inicio)))}}">
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Horario mañana ingreso.
                </div>
                @error('horario_mañana_inicio')
                  <div class="alert alert-danger" role="alert">
                    <strong>* </strong> {{$message}}
                  </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group mb-3">
                <label for="date4">Horario mañana salida</label>
                <input type="time" name="horario_mañana_fin" class="form-control" id="date4" value="{{old('horario_mañana_fin',date('h:i',strtotime($em[0]->horario_mañana_fin)))}}" >
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Horario mañana salida
                </div>
                @error('horario_mañana_fin')
                  <div class="alert alert-danger" role="alert">
                    <strong>* </strong> {{$message}}
                  </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group mb-3">
                <label for="date5">Horario tarde ingreso</label>
                <input type="time" name="horario_tarde_inicio" class="form-control" id="date5" value="{{old('horario_tarde_inicio',date('h:i',strtotime($em[0]->horario_tarde_inicio)))}}">
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Horario tarde ingreso
                </div>
                @error('horario_tarde_inicio')
                  <div class="alert alert-danger" role="alert">
                    <strong>* </strong> {{$message}}
                  </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group mb-3">
                <label for="date6">Horario tarde salida</label>
                <input type="time" name="horario_tarde_fin" class="form-control" id="date6" value="{{old('horario_tarde_fin',date('h:i',strtotime($em[0]->horario_tarde_fin)))}}">
                <div class="valid-feedback">
                  Muy Bien!
                </div>
                <div class="invalid-feedback">
                  Falta Horario tarde salida
                </div>
                @error('horario_tarde_fin')
                  <div class="alert alert-danger" role="alert">
                    <strong>* </strong> {{$message}}
                  </div>
                @enderror
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-12">
              <div class="page-title-box">
                <h4 class="page-title">CAMBIAR USUARIO Y CONTRASEÑA</h4>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-11">
              <div class="form-group mb-3">
                <label for="validationUser">Nombre de Usuario</label>
                <input type="text" name="user" class="form-control" id="validationNombre" placeholder="Nombre de Usuario" value="{{old('user',$em[0]->user)}}"/>
                @error('user')
                  <div class="alert alert-danger" role="alert">
                    <strong>* </strong> {{$message}}
                  </div>
                @enderror
              </div>
            </div>
            <div class="col-1">
              <div class="form-group mb-3">
                <label>Activado</label><br>
                <input type="checkbox" name="status" id="switch" {{!$em[0]->status?'':'checked'}} {{$em[0]->cargo==='Administrador'?'disabled':''}} data-switch="success"/>
                <label for="switch" data-on-label="Si" data-off-label="No"></label>
              </div>
            </div>
          </div>
          <div class="form-group mb-3">
            <label for="validationPassword">Nueva Contraseña</label>
            <label style="color:rgb(231, 201, 9)" for="validationPassword">Deje vacío este campo y se conservara la antigua Contraseña</label>
            <input type="password" name="password" class="form-control" id="validationPassword" placeholder="Nueva Contraseña" value="{{old('password')}}"/>
            @error('password')
              <div class="alert alert-danger" role="alert">
                <strong>* </strong> {{$message}}
              </div>
            @enderror
          </div>
          <button class="btn btn-primary" type="submit">Actualizar Empleado</button>
          <a href="{{route('auths.list')}}" class="btn btn-danger">
            Cancelar
          </a>
        </form><hr>
        
      </div> <!-- end preview-->
    </div> <!-- end tab-content-->
  </div>

@endsection