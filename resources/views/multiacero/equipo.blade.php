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
<meta name="title" content="Spaces - Our Team">
<meta name="author" content="Themesberg">
<meta name="description" content="Premium Directory Listing Bootstrap 4 Template featuring 37 hand-crafted pages, a dashboard an Mapbox integration. Spaces also comes with a complete UI Kit featuring over 700 components by Themesberg.">
<meta name="keywords" content="bootstrap, bootstrap 4 template, directory listing bootstrap, bootstrap 4 listing, bootstrap listing, bootstrap 4 directory listing template, vector map, leaflet js template, mapbox theme, mapbox template, dashboard, themesberg, user dashboard bootstrap, dashboard bootstrap, ui kit, bootstrap ui kit, premium bootstrap theme" />
<link rel="canonical" href="https://themesberg.s3.us-east-2.amazonaws.com/public/products/spaces/thumbnail.jpg">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/pixel-pro">
<meta property="og:title" content="Spaces - Our Team">
<meta property="og:description" content="Premium Directory Listing Bootstrap 4 Template featuring 37 hand-crafted pages, a dashboard an Mapbox integration. Spaces also comes with a complete UI Kit featuring over 700 components by Themesberg.">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/spaces/thumbnail.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/pixel-pro">
<meta property="twitter:title" content="Spaces - Our Team">
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
<link rel="stylesheet" href="./vendor/jqvmap/dist/jqvmap.min.css">

<!-- Main CSS -->
<link type="text/css" href="{{('assets/css/spaces.css')}}" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>
    <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-theme-primary navbar-expand-lg headroom py-lg-3 px-lg-6 navbar-dark navbar-transparent navbar-theme-primary">
        <div class="container">
            <a class="navbar-brand @@logo_classes" href="{{url('/')}}">
                <img class="navbar-brand-dark common" src="./assets/img/brand/logokapafinalizado.svg" height="35" alt="Logo light">
                <img class="navbar-brand-light common" src="./assets/img/brand/logokapafinalizado.svg" height="35" alt="Logo dark">
            </a>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="../index.html">
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
            </div>
            <div class="d-none d-lg-block @@cta_button_classes">
                <a href="{{url('/login_personal')}}" target="_blank" class="btn btn-md btn-outline-white animate-up-2 mr-3"><i class="fas fa-book mr-1"></i> <span class="d-none d-xl-inline">Iniciar Sesion</span></a>
            </div>
        </div>
    </nav>
</header>
    <main>

        <div class="preloader bg-dark flex-column justify-content-center align-items-center">
    <div class="position-relative">
        <img src="./assets/img/brand/android-chrome-512x512.png" alt="Logo loader">
    </div>
</div>

        <!-- Hero -->
        <section class="section-header bg-primary pb-9 pb-md-11 mb-4 mb-lg-6 text-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 text-center">
                        <h1 class="display-2 mb-3">Nuestro Equipo</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg pt-0">
            <div class="container mt-n8 mt-lg-n10 z-2">
                <div class="row mt-7">
                @foreach($personal as $item)
                    <div class="col-12 col-md-6 col-lg-4 mb-7">
                        <div class="card border-light text-center">
                            <div class="profile-thumbnail mx-auto mt-n6">
                                <img src="http://localhost/multiacero/storage/personal/{{ $item->foto }}" class="card-img-top rounded-circle border-0" alt="Jose Avatar">
                            </div>
                            <div class="card-body">
                                <h2 class="h4 card-title mb-2">{{$item->nombre_personal}} {{$item->apellido_paterno}} {{$item->apellido_materno}}</h2>
                                <span class="card-subtitle text-gray font-weight-normal">{{$item->cargo}}</span>
                                <p class="card-text my-2">{{$item->telefono_movil}} - {{$item->telefono_fijo}}</p>
                                <p class="card-text my-2">{{$item->nombre_almacen}}</p>
                                <p class="card-text my-2">{{$item->direccion}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="section section-lg pt-0">
            <div class="container">
                <div class="row mt-4 mt-lg-6">
                    <div class="clients-carousel owl-carousel owl-theme">
                        <div class="item"><img class="img-fluid image-sm" src="./assets/img/clients/aceros_arequipa.jpg" alt="elastic logo"></div>
                        <div class="item"><img class="img-fluid image-sm" src="./assets/img/clients/astra.jpg" alt="elastic logo"></div>
                        <div class="item"><img class="img-fluid image-sm" src="./assets/img/clients/campero.jpg" alt="elastic logo"></div>
                        <div class="item"><img class="img-fluid image-sm" src="./assets/img/clients/corona.png" alt="elastic logo"></div>
                        <div class="item"><img class="img-fluid image-sm" src="./assets/img/clients/Genebre.png" alt="docker logo"></div>
                        <div class="item"><img class="img-fluid image-sm" src="./assets/img/clients/logasa.png" alt="themesberg logo"></div>
                        <div class="item"><img class="img-fluid image-sm" src="./assets/img/clients/logoTankBurg.png" alt="Forbes Logo"></div>
                        <div class="item"><img class="img-fluid image-sm" src="./assets/img/clients/TRAMONTINA.png" alt="elastic logo"></div>
                    </div>
                </div>
            </div>
        </div>
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
<script src="../vendor/waypoints/lib/jquery.waypoints.min.js"></script>

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