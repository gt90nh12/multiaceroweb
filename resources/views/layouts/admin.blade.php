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
    <body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":true, "showRightSidebarOnStart": true}'>
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
                <?php $d=DB::table('empleados')->where('id',Auth::user()->id)->first();?>
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
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">1 min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="text-muted">5 hours ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="{{asset('assets/images/users/avatar-2.jpg')}}" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="{{asset('assets/images/users/avatar-4.jpg')}}" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>

                                    </div>
                                </li>

                                <li class="dropdown notification-list d-none d-sm-inline-block">
                                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="dripicons-view-apps noti-icon"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg p-0">

                                        <div class="p-2">
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{asset('assets/images/brands/slack.png')}}" alt="slack">
                                                        <span>Slack</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{asset('assets/images/brands/github.png')}}" alt="Github">
                                                        <span>GitHub</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{asset('assets/images/brands/dribbble.png')}}" alt="dribbble">
                                                        <span>Dribbble</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{asset('assets/images/brands/bitbucket.png')}}" alt="bitbucket">
                                                        <span>Bitbucket</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{asset('assets/images/brands/dropbox.png')}}" alt="dropbox">
                                                        <span>Dropbox</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{asset('assets/images/brands/g-suite.png')}}" alt="G Suite">
                                                        <span>G Suite</span>
                                                    </a>
                                                </div>
                                            </div>

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
                                            <img src="{{str_replace('public','storage/personal',asset($d->foto))}}" alt="user-image" class="rounded-circle">
                                        </span>
                                        <span>
                                            <span class="account-user-name">{{Auth::user()->user}}</span>
                                            <span class="account-position">{{$d->cargo}}</span>
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
                            <img src="{{str_replace('public','storage/personal',asset($d->foto))}}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name">{{Auth::user()->user}}</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">Navegacion</li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge badge-info badge-pill float-right">4</span>
                                <span> Empresa </span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{url('/registro_empresa')}}">Información</a>
                                </li>
                                <li>
                                    <a href="{{url('/registro_sucursal')}}">Sucursal</a>
                                </li>
                                <li>
                                    <a href="#">Almacen</a>
                                </li>
                                <li>
                                    <a href="#">Personal</a>
                                </li>
                                  <!-- <li class="side-nav-item mm-active">
                                    <a href="javascript: void(0);" aria-expanded="true">Empresa
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level mm-collapse mm-show" aria-expanded="false" style="">
                                        <li>
                                            <a href="{{url('/registro_empresa')}}" aria-expanded="false">Registrar</a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="javascript: void(0);" aria-expanded="false">Sucursal
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul class="side-nav-forth-level mm-collapse" aria-expanded="false" style="height: 0px;">
                                                <li>
                                                    <a href="{{url('/registro_sucursal')}}">Registrar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="javascript: void(0);" aria-expanded="false">Fabrica
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul class="side-nav-forth-level mm-collapse" aria-expanded="false" style="height: 0px;">
                                                <li>
                                                    <a href="javascript: void(0);">Registrar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="javascript: void(0);" aria-expanded="false">Almacén
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul class="side-nav-forth-level mm-collapse" aria-expanded="false" style="height: 0px;">
                                                <li>
                                                    <a href="javascript: void(0);">Registrar</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->

                            </ul>
                        </li>

                        <li class="side-nav-title side-nav-item">Administrar</li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Comercio </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="apps-ecommerce-shopping-cart.html">Ordenes de pedido</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-checkout.html">Envio</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-sellers.html">Vendedores</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-box"></i>
                                <!-- <i class="uil-envelope almacen"></i> -->
                                <span> Compras </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{url('/registro_compra')}}">Realizar compra</a>
                                </li>
