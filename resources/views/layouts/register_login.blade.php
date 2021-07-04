<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Register | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ ('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ ('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ ('assets/css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ ('assets/css/app-modern-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

    <!-- App js -->
    <script src="{{ ('assets/js/jquery/jquery.min.js') }}"></script>

</head>

<body class="loading authentication-bg" data-layout-config='{"darkMode":false}'>

    <div class="account-pages mt-10  mb-10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card">
                        <!-- Logo-->
                        <div class="card-header pt-4 pb-4 text-center bg-primary">
                            <a href="index.html">
                                <span><img src="assets/images/logo.png" alt="" height="18"></span>
                            </a>
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Registro</h4>
                                <!--                                     <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute </p> -->
                            </div>

                            <!-- Seccino de errrores-->
                            @if(Session::has('message'))
                            <div class="container">
                                <div class="alert alert-{{ Session::get('typealert') }}" style="display:none;">
                                    {{ Session::get('message')}}
                                    @if ($errors->any())
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                    <script>
                                        $('.alert').slideDown();
                                        setTimeout(function(){$('.alert').slideUp(); }, 10000);
                                    </script>
                                </div>
                            </div>
                            @endif

                            <form  action="{{route('registro_administrador')}}" class="mt-5" novalidate">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname">Nombre</label>
                                            <div class="controls">
                                                <input class="form-control" type="text" name="nombre" placeholder="Introduzca su nombre">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname">Apellido paterno</label>
                                            <div class="controls">
                                                <input class="form-control" type="text" name="apellido_paterno" placeholder="Introduzca su apellido paterno">
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname">Apellido materno</label>
                                            <div class="controls">
                                                <input class="form-control" type="text" name="apellido_materno" placeholder="Introduzca su apellido materno">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form_descripcion">Genero</label>
                                            <div class="controls">
                                                <select name="genero" id="select" class="form-control" name="sexo" placeholder="Introduzca su genero">
                                                    <option value="varon">Masculino</option>
                                                    <option value="mujer">Femenino</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname">Numero de cedula de identidad</label>
                                            <div class="controls">
                                                <input class="form-control" type="text" name="ci" placeholder="Introduzca su numero de cedula de identidad">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname">Fecha de nacimiento</label>
                                            <div class="controls">
                                                <input class="form-control" type="date" name="fecha_nacimiento" placeholder="Introduzca su fecha de nacimiento">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress">Numero de celular</label>
                                            <div class="controls">
                                                <input class="form-control" type="number" name="celular" placeholder="Introduzca su numero de celular">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress">Correo electronico</label>
                                            <div class="controls">
                                                <input class="form-control" type="email" name="correo_electronico" placeholder="Introduzca su correo electronico">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <h5 class="form_descripcion">Imagen usuario</h5>
                                            <div class="card">
                                                <label for="input-file-now"><button type="button" class="btn waves-effect waves-light btn-sm btn-info"><i class="fas fa-exclamation"></i></button>OJO Solo archivos png</label>
                                                <input type="file" id="input-file-now" name="direccion_imagen" class="dropify" data-allowed-file-extensions="png" required />
                                            </div>
                                        </div>
                                    </div>
                      <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <h5 class="form_descripcion">Perfil usuario</h5>
                            <div class="card">
                              <label for="input-file-now">
                                <button type="button" class="btn waves-effect waves-light btn-sm btn-info">
                                  <i class="fas fa-cog"></i>
                              </button>
                              Perfil administrador
                          </label>
                          <div class="input-group">
                            <ul class="icheck-list">
                              <li>
                                <input tabindex="7" type="radio" class="check" id="minimal-radio-1"
                                name="rol" value="0">
                                <label for="minimal-radio-1">Administrador</label>
                            </li>                             

                        </ul>
                    </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Usuario</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="mdi mdi-account"></i>
                    </span>
                </div>
                <input type="text" name='name' class="form-control" required>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-md-6">

    </div>
    <div class="col-md-6">

    </div>
</div>
<div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="exampleInputEmail1">Contraseña</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
              <i class="mdi mdi-key-variant"></i>
          </span>
      </div>
      <input type="text" name="password" class="form-control" required>
  </div>
</div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Repita contraseña</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">
          <i class="mdi mdi-key-variant"></i>
      </span>
  </div>
  <input type="text" name="re_password" class="form-control" required>
</div>
</div>

</div>
</div>    
<div class="form-group mb-0 text-center">
    <a href="{{url('/inicio')}}" class="btn btn-danger"><b>Cancelar</b></a>
    <button class="btn btn-primary" type="submit"> Registrarse </button>
</div>
</form>
</div>
</div>
</div>

</div> 
</div>

</div>
</div>
<footer class="footer footer-alt">
 © Multiacero
</footer>
<script src="{{ ('assets/js/vendor.min.js') }}"></script>
<script src="{{ ('assets/js/app.min.js') }}"></script>

</body>
</html>
