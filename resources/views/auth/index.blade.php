<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Auth | Multiacero</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
    </head>
    <body class="loading authentication-bg" data-layout-config='{"darkMode":false}'>
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.html">
                                    <span><img src="assets/images/logo.png" alt="" height="18"></span>
                                </a>
                            </div>
                            <div class="card-body p-4">
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Iniciar Sesión</h4>
                                    <p class="text-muted mb-4">Introduzca su nombre de usuario y su contraseña para acceder al Sistema.</p>
                                </div>
                                <form action="{{route('auths.login')}}" method="POST">
                                    @csrf
                                    @if($errors->any())
                                      @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li><br>
                                      @endforeach
                                    @endif
                                    <div class="form-group">
                                        <label for="user">Nombre de Usuario</label>
                                        <input class="form-control" type="text" id="user" name="user" required="" placeholder="Introduzca su Nombre de Usuario">
                                    </div>
                                    <div class="form-group">
                                        <a href="pages-recoverpw.html" class="text-muted float-right"><small>¿Ha olvidado su contraseña?</small></a>
                                        <label for="password">Contraseña</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" name="password" placeholder="Introduzca su contraseña">
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Entrar </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <footer class="footer footer-alt">
            2021 © Multiacero
        </footer>
        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>
    </body>
</html>