<!--                                 <li>
                                    <a href="apps-email-read.html">Read Email</a>
                                </li> -->
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="icon-ventas"></i>
                                <!-- <i class="uil-envelope almacen"></i> -->
                                <span> Ventas </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{route('ventas.index')}}">Todas las Ventas</a>
                                </li>
                                <li>
                                    <a href="#">Ventas de Hoy</a>
                                </li>
                                <li>
                                  <a href="#">Revisar Facturas</a>
                              </li>
                          </ul>
                      </li>

                      <li class="side-nav-item">
                        <a href="javascript: void(0);" class="side-nav-link">
                            <i class="icon-almacen"></i>
                            <span> Almacen </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="side-nav-second-level" aria-expanded="false">
                            <li>
                                <a href="{{url('/registro_almacen')}}">Registrar</a>
                            </li>
                            <li class="side-nav-item">
                                <a href="javascript: void(0);" aria-expanded="false">Existencia productos
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="side-nav-third-level" aria-expanded="false">
                                    <li>
                                        <a href="{{url('/registro_almacenproducto')}}">Registrar</a>
                                    </li>
                                        <!-- <li>
                                            <a href="#">Listar</a>
                                        </li> -->
                                        <!-- <li>
                                            <a href="pages-500.html">Error 500</a>
                                        </li> -->
                                    </ul>
                                </li>
                                <!-- <li>
                                    <a href="apps-projects-gantt.html">Gantt <span class="badge badge-pill badge-dark-lighten font-10 float-right">New</span></a>
                                </li>
                                <li>
                                    <a href="apps-projects-add.html">Create Project <span class="badge badge-pill badge-success-lighten font-10 float-right">New</span></a>
                                </li> -->
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{route('clientes.index')}}" class="side-nav-link">
                                <i class="dripicons-user"></i>
                                <span> Clientes </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-copy-alt"></i>
                                <span> Proveedor </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{url('/registro_proveedor')}}">Crear</a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Contacto Proveedor
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="{{url('/registro_contacto_proveedor')}}">Registrar</a>                                 
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-clipboard-alt"></i>
                                <span> Productos </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">            
                                <li>
                                    <a href="{{url('/registro_producto')}}">Registrar</a>                                    
                                </li>
                                <li>
                                    <a href="{{url('/listar_producto')}}">Lista</a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Tipo
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="{{url('/registro_tipo_producto')}}">Registrar</a>
                                        </li>
                                        <!-- <li>
                                            <a href="#">Listar</a>
                                        </li> -->
                                        <!-- <li>
                                            <a href="pages-500.html">Error 500</a>
                                        </li> -->
                                    </ul>
                                </li>
<!--                                 <li>
                                    <a href="apps-ecommerce-products-details.html">Detalla de producto</a>
                                </li> -->
<!--                                 <li>
                                    <a href="apps-kanban.html">Reporte</a>
                                </li> -->
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-file-manager.html" class="side-nav-link">
                                <i class="uil-folder-plus"></i>
                                <span> File Manager </span>
                            </a>
                        </li>

                        <li class="side-nav-title side-nav-item">Personalización</li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-copy-alt"></i>
                                <span> Empresa </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="pages-profile.html">Profile</a>
                                </li>
                                <li>
                                    <a href="pages-profile-2.html">Profile 2</a>
                                </li>
                                <li>
                                    <a href="pages-invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="pages-faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="pages-pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="pages-maintenance.html">Maintenance</a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Vehiculos
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="pages-login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="pages-login-2.html">Login 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="pages-register-2.html">Register 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-logout.html">Logout</a>
                                        </li>
                                        <li>
                                            <a href="pages-logout-2.html">Logout 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-recoverpw.html">Recover Password</a>
                                        </li>
                                        <li>
                                            <a href="pages-recoverpw-2.html">Recover Password 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-lock-screen.html">Lock Screen</a>
                                        </li>
                                        <li>
                                            <a href="pages-lock-screen-2.html">Lock Screen 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-confirm-mail.html">Confirm Mail</a>
                                        </li>
                                        <li>
                                            <a href="pages-confirm-mail-2.html">Confirm Mail 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Error
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="pages-404.html">Error 404</a>
                                        </li>
                                        <li>
                                            <a href="pages-404-alt.html">Error 404-alt</a>
                                        </li>
                                        <li>
                                            <a href="pages-500.html">Error 500</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="pages-starter.html">Starter Page</a>
                                </li>
                                <li>
                                    <a href="pages-preloader.html">With Preloader</a>
                                </li>
                                <li>
                                    <a href="pages-timeline.html">Timeline</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="landing.html" target="_blank" class="side-nav-link">
                                <i class="uil-globe"></i>
                                <span class="badge badge-light float-right">New</span>
                                <span> Vehiculos </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-window"></i>
                                <span> Personas </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="layouts-horizontal.html">Horizontal</a>
                                </li>
                                <li>
                                    <a href="layouts-vertical.html">Vertical</a>
                                </li>
                            </ul>
                        </li>
                    </ul>


                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                    <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->

                <div class="content-page">
                    <div class="content">

                        <!-- start page title -->
                        {{-- <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">        
                                    <h3 class="page-title">@yield('titulo_pagina')</h3>
                                    <p class="text-themecolor mb-0 mt-0">@yield('descripcion_pagina')<p>
                                    </div>
                                </div>
                            </div>  --}}
                            <!-- end page title -->    

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
                            <!-- <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div> -->
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