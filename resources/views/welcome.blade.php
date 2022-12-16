<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ ('images/LOGO_KAPA.png') }}">

        <!-- App css -->
        <link href="{{ ('assets/css/icons.min.css ') }}" rel="stylesheet" type="text/css" />
        <link href="{{ ('assets/css/app-modern.min.css ') }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ ('assets/css/app-modern-dark.min.css ') }}" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="loading authentication-bg" data-layout-config='{"darkMode":false}'>
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.html">
                                    <span><img src="{{ ('assets/images/logo.png') }}" alt="" height="18"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Registrarse</h4>
                                    <p class="text-muted mb-4">Ingrese su usuario y contraseña para acceder al panel de administración.</p>
                                </div>

                                <form action="#">

                                    <div class="form-group">
                                        <label for="emailaddress">Usuario</label>
                                        <input type="text" class="form-control"  placeholder="Ingrese su nombre">

                                        <!-- <input class="form-control" type="text" id="emailaddress" required="" placeholder="Ingrese tu usuario"> -->
                                    </div>

                                    <div class="form-group">
                                        <a href="pages-recoverpw.html" class="text-muted float-right"><small>¿Olvidaste tu contraseña?</small></a>
                                        <label for="password">Contraseña</label>
                                        <input type="password" class="form-control" placeholder="Ingrese su contraseña">
                                            <!-- <input type="password" id="password" class="form-control" placeholder="ingrese tu contraseña"> -->
                                        <!-- <div class="input-group input-group-merge">
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Recuérdame</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <!-- <button class="btn btn-primary" type="submit"> Iniciar sesión </button> -->
                                      <a href="{{url('/admin')}}" class="btn btn-primary">Iniciar sesión</a>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">¿No tienes una cuenta?<a href="{{url('/registro_login')}}" class="text-muted ml-1"><b>Registrarse</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2021 © Multiacero
        </footer>

        <!-- bundle -->
        <script src="{{ ('assets/js/vendor.min.js') }}"></script>
        <script src="{{ ('assets/js/app.min.js') }}"></script>
        
    </body>
</html>

