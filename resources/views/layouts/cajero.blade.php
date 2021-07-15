<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Multiacero</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        {{-- para las datatables --}}
        <link href="{{asset('assets/css/vendor/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{asset('assets/css/app-modern-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style" />
        <link href="{{asset('assets/css/personalizado.css') }}" rel="stylesheet" type="text/css" />

        <!-- App js -->
        <script src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>
    </head>
    <body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Topbar Start -->
        <div class="navbar-custom topnav-navbar topnav-navbar-dark">
            <div class="container-fluid">

              <!-- LOGO -->
              <a href="index.html" class="topnav-logo">
                  <span class="topnav-logo-lg">
                      <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="16">
                  </span>
                  <span class="topnav-logo-sm">
                      <img src="{{asset('assets/images/logo_sm.png')}}" alt="" height="16">
                  </span>
              </a>
              
            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                <li class="dropdown notification-list d-lg-none">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="dripicons-search noti-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                        <form class="p-3">
                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                        </form>
                    </div>
                </li>
                <li class="dropdown notification-list">
                  <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" id="topbar-notifydrop" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="dripicons-bell noti-icon"></i>
                    <span class="noti-icon-badge"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg" aria-labelledby="topbar-notifydrop">
                  <div style="max-height: 230px;" data-simplebar>
                  <!-- item-->
                  <div class="dropdown-item noti-title">
                    <h5 class="m-0">
                      <span class="float-right">
                        <a href="javascript: void(0);" class="text-dark">
                          <small>Clear All</small>
                        </a>
                      </span>Notification
                    </h5>
                  </div>
                  <div style="max-height: 230px;" data-simplebar>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                      <div class="notify-icon">
                        <img src="{{asset('assets/images/products/fierro.jpg')}}" class="img-fluid rounded-circle" alt="" />
                      </div>
                      <p class="notify-details">Fierro Corrugado</p>
                      <p class="text-muted mb-0 user-msg"><small>Pocas existencias 12 pzs</small></p>
                    </a>
                  </div>
                  <div style="max-height: 230px;" data-simplebar>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                      <div class="notify-icon">
                        <img src="{{asset('assets/images/products/calaminas.jpg')}}" class="img-fluid rounded-circle" alt="" />
                      </div>
                      <p class="notify-details">Calamina Simple</p>
                      <p class="text-muted mb-0 user-msg"><small>Pocas existencias 60 pzs</small></p>
                    </a>
                  </div>
                  <div style="max-height: 230px;" data-simplebar>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                      <div class="notify-icon">
                        <img src="{{asset('assets/images/products/lavaplatos.jpg')}}" class="img-fluid rounded-circle" alt="" />
                      </div>
                      <p class="notify-details">Lavaplatos</p>
                      <p class="text-muted mb-0 user-msg"><small>Pocas existencias 5 pzs</small></p>
                    </a>
                  </div>
                </li>
                <li class="notification-list">
                    <a class="nav-link right-bar-toggle" href="javascript: void(0);">
                        <i class="dripicons-gear noti-icon"></i>
                    </a>
                </li>
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="account-user-avatar"> 
                        <img src="{{str_replace('public','storage/personal',asset(DB::table('empleados')->where('id',Auth::user()->id)->first()->foto))}}" alt="user-image" class="rounded-circle">
                    </span>
                    <span>
                        <span class="account-user-name">{{Auth::user()->user}}</span>
                        <span class="account-position">{{DB::table('empleados')->where('id',Auth::user()->id)->first()->cargo}}</span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                    <!-- item-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Bienvenido !</h6>
                    </div>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-account-circle mr-1"></i>
                        <span>Mi cuenta</span>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-account-edit mr-1"></i>
                        <span>Configuración</span>
                    </a>
                    <!-- item-->
                    <form action="{{route('auths.logout')}}" method="POST">
                      @csrf
                      <a href="javascript:void(0);" onclick="this.closest('form').submit()" class="dropdown-item notify-item">
                        <i class="mdi mdi-logout mr-1"></i>
                        <span>Cerrar sesión</span>
                      </a>
                    </form>
                    </div>
                </li>
                </ul>
                <a class="button-menu-mobile disable-btn">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- end Topbar -->
        
        <!-- Start Content-->
        <div class="container-fluid">

            <!-- Begin page -->
            <div class="wrapper">

                <!-- ========== Left Sidebar Start ========== -->
                <div class="left-side-menu left-side-menu-detached">

                    <div class="leftbar-user">
                        <a href="javascript: void(0);">
                            <img src="{{str_replace('public','storage/personal',asset(DB::table('empleados')->where('id',Auth::user()->id)->first()->foto))}}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name">{{Auth::user()->user}}</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">
                        <li class="side-nav-title side-nav-item">Menu principal</li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="icon-ventas"></i>
                                <span> Ventas </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{route('ventas.index')}}">Todas las Ventas</a>
                                </li>
                                <li>
                                    <a href="{{route('ventas.create')}}">Nueva Factura</a>
                                </li>
                          </ul>
                      </li>

                      <li class="side-nav-item">
                        <a href="javascript: void(0);" class="side-nav-link">
                            <i class="icon-almacen"></i>
                            <span> Inventario </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="side-nav-second-level" aria-expanded="false">
                            <li class="side-nav-item">
                                <a href="javascript: void(0);" aria-expanded="false">Existencia productos
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="side-nav-third-level" aria-expanded="false">
                                    <li>
                                        <a href="{{url('/listar_almacenproducto')}}">Listar</a>
                                    </li>
                                </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{route('clientes.index')}}" class="side-nav-link">
                                <i class="dripicons-user"></i>
                                <span> Clientes </span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Sidebar -->
                    <div class="clearfix"></div>
                    <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->
                <div class="content-page">
                    <div class="content">
                            <div class="row">
                                <div class="col-12">
                                 @section('content')
                                 @show

                             </div>
                         </div>
                         <!-- end row -->
                     </div> <!-- End Content -->
                     <!-- Footer Start -->
                     <footer class="footer">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-6">
                                2021 © Multiacero
                            </div>
                          </div>
                        </div>
                    </footer>
                <!-- end Footer -->
            </div> <!-- content-page -->
        </div> <!-- end wrapper-->
    </div>
    <!-- END Container -->
    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0">Ajustes</h5>
        </div>
        <div class="rightbar-content h-100" data-simplebar>
            <div class="p-3">
                <div class="alert alert-warning" role="alert">
                    <strong>Personalice</strong> la combinación de colores general, el menú de la barra lateral, etc.
                </div>
                <!-- Settings -->
                <h5 class="mt-3">Esquema de colores</h5>
                <hr class="mt-1" />
                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light"
                    id="light-mode-check" checked />
                    <label class="custom-control-label" for="light-mode-check">Modo Día</label>
                </div>
                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark"
                    id="dark-mode-check" />
                    <label class="custom-control-label" for="dark-mode-check">Modo Nocturno</label>
                </div>
                <!-- Left Sidebar-->
                <h5 class="mt-4">Barra lateral izquierda</h5>
                <hr class="mt-1" />

                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="compact" value="fixed" id="fixed-check"
                    checked />
                    <label class="custom-control-label" for="fixed-check">Despazable</label>
                </div>
                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="compact" value="condensed"
                    id="condensed-check" />
                    <label class="custom-control-label" for="condensed-check">Condensada</label>
                </div>
                <button class="btn btn-primary btn-block mt-4" id="resetBtn">Restablecen predeterminado</button>
            </div> <!-- end padding-->

        </div>
    </div>

    <div class="rightbar-overlay"></div>
    <!-- /Right-bar -->
    <!-- bundle -->
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>

</body>
</html>