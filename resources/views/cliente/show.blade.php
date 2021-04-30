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

                                <h4 class="mt-1 mb-1 text-white">{{$verCliente->nombre}} {{$verCliente->apellidos}}</h4>
                                <p class="font-13 text-white-50">Cliente regular</p>

                                <ul class="mb-0 list-inline text-light">
                                    <li class="list-inline-item mr-3">
                                        <h5 class="mb-1">Bs. 25,184</h5>
                                        <p class="mb-0 font-13 text-white-50">Total Ingresos</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-1">5482</h5>
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
              <p class="text-muted"><strong>Nombre :</strong> <span class="ml-2">{{$verCliente->nombre}}</span></p>
              <p class="text-muted"><strong>Apellidos :</strong><span class="ml-2">{{$verCliente->apellidos}}</span></p>
              <p class="text-muted"><strong>Tipo de Documento :</strong><span class="ml-2">{{$verCliente->tipo_documento}}</span></p>
              <p class="text-muted"><strong>N° de Documento :</strong><span class="ml-2">{{$verCliente->num_documento}}</span></p>
              <p class="text-muted"><strong>N° Movil :</strong><span class="ml-2">{{$verCliente->numero_movil}}</span></p>
              <p class="text-muted"><strong>N° Fijo :</strong><span class="ml-2">{{$verCliente->numero_fijo}}</span></p>
              <p class="text-muted"><strong>Email :</strong><span class="ml-2">{{$verCliente->email}}</span></p>
              <p class="text-muted"><strong>Fecha de Nacimiento :</strong><span class="ml-2">{{$verCliente->fecha_nacimiento}}</span></p>
              <p class="text-muted"><strong>Genero :</strong><span class="ml-2">{{$verCliente->sexo}}</span></p>
            </div>
          </div>
        </div>
        <!-- Personal-Information -->
    </div> <!-- end col-->

    <div class="col-lg-8">
      
      {{-- <!-- Chart-->
      <div class="card">
          <div class="card-body">
              <h4 class="header-title mb-3">Orders & Revenue</h4>
              <div style="height: 260px;" class="chartjs-chart">
                  <canvas id="high-performing-product"></canvas>
              </div>        
          </div>
      </div>
      <!-- End Chart--> --}}
      
      <div class="row">
        <div class="col-sm-4">
          <div class="card tilebox-one">
                    <div class="card-body">
                      <i class="dripicons-basket float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">N° Compras</h6>
                        <h2 class="m-b-20">5482</h2>
                        <span class="badge badge-primary"> +11% </span> <span class="text-muted">Del periodo anterior</span>
                    </div> <!-- end card-body-->
                  </div> <!--end card-->
                </div><!-- end col -->
                
                <div class="col-sm-4">
                  <div class="card tilebox-one">
                    <div class="card-body">
                      <i class="dripicons-box float-right text-muted"></i>
                      <h6 class="text-muted text-uppercase mt-0">Total Ingresos</h6>
                      <h2 class="m-b-20">Bs <span>25,184</span></h2>
                      <span class="badge badge-danger"> -29% </span> <span class="text-muted">Del periodo anterior</span>
                    </div> <!-- end card-body-->
                  </div> <!--end card-->
                </div><!-- end col -->
                
                <div class="col-sm-4">
                  <div class="card tilebox-one">
                    <div class="card-body">
                      <i class="dripicons-jewel float-right text-muted"></i>
                      <h6 class="text-muted text-uppercase mt-0">Product Favorito</h6>
                      <h2 class="m-b-20">Cemento Viacha</h2>
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
                                <th>Product</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ASOS Ridley High Waist</td>
                                <td>$79.49</td>
                                <td><span class="badge badge-primary">82 Pcs</span></td>
                                <td>$6,518.18</td>
                            </tr>
                            <tr>
                                <td>Marco Lightweight Shirt</td>
                                <td>$128.50</td>
                                <td><span class="badge badge-primary">37 Pcs</span></td>
                                <td>$4,754.50</td>
                            </tr>
                            <tr>
                                <td>Half Sleeve Shirt</td>
                                <td>$39.99</td>
                                <td><span class="badge badge-primary">64 Pcs</span></td>
                                <td>$2,559.36</td>
                            </tr>
                            <tr>
                                <td>Lightweight Jacket</td>
                                <td>$20.00</td>
                                <td><span class="badge badge-primary">184 Pcs</span></td>
                                <td>$3,680.00</td>
                            </tr>
                            <tr>
                                <td>Marco Shoes</td>
                                <td>$28.49</td>
                                <td><span class="badge badge-primary">69 Pcs</span></td>
                                <td>$1,965.81</td>
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






@stop