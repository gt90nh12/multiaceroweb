
<!--

=========================================================
* Spaces - Bootstrap Directory Listing Template
=========================================================

* Product Page: https://themes.getbootstrap.com/product/spaces/
* Copyright 2020 Themesberg EULA (https://themes.getbootstrap.com/licenses/)

* Coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Multiacero Kapa</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Spaces - Bootstrap Directory Listing Template by Themesberg">
<meta name="author" content="Themesberg">
<meta name="description" content="Premium Directory Listing Bootstrap 4 Template featuring 37 hand-crafted pages, a dashboard an Mapbox integration. Spaces also comes with a complete UI Kit featuring over 700 components by Themesberg.">
<meta name="keywords" content="bootstrap, bootstrap 4 template, directory listing bootstrap, bootstrap 4 listing, bootstrap listing, bootstrap 4 directory listing template, vector map, leaflet js template, mapbox theme, mapbox template, dashboard, themesberg, user dashboard bootstrap, dashboard bootstrap, ui kit, bootstrap ui kit, premium bootstrap theme" />
<link rel="canonical" href="https://themesberg.s3.us-east-2.amazonaws.com/public/products/spaces/thumbnail.jpg">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/pixel-pro">
<meta property="og:title" content="Spaces - Bootstrap Directory Listing Template by Themesberg">
<meta property="og:description" content="Premium Directory Listing Bootstrap 4 Template featuring 37 hand-crafted pages, a dashboard an Mapbox integration. Spaces also comes with a complete UI Kit featuring over 700 components by Themesberg.">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/spaces/thumbnail.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/pixel-pro">
<meta property="twitter:title" content="Spaces - Bootstrap Directory Listing Template by Themesberg">
<meta property="twitter:description" content="Premium Directory Listing Bootstrap 4 Template featuring 37 hand-crafted pages, a dashboard an Mapbox integration. Spaces also comes with a complete UI Kit featuring over 700 components by Themesberg.">
<meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/spaces/thumbnail.jpg">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="./assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="./assets/img/favicon/site.webmanifest">  
<link rel="mask-icon" href="./assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="./vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Leaflet JS -->
<link type="text/css" href="./vendor/leaflet/dist/leaflet.css" rel="stylesheet">

<!-- Fancybox -->
<link rel="stylesheet" href="./vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.css">

<!-- VectorMap -->
<link rel="stylesheet" href="/vendor/jqvmap/dist/jqvmap.min.css">

<!-- Main CSS -->
<link type="text/css" href="{{('assets/css/spaces.css')}}" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>
    <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-theme-primary navbar-expand-lg headroom py-lg-3 px-lg-6 navbar-dark">
        <div class="container">
            <a class="navbar-brand d-none" href="./index.html">
                <img class="navbar-brand-dark common" src="./assets/img/brand/light.svg" height="35" alt="Logo light">
                <img class="navbar-brand-light common" src="./assets/img/brand/logokapafinalizado.svg" height="35" alt="Logo dark">
            </a>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="./index.html">
                                <img src="./assets/img/brand/logokapafinalizado.svg" height="35" alt="Logo Impact">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" role="button" class="fas fa-times" data-toggle="collapse"
                                data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover justify-content-center">
                    <li class="nav-item dropdown">
                        <a href="#" id="dashboardPagesDropdown" class="nav-link dropdown-toggle" aria-expanded="true" data-toggle="dropdown">
                            <span class="nav-link-inner-text mr-1">Nosotros</span>
                            <i class="fas fa-angle-down nav-link-arrow"></i>
                        </a>
                        <div class="dropdown-menu dropdown-megamenu-sm p-3 p-lg-4" aria-labelledby="dashboardPagesDropdown">
                            <div class="list-group list-group-flush">
                                <div class="col-auto px-0">
                                    <h6 class="d-block mb-3 text-primary">Nosotros</h6>
                                    <ul class="list-style-none mb-4">
                                        <li class="mb-2 megamenu-item">
                                            <a class="text-dark d-block"  href="{{url('/equipo')}}">Equipo de Trabajo</a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="text-dark d-block" href="{{url('/conocenos')}}">Conocenos</a>
                                        </li>
                                        <li class="mb-2 megamenu-item">
                                            <a class="text-dark d-block"  href="https://edgar-902a5.web.app/">Iniciar Sesión</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{url('/listarproductos')}}" class="nav-link dropdown" >Productos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown">
                            <span class="nav-link-inner-text mr-1">Cotizacion</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="d-none d-lg-block @@cta_button_classes">
                <a href="{{url('/login_personal')}}" target="_blank" class="btn btn-md btn-secondary animate-up-2"><i class="fas fa-shopping-bag mr-2"></i>Iniciar Sesion</a>
            </div>
            <div class="d-flex d-lg-none align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                    aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
            </div>
        </div>
    </nav>
