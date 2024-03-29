<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ ('assets/images/cabecera.png ') }}">
    <title>Aprendizaje</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ ('assets/plugins/bootstrap/css/bootstrap.min.css ') }}" rel="stylesheet">
    @section('archivos_style_form')
    @show
    <!-- image CSS -->
    <link rel="stylesheet" href="{{ ('assets/plugins/dropify/dist/css/dropify.min.css') }}">
    <!-- checked - radio CSS -->
    <link href="{{ ('assets/plugins/icheck/skins/all.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ ('assets/css/style.css ') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ ('assets/css/colors/blue.css ') }}" id="theme" rel="stylesheet">
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ ('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js ') }}"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js ') }}"></script>
<![endif]-->
    <!---- Estilos_personalizados ---->
    <link href="{{ ('css/estilos_personalizados.css ') }}" id="theme" rel="stylesheet">
<style type="text/css">
.espacio{
    margin-right: 10px;
    margin-left: 10px;
}
.center{
    width:100%;
    text-align: center;
    
}
#videoconcentracion{
            height: 500px;
            overflow: auto;
            background: white;
        }
    
</style>
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ ('assets/images/logo-icon.png ') }}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{ ('assets/images/logo-light-icon.png ') }}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <img src="{{ ('assets/images/logo-text.png ') }}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="{{ ('assets/images/logo-light-text.png ') }}" class="light-logo"
                                alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a
                                class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        {{-- <li class="nav-item"> <a
                                class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li> --}}
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new
                                                        admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that
                                                        you have event</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this
                                                        template as you want</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my
                                                        admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all
                                                notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="{{ ('assets/images/users/1.jpg ') }}"
                        alt="user" class="img-circle"> <span class="profile-status online float-right"></span>
                </div>
                <div class="mail-contnet">
                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my
                        admin!</span> <span class="time">9:30 AM</span>
                </div>
                </a>
                <!-- Message -->
                <a href="#">
                    <div class="user-img"> <img src="{{ ('assets/images/users/2.jpg ') }}" alt="user"
                            class="img-circle"> <span class="profile-status busy float-right"></span> </div>
                    <div class="mail-contnet">
                        <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See
                            you at</span> <span class="time">9:10 AM</span>
                    </div>
                </a>
                <!-- Message -->
                <a href="#">
                    <div class="user-img"> <img src="{{ ('assets/images/users/3.jpg ') }}" alt="user"
                            class="img-circle"> <span class="profile-status away float-right"></span> </div>
                    <div class="mail-contnet">
                        <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span>
                        <span class="time">9:08 AM</span>
                    </div>
                </a>
                <!-- Message -->
                <a href="#">
                    <div class="user-img"> <img src="{{ ('assets/images/users/4.jpg ') }}" alt="user"
                            class="img-circle"> <span class="profile-status offline float-right"></span> </div>
                    <div class="mail-contnet">
                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my
                            admin!</span> <span class="time">9:02 AM</span>
                    </div>
                </a>
    </div>
    </li>
    <li>
        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all
                e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
    </li>
    </ul>
    </div>
    </li> --}}
    <!-- ============================================================== -->
    <!-- End Messages -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Messages -->
    <!-- ============================================================== -->
    <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark"
            href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                class="mdi mdi-view-grid"></i></a>
        <div class="dropdown-menu animated bounceInDown">
            <ul class="mega-dropdown-menu row">
                <li class="col-lg-3 col-xlg-2 mb-4">
                    <h4 class="mb-3">CAROUSEL</h4>
                    <!-- CAROUSEL -->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="container"> <img class="d-block img-fluid"
                                        src="{{ ('assets/images/big/img1.jpg ') }}" alt="First slide"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="container"><img class="d-block img-fluid"
                                        src="{{ ('assets/images/big/img2.jpg ') }}" alt="Second slide"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="container"><img class="d-block img-fluid"
                                        src="{{ ('assets/images/big/img3.jpg ') }}" alt="Third slide"></div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span
                                class="sr-only">Previous</span> </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span
                                class="sr-only">Next</span> </a>
                    </div>
                    <!-- End CAROUSEL -->
                </li>
                <li class="col-lg-3 mb-4">
                    <h4 class="mb-3">ACCORDION</h4>
                    <!-- Accordian -->
                    <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                    eiusmod high. </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                    eiusmod high life accusamus terry richardson ad squid. </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                    eiusmod high life accusamus terry richardson ad squid. </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3  mb-4">
                    <h4 class="mb-3">CONTACT US</h4>
                    <!-- Contact -->
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea" rows="3"
                                placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </li>
                <li class="col-lg-3 col-xlg-4 mb-4">
                    <h4 class="mb-3">List style</h4>
                    <!-- List style -->
                    <ul class="list-style-none">
                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                You can give link</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                Give link</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                Another Give link</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                Forth link</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                Another fifth link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </li>
    <!-- ============================================================== -->
    <!-- End Messages -->
    <!-- ============================================================== -->
    </ul>
    <!-- ============================================================== -->
    <!-- User profile and search -->
    <!-- ============================================================== -->
    <ul class="navbar-nav my-lg-0">
        <li class="nav-item hidden-sm-down">
            <form class="app-search">
                <input type="text" class="form-control" placeholder="Buscar"> <a class="srh-btn"><i
                        class="ti-search"></i></a> </form>
        </li>

        <li class="nav-item dropdown">
            <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm float-right ml-2"><i
                    class="ti-settings text-white"></i></button>
        </li>
    </ul>
    </div>
    </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- User profile -->
            <div class="user-profile">
                <!-- User profile image -->
                <div class="profile-img"> <img
                        src="http://localhost/aprendizaje/public/img/perfil_usuario/{{ auth()->user()->direccion_imagen }}"
                        alt="user" /></div>
                <!-- User profile text-->
                <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="true">
                        {{ auth()->user()->name }}
                        <span class="caret"></span></a>
                    <div class="dropdown-menu animated flipInY">
                        <a href="#" class="dropdown-item"><i class="ti-user"></i> Mi perfil</a>
                        <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i
                                class="ti-settings"></i> Configuración</a>
                        <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i
                                class="fa fa-power-off"></i> Cerrar sesión</a>
                    </div>
                </div>
            </div>
            <!-- End User profile text-->
            <!-- Sidebar navigation-->
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">UNIDAD EDUCATIVA</li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-city"></i><span
                                class="hide-menu">Colegio<span
                                    class="label label-rounded label-success">5</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="index.html">Plantel Docente</a></li>
                            <li><a href="index2.html">Padres de Familia</a></li>
                            <li><a href="index3.html">Estudiantes</a></li>
                        </ul>
                    </li>
                    <!-- <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Apps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-calendar.html">Calendar</a></li>
                                <li><a href="app-chat.html">Chat app</a></li>
                                <li><a href="app-ticket.html">Support Ticket</a></li>
                                <li><a href="app-contact.html">Contact / Employee</a></li>
                                <li><a href="app-contact2.html">Contact Grid</a></li>
                                <li><a href="app-contact-detail.html">Contact Detail</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Inbox</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-email.html">Mailbox</a></li>
                                <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                                <li><a href="app-compose.html">Compose Mail</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Ui Elements</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-user-card.html">User Cards</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-tab.html">Tab</a></li>
                                <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                                <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
                                <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
                                <li><a href="ui-notification.html">Notification</a></li>
                                <li><a href="ui-progressbar.html">Progressbar</a></li>
                                <li><a href="ui-nestable.html">Nestable</a></li>
                                <li><a href="ui-range-slider.html">Range slider</a></li>
                                <li><a href="ui-timeline.html">Timeline</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                                <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                                <li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
                                <li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>
                                <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                                <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                                <li><a href="ui-list-media.html">List Media</a></li>
                                <li><a href="ui-ribbons.html">Ribbons</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-date-paginator.html">Date-paginator</a></li>
                                <li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>
                                <li><a href="ui-spinner.html">Spinner</a></li>
                                <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                                <li><a href="ui-toasts.html">Toasts</a></li>
                            </ul>
                        </li> -->
                    <li class="nav-devider"></li>
                    <li class="nav-small-cap">TEST DE APRENDIZAJE</li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="ti-book"></i><span
                                class="hide-menu">Test general</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{url('/crear_prueba')}}">Crear</a></li>
                            <li><a href="{{url('/listar_prueba')}}">Listar</a></li>
                            <!-- <li><a href="index3.html">Estudiantes</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-small-cap">TECNICAS DE APRENDIZAJE</li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-link-variant"></i><span
                                class="hide-menu">Técnica de la
                                memoria</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="#" class="has-arrow">Cadena </a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="{{url('/listar_tec_cadena')}}">Listar</a></li>
                                    <li><a href="{{url('crear_tec_cadena')}}">Almacenar</a></li>
                                </ul>
                            </li>
                            <li><a href="form-layout.html">Categorizacion</a></li>
                            <li><a href="form-addons.html">Visualizacion</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-grid"></i><span
                                class="hide-menu">Tec. de concentración</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="#" class="has-arrow">Videos de concentración</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="{{url('/listar_tec_concentracion')}}">Listar</a></li>
                                    <li><a href="{{url('/crear_tec_concentracion')}}">Almacenar</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-animation"></i><span
                                class="hide-menu">Técnica de calculo</span></a>
                                <ul aria-expanded="false" class="collapse">
                                <li><a href="#" class="has-arrow">Tabla</a>
                                <ul aria-expanded="false" class="collapse">
                                    <!-- <li><a href="{{url('/listar_tec_cadena')}}">Listar</a></li> -->
                                    <li><a href="{{url('crear_tec_calculo')}}">Almacenar</a></li>
                                    <li><a href="{{url('listar_tec_calculo')}}">Listar</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="form-layout.html">Categorizacion</a></li>
                            <li><a href="form-addons.html">Visualizacion</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-devider"></li>
                    <li class="nav-small-cap">MANTENIMIENTO</li>
                    <li>
                        <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-account"></i><span
                                class="hide-menu">Usuario</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{url('/listar_usuario')}}">Listar</a></li>
                            <li><a href="{{url('/registro_usuario_admin')}}">Crear</a></li>
                            <li><a href="#">Reporte</a></li>
                            <li><a href="{{url('/roles_usuario')}}">Roles</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-link-variant"></i><span
                                class="hide-menu">Parametricas colegio</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="#" class="has-arrow">Colegio </a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="{{url('/listar_escuela')}}">Listar</a></li>
                                    <li><a href="{{url('/crear_escuela')}}">Almacenar</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="has-arrow">Docente </a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="{{url('/listar_docente')}}">Listar</a></li>
                                    <li><a href="{{url('/crear_docente')}}">Almacenar</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="has-arrow">Persona </a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="{{url('/listar_persona')}}">Listar</a></li>
                                    <li><a href="{{url('/almacenar_persona')}}">Almacenar</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="has-arrow">Alumno </a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="{{url('/listar_alumno')}}">Listar</a></li>
                                    <li><a href="{{url('/crear_alumno')}}">Almacenar</a></li>
                                </ul>
                            </li>
                           
                        </ul>
                    </li>
                    <!-- <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Sample Pages</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="starter-kit.html">Starter Kit</a></li>
                                <li><a href="pages-blank.html">Blank page</a></li>
                                <li><a href="#" class="has-arrow">Authentication <span class="label label-rounded label-success">6</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="pages-login.html">Login 1</a></li>
                                        <li><a href="pages-login-2.html">Login 2</a></li>
                                        <li><a href="pages-register.html">Register</a></li>
                                        <li><a href="pages-register2.html">Register 2</a></li>
                                        <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                        <li><a href="pages-recover-password.html">Recover password</a></li>
                                    </ul>
                                </li>
                                <li><a href="pages-profile.html">Profile page</a></li>
                                <li><a href="pages-animation.html">Animation</a></li>
                                <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                                <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-treeview.html">Treeview</a></li>
                                <li><a href="pages-utility-classes.html">Helper Classes</a></li>
                                <li><a href="pages-search-result.html">Search result</a></li>
                                <li><a href="pages-scroll.html">Scrollbar</a></li>
                                <li><a href="pages-pricing.html">Pricing</a></li>
                                <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
                                <li><a href="pages-gallery.html">Gallery</a></li>
                                <li><a href="pages-faq.html">Faqs</a></li>
                                <li><a href="#" class="has-arrow">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="pages-error-400.html">400</a></li>
                                        <li><a href="pages-error-403.html">403</a></li>
                                        <li><a href="pages-error-404.html">404</a></li>
                                        <li><a href="pages-error-500.html">500</a></li>
                                        <li><a href="pages-error-503.html">503</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Charts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="chart-morris.html">Morris Chart</a></li>
                                <li><a href="chart-chartist.html">Chartis Chart</a></li>
                                <li><a href="chart-echart.html">Echarts</a></li>
                                <li><a href="chart-flot.html">Flot Chart</a></li>
                                <li><a href="chart-knob.html">Knob Chart</a></li>
                                <li><a href="chart-chart-js.html">Chartjs</a></li>
                                <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                <li><a href="chart-extra-chart.html">Extra chart</a></li>
                                <li><a href="chart-peity.html">Peity Charts</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-brush"></i><span class="hide-menu">Icons</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="icon-material.html">Material Icons</a></li>
                                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                <li><a href="icon-themify.html">Themify Icons</a></li>
                                <li><a href="icon-linea.html">Linea Icons</a></li>
                                <li><a href="icon-weather.html">Weather Icons</a></li>
                                <li><a href="icon-simple-lineicon.html">Simple Lineicons</a></li>
                                <li><a href="icon-flag.html">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="map-google.html">Google Maps</a></li>
                                <li><a href="map-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">item 1.1</a></li>
                                <li><a href="#">item 1.2</a></li>
                                <li>
                                    <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">item 1.3.1</a></li>
                                        <li><a href="#">item 1.3.2</a></li>
                                        <li><a href="#">item 1.3.3</a></li>
                                        <li><a href="#">item 1.3.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">item 1.4</a></li>
                            </ul>
                        </li> -->
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <div class="sidebar-footer">
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Configuración"><i class="ti-settings"></i></a>
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Correo"><i class="mdi mdi-gmail"></i></a>
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Cerrar la sesión"><i class="mdi mdi-power"></i></a>
        </div>
        <!-- End Bottom points-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="text-themecolor mb-0 mt-0">@yield('titulo_pagina')</h3>
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li> --}}
                        <li class="breadcrumb-item active">@yield('descripcion_pagina')</li>
                    </ol>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            @section('content')
            @show
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                    </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="mt-3">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                            <li class="d-block mt-4"><b>With Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a>
                            </li>
                            <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a>
                            </li>
                            <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a>
                            </li>
                        </ul>
                        <ul class="mt-3 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{ ('assets/images/users/1.jpg ') }}"
                                        alt="user-img" class="img-circle"> <span>Varun Dhavan <small
                                            class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{ ('assets/images/users/2.jpg ') }}"
                                        alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small
                                            class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{ ('assets/images/users/3.jpg ') }}"
                                        alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small
                                            class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{ ('assets/images/users/4.jpg ') }}"
                                        alt="user-img" class="img-circle"> <span>Arijit Sinh <small
                                            class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{ ('assets/images/users/5.jpg ') }}"
                                        alt="user-img" class="img-circle"> <span>Govinda Star <small
                                            class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{ ('assets/images/users/6.jpg ') }}"
                                        alt="user-img" class="img-circle"> <span>John Abraham<small
                                            class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{ ('assets/images/users/7.jpg ') }}"
                                        alt="user-img" class="img-circle"> <span>Hritik Roshan<small
                                            class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{ ('assets/images/users/8.jpg ') }}"
                                        alt="user-img" class="img-circle"> <span>Pwandeep rajan <small
                                            class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer"> © 2020 Sistema de Aprendizaje </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ ('assets/plugins/jquery/jquery.min.js ') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ ('assets/plugins/bootstrap/js/popper.min.js ') }}"></script>
    <script src="{{ ('assets/plugins/bootstrap/js/bootstrap.min.js ') }}"></script>
    <link rel="stylesheet" type="text/css"
        href="{{ ('assets/plugins/datatables/media/css/dataTables.bootstrap4.css') }}">
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ ('js/jquery.slimscroll.js ') }}"></script>
    <!--Wave Effects -->
    <script src="{{ ('js/waves.js ') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ ('js/sidebarmenu.js ') }}"></script>
    <!--stickey kit -->
    <script src="{{ ('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js ') }}"></script>
    <!--************** Custom JavaScript  validacion de formulario de registro **************-->
    <script src="{{ ('js/custom.min.js ') }}"></script>
    <!-- checked - radio -->
    <script src="{{ ('assets/plugins/icheck/icheck.min.js') }}"></script>
    <script src="{{ ('assets/plugins/icheck/icheck.init.js') }}"></script>
    {{-- <script src="{{ ('js/validation.js ') }}"></script>
    <script>
        ! function (window, document, $) {
            "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation()
        }(window, document, jQuery);

    </script> --}}
    <!--*************************************************************************************-->
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ ('assets/plugins/styleswitcher/jQuery.style.switcher.js ') }}"></script>

    @section('archivos_script_form')
    @show
</body>

</html>
