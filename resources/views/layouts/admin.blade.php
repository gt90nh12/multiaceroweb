<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Multiacero</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{ ('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ ('assets/css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ ('assets/css/app-modern-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />
        <link href="{{ ('assets/css/personalizado.css') }}" rel="stylesheet" type="text/css" />

        <!-- App js -->
        <script src="{{ ('assets/js/jquery/jquery.min.js') }}"></script>
        <style type="text/css">
    
#archivo_seleccionado{
    display: none;
}
.contenedor_imagen{
     background: url('data:image/png;base64,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');
      background-repeat: no-repeat;
      background-position: center;
     background-size: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
     height: 145px;
     width: 100%;
border: 1px solid #efefef;

}
#ver_archivo img{
    height: auto;
    width: 90%;
}
.boton_agregar_lote{
    background: #02a8b5;
    border-radius: 5px;
    color: #fff;
    text-align: center;
    }
.ocultar_contenedor{
    display: none;|
}

/* seccion de contenedor de productos comprados*/
.contenedor_productos_comprados{
    border:0px;
    margin: 0px;
    padding: 25px;
    margin-top: 25px;
    /*margin-left: 5%; */
    /*border: 1px solid #eef2f7;*/

border: 1px solid #eef2f7;
    width: 100%;
    height: 450px;
    /*background: blue;*/
}
.producto_comprado{
    /*background: blue;*/
    background: linear-gradient(0deg, #eef2f7 0%, #fff 100%);
    border-bottom: #6c757d 1px solid;
    /*background: #eef2f7;*/
    margin-bottom: 4px;
    
}

.imagen_producto_compra{
    height: 120px;
}
</style>
    </head>

    <body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":true, "showRightSidebarOnStart": true}'>

        <!-- Topbar Start -->
        <div class="navbar-custom topnav-navbar topnav-navbar-dark">
            <div class="container-fluid">

                <!-- LOGO -->
                <a href="index.html" class="topnav-logo">
                    <span class="topnav-logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="16">
                    </span>
                    <span class="topnav-logo-sm">
                        <img src="assets/images/logo_sm.png" alt="" height="16">
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
                                        <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
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
                                        <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
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
    
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View All
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
                                            <img src="assets/images/brands/slack.png" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/github.png" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>
    
                                <div class="row no-gutters">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/g-suite.png" alt="G Suite">
                                            <span>G Suite</span>
                                        </a>
                                    </div>
                
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
                                <img src="assets/images/users/avatar-0.jpg" alt="user-image" class="rounded-circle">
                            </span>
                            <span>
                                <span class="account-user-name">Kevin Mitnick</span>
                                <span class="account-position">Administrador de sistema</span>
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
    <!--                         <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lifebuoy mr-1"></i>
                                <span>Support</span>
                            </a>
     -->
                            <!-- item-->
<!--                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline mr-1"></i>
                                <span>Lock Screen</span>
                            </a> -->
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout mr-1"></i>
                                <span>cerrar sesión</span>
                            </a>
    
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
                            <img src="assets/images/users/avatar-0.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name">Kevin Mitnick</span>
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
                                    <a href="dashboard-analytics.html">Análisis</a>
                                </li>
                                <li>
                                    <a href="#">CLientes</a>
                                </li>
                                <li>
                                    <a href="index.html">Productos</a>
                                </li>
                                <li>
                                    <a href="dashboard-projects.html">Personal</a>
                                </li>
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
                                <i class="icon-ventas"></i>
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
                                    <a href="{{url('/ventas')}}">Listar de Ventas</a>
                                </li>
                                <li>
                                    <a href="{{url('/nueva_factura')}}">Nueva Factura</a>
                                </li>
                                <li>
                                  <a href="{{url('/revisar_facturas')}}">Revisar Facturas</a>
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
<!--                                         <li>
                                            <a href="pages-404-alt.html">Error 404-alt</a>
                                        </li>
                                        <li>
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
                            <a href="apps-social-feed.html" class="side-nav-link">
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
                                    <a href="#">Crear</a>
                                </li><!-- 
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
                                </li> -->
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Empresa
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="{{url('/registro_empresa')}}">Registrar</a>                                    
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
                                    <a href="apps-ecommerce-products.html">Lista</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-products-details.html">Detalla de producto</a>
                                </li>
                                <li>
                                    <a href="apps-kanban.html">Reporte</a>
                                </li>
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
                                    2018 - 2020 © Hyper - Coderthemes.com
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-right footer-links d-none d-md-block">
                                        <a href="javascript: void(0);">About</a>
                                        <a href="javascript: void(0);">Support</a>
                                        <a href="javascript: void(0);">Contact Us</a>
                                    </div>
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
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>