</header>
    <main>

<div class="preloader bg-dark flex-column justify-content-center align-items-center">
    <div class="position-relative">
        <img src="./assets/img/brand/android-chrome-512x512.png" height="150">
        <img src="./assets/img/brand/android-chrome-512x512.png" height="150" class="rotate-letter">
    </div>
</div>

        <!-- Hero -->
        <section class="section-header pb-9 pb-lg-12 bg-primary text-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="./assets/img/brand/logokapafinalizado.svg" height="150" class="mb-4" alt="Spaces logo">
                        <p class="lead px-md-6 mb-5">Con Profesionales Calficados!</p>
                    </div>
            </div>
            <figure class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2">
                <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                    <path d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
                </svg>
             </figure>
        </section>
        <div class="section pt-0">
            <div class="container mt-n10 mt-lg-n12 z-2">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <img src="./assets/img/presentasion.png" alt="illustration">
                    </div>
                </div>
            </div>
        </div>
        <section class="section section-sm pt-0">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-lg-6">
                    <div class="col-12 text-center">
                        <h2 class="h1 px-lg-5">Linea de Productos</h2>
                        <p class="lead px-lg-10">La Empresa brinda una variedad de productos. Realiza la venta de calaminas, barra de hierros (Angulares) Juegos de baño, Tubos de Acero, Cemento, fierro de construcción, Alambres, artículos de baño, lava platos, artículos de duchas, electrodos, clavos, bisagras, remaches, Gomas y barriles de agua.</p>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-12">
                        <h2 class="mb-4 mb-lg-5">Nuestra Linea de Productos Importados</h2>
                    </div>
                    <div class="col-6 col-lg-3 mb-5">
                        <a href="{{url('/listarproductos')}}" class="page-preview scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/presentation/astra.jpg" alt="Landing page preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">PRODUCTOS ASTRA - ACCESORIOS DE BAÑO, DUCHAS Y COCINA<span class="fas fa-external-link-alt ml-2"></span></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 mb-5">
                        <a href="{{url('/listarproductos')}}" class="page-preview scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/presentation/campero.jpg" alt="Landing 2 page preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">PRODUCTOS CAMPERO - Campero comercializa materiales de construcción, ferretería y cerrajería. Está consolidada en el mercado nacional como una compañía líder, ya que siempre ha ofrecido una gama de productos de muy alta calidad. <span class="fas fa-external-link-alt ml-2"></span></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 mb-5">
                        <a href="{{url('/listarproductos')}}" class="page-preview scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/presentation/logoTankBurg.png" alt="Landing 3 page preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">PRODUCTOS TANK BURG - TANQUES DE AGUA TANK-BURG CISTERNA.
                                    Diseño estructural que ofrece gran resistencia.
                                    Fabricación con materia prima 100% virgen.
                                    Capa externa negra, con protección UV, que
                                    impide el desarrollo de microorganismos.<span class="fas fa-external-link-alt ml-2"></span></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 mb-5">
                        <a href="{{url('/listarproductos')}}" class="page-preview scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/presentation/logasa.png" alt="About page preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">PRODUCTOS LOGASA - Parati de la marca Logasa, es el equilibrio perfecto entre diseño y funcionalidad para tus sanitarios.<span class="fas fa-external-link-alt ml-2"></span></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 mb-5">
                        <a href="{{url('/listarproductos')}}" class="page-preview scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/presentation/Genebre.png" alt="About page preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">PRODUCTOS GENEBRE - Los Accesorios que necesitas para tus instalaciones de Griferia con todo tipo de valvulas de alta calidad.<span class="fas fa-external-link-alt ml-2"></span></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 mb-5">
                        <a href="{{url('/listarproductos')}}" class="page-preview scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/presentation/TRAMONTINA.png" alt="About page preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">PRODUCTOS TRAMONTINA - Tramontina es una marca brasileña que diariamente ingresa a los hogares de millones de personas en todo el mundo ofreciendo productos de diseño y calidad con utensillos de cocina.<span class="fas fa-external-link-alt ml-2"></span></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 mb-5">
                        <a href="{{url('/listarproductos')}}" class="page-preview scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/presentation/corona.png" alt="About page preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">PRODUCTOS DE CORONA - Moderniza tu baño con los productos de calidad que te ofrecemos<span class="fas fa-external-link-alt ml-2"></span></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 mb-5">
                        <a href="{{url('/listarproductos')}}" class="page-preview scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/presentation/aceros_arequipa.jpg" alt="About page preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">PRODUCTOS ACEROS AREQUIPA - Empresa siderúrgica peruana de excelencia, innovación y calidad total con todo tipo de fierro de construccion<span class="fas fa-external-link-alt ml-2"></span></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer py-6 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 mb-3 mb-xl-0">
                <img src="./assets/img/brand/Kapa.png" height="100" class="mb-3" alt="Spaces logo">
                <p>Tu mejor aliado en construccion</p>
            </div>
            <div class="col-6 col-xl-2 mb-5 mb-xl-0">
                <span class="h5">Direccion:</span>
                <ul class="footer-links mt-2">
                    <li><a target="_blank" >Casa Matriz: Av. Santa Vera Cruz Nro 3944, Zona Huayna Potosi</a></li>
                    <li><a target="_blank">Ciudad : La Paz - El Alto</a></li>
                    <li><a target="_blank"></a>Sucursal:Multiacero</li>
                </ul>
            </div>
            <div class="col-6 col-xl-3 mb-5 mb-xl-0">
                <span class="h5">Horarios de Atencion:</span>
                <ul class="footer-links mt-2">
                    <li><a>Visita nuestras tiendas en el siguientre horario:</a></li>
                    <li><a>Lunes a Viernes de 8:00 a 18:00</a></li>
                    <li><a>Sabados de 8:00 a 14:00</a></li>
                </ul>
            </div>
            <div class="col-12 col-xl-4 mb-5 mb-xl-0">
                <span class="h5">Encuentranos en:</span>
                <p class="text-muted font-small mt-2"><button class="btn mb-2 mr-2 btn-icon-only rounded-circle btn-primary" type="button">
                    <span class="btn-inner-icon"><i class="fab fa-facebook-f"></i></span>
                </button></p>
            </div>
        </div>
        <hr class="my-3 my-lg-5">
        <div class="row">
            <div class="col mb-md-0">
            <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo">
                <p class="font-weight-normal font-small mb-0"> © Multiacero
                    <span class="current-year">2020</span>.Todos los derechos Reservados.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- Core -->
<script src="./vendor/jquery/dist/jquery.min.js"></script>
<script src="./vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./vendor/headroom.js/dist/headroom.min.js"></script>
<script src="./vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- NoUISlider -->
<script src="./vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Bootstrap Datepicker -->
<script src="./vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- jQuery Waypoints -->
<script src="./vendor/waypoints/lib/jquery.waypoints.min.js"></script>

<!-- Owl acrousel -->
<script src="./vendor/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Smooth scroll -->
<script src="./vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Fancybox -->
<script src="./vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>

<!-- Sticky sidebar -->
<script src="./vendor/sticky-sidebar/dist/sticky-sidebar.min.js"></script>

<!-- Mapbox & Leaflet.js -->
<script src="./vendor/leaflet/dist/leaflet.js"></script>

<!-- Chartist -->
<script src="./vendor/chartist/dist/chartist.min.js"></script>
<script src="./vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Vector Maps -->
<script src="./vendor/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="./vendor/jqvmap/dist/maps/jquery.vmap.usa.js"></script>

<!-- Sliderform -->
<script src="./assets/js/jquery.slideform.js"></script>

<!-- Spaces custom Javascript -->
<script src="{{('assets/js/spaces.js')}}"></script>
</body>

</html>
