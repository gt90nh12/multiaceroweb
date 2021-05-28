@extends('layouts\admin')
@section('titulo_pagina', 'Ventas')
@section('descripcion_pagina', 'Formulario Ventas')

@section('content')
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Multiacero</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Clientes</a></li>
                    <li class="breadcrumb-item active">Ver Cliente</li>
                </ol>
            </div>
            <h4 class="page-title">Ver Cliente</h4>
        </div>
    </div>
  </div>
  <!-- end page title --> 

  <div class="row">
    <div class="col-sm-12">
        <!-- Profile -->
        <div class="card bg-primary">
            <div class="card-body profile-user-box">

                <div class="row">
                    <div class="col-sm-8">
                        <div class="media">
                            <span class="float-left m-2 mr-4"><img src="{{asset('assets/images/users/avatar-0.jpg')}}" style="height: 100px;" alt="" class="rounded-circle img-thumbnail"></span>
                            <div class="media-body">

                                <h4 class="mt-1 mb-1 text-white">{{$verCliente->nombre_razon_social}}</h4>
                                <p class="font-13 text-white-50">Cliente de Multiacero</p>

                                <ul class="mb-0 list-inline text-light">
                                    <li class="list-inline-item mr-3">
                                        <h5 class="mb-1">Bs. 3.010,5</h5>
                                        <p class="mb-0 font-13 text-white-50">Total Ingresos</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-1">3</h5>
                                        <p class="mb-0 font-13 text-white-50">Numero de Compras</p>
                                    </li>
                                </ul>
                            </div> <!-- end media-body-->
                        </div>
                    </div> <!-- end col-->

                    <div class="col-sm-4">
                        <div class="text-center mt-sm-0 mt-3 text-sm-right">
                            <a href="{{route('clientes.edit', $verCliente->id)}}" class="btn btn-light">
                              <i class="mdi mdi-account-edit mr-1"></i> Editar Cliente
                            </a>
                        </div>  
                    </div> <!-- end col-->
                </div> <!-- end row -->

            </div> <!-- end card-body/ profile-user-box-->
        </div><!--end profile/ card -->
    </div> <!-- end col-->
  </div>
  <!-- end row -->

  <div class="row">
    <div class="col-lg-4">
        <!-- Personal-Information -->
        <div class="card">
          <div class="card-body">
            <h4 class="header-title mt-0 mb-3">Información del Cliente </h4>
            <hr/>
            <div class="text-left">
              <p class="text-muted"><strong>Razón Social :</strong> <span class="ml-2">{{$verCliente->nombre_razon_social}}</span></p>
              <p class="text-muted"><strong>Tipo de Documento :</strong><span class="ml-2">{{$verCliente->tipo_documento}}</span></p>
              <p class="text-muted"><strong>N° de Documento :</strong><span class="ml-2">{{$verCliente->num_documento}}</span></p>
              <p class="text-muted"><strong>Creado el :</strong><span class="ml-2">{{$verCliente->created_at}}</span></p>
            </div>
          </div>
        </div>
        <!-- Personal-Information -->
    </div> <!-- end col-->

    <div class="col-lg-8">
      

      
      <div class="row">
        <div class="col-sm-4">
          <div class="card tilebox-one">
                    <div class="card-body">
                      <i class="dripicons-basket float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">N° Compras</h6>
                        <h2 class="m-b-20">3</h2>
                        <span class="badge badge-primary"> +11% </span> <span class="text-muted">Del periodo anterior</span>
                    </div> <!-- end card-body-->
                  </div> <!--end card-->
                </div><!-- end col -->
                
                <div class="col-sm-4">
                  <div class="card tilebox-one">
                    <div class="card-body">
                      <i class="dripicons-box float-right text-muted"></i>
                      <h6 class="text-muted text-uppercase mt-0">Total Ingresos</h6>
                      <h2 class="m-b-20">Bs <span>3.010,5</span></h2>
                      <span class="badge badge-danger"> -29% </span> <span class="text-muted">Del periodo anterior</span>
                    </div> <!-- end card-body-->
                  </div> <!--end card-->
                </div><!-- end col -->
                
                <div class="col-sm-4">
                  <div class="card tilebox-one">
                    <div class="card-body">
                      <i class="dripicons-jewel float-right text-muted"></i>
                      <h6 class="text-muted text-uppercase mt-0">Product Favorito</h6>
                      <h2 class="m-b-20">Cemento</h2>
                      <h4 class="m-b-20">Viacha</h4>
                      <span class="badge badge-primary"> +89% </span> <span class="text-muted">de sus compras</span>
                    </div> <!-- end card-body-->
                  </div> <!--end card-->
                </div><!-- end col -->
                
              </div>
              <!-- end row -->
              
              
              <div class="card">
                <div class="card-body">
                <h4 class="header-title mb-3">Products Comprados</h4>

                <div class="table-responsive">
                    <table class="table table-hover table-centered mb-0">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Marca</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Total(Bs)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cemento</td>
                                <td>Viacha</td>
                                <td>Bs. 80</td>
                                <td><span class="badge badge-warning">10 Pcs</span></td>
                                <td>Bs. 800</td>
                            </tr>
                            <tr>
                                <td>Martillo</td>
                                <td>Stanley</td>
                                <td>Bs. 410.5</td>
                                <td><span class="badge badge-warning">1 Pcs</span></td>
                                <td>Bs. 410.5</td>
                            </tr>
                            <tr>
                                <td>Taladro</td>
                                <td>Stanley</td>
                                <td>Bs. 900</td>
                                <td><span class="badge badge-warning">2 Pcs</span></td>
                                <td>Bs. 1800</td>
                            </tr>


                        </tbody>
                    </table>
                </div> <!-- end table responsive-->
            </div> <!-- end col-->
        </div> <!-- end row-->
        
    </div>
    <!-- end col -->
</div>

<!-- end row -->
      <!-- Chart-->
      <div class="card tilebox-one">
        <div class="card-body">
            <h4 class="header-title mb-3">Frecuencia de ventas al Cliente</h4>
            {{-- <div style="height: 260px;" class="chartjs-chart"> --}}
            <div id="datalabels-column" class="apex-charts" data-colors="#10c469"></div>
                {{-- <canvas id="high-performing-product"></canvas> --}}  
            </div>        
        </div>
    </div>
    <!-- End Chart-->

    <!-- third party:js -->
    <script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>
    <!-- third party end -->

    <!-- demo:js -->
    <script src="{{asset('assets/js/pages/demo.apex-column.js')}}"></script>
    <!-- demo end -->

@stop