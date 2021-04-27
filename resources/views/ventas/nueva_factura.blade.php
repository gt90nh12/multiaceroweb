@extends('layouts\admin')
@section('titulo_pagina', 'Ventas')
@section('descripcion_pagina', 'Formulario Ventas')


@section('content')
{{-- {{$cliente}} --}}
{{-- {{$producto}} --}}
        <!-- third party css -->
        {{-- <link href="{{asset('assets/css/vendor/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" /> --}}
        <link href="{{asset('assets/css/vendor/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/vendor/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/vendor/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <div class="page-title-right">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">Multiacero</a></li>
          <li class="breadcrumb-item"><a href="javascript: void(0);">Ventas</a></li>
          <li class="breadcrumb-item active">Nueva Facura</li>
        </ol>
      </div>
      <h4 class="page-title">Nueva Factura</h4>

	
      
      <style>
        .checkBtn label{
          display: flex;
          max-width: 30px;
          min-width: 30px;
          height: 30px; 
          justify-content: center;
          align-items: center;
          cursor: pointer;
          background-color: #f8f8f8;
          color: #82838c;
          margin: 0.5%;
          border-radius: 2px;
          font-size: 2em;
        }
        .checkBtn label:hover {
              background: #dbdcde;
        }
        .checkBtn input[type=checkbox]:checked + label{
          background-color: #b83217;
              color: #fff !important;

        } 
        .checkBtn input[type=checkbox]:checked + label +i{
          background-color: #17a2b8;
              color: #fff !important;
        }
        .checkBtn input[type=checkbox] {
            visibility: hidden;
        }
      </style>



    </div>
  </div>
</div>
<!-- end page title -->

<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">
              <!-- Checkout Steps -->
              <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                  <li class="nav-item">
                      <a href="#products-information" data-toggle="tab" aria-expanded="false"
                          class="nav-link rounded-0 active">
                          <i class="mdi  mdi-truck-fast font-18"></i>
                          <span class="d-none d-lg-block">Add Producto</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#customer-information" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                          <i class="mdi mdi-account-circle font-18"></i>
                          <span class="d-none d-lg-block">Cliente</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#billing-information" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                          <i class="mdi mdi-cash-multiple font-18"></i>
                          <span class="d-none d-lg-block">Factura Info</span>
                      </a>
                  </li>
              </ul>

              <!-- Steps Information -->
              <div class="tab-content">

                <!-- Products Content-->
                <div class="tab-pane show active" id="products-information">

                <p>
                  <button class="btn btn-primary ml-1" type="button"
                    data-toggle="collapse" data-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    Productos en Stock
                  </button>
                </p>
                <div class="collapse show" id="collapseExample">
                  
                    <div class="row">
                      <div class="col-12">
                          <div class="card">
                            <div class="card-body">
                              <div class="tab-content">
                                <div class="tab-pane show active">
                                  <table id="basic-datatable" class="table activate-select dt-responsive nowrap">
                                    
                                    <thead>
                                      <tr>
                                        <th style="width: 1px">Codigo</th>
                                        <th>Nombre</th>
                                        <th>Marca</th>
                                        <th>Procedencia</th>
                                        <th>Color</th>
                                        <th>Costo</th>
                                        <th>Descripcion</th>
                                        <th>Add</th>
                                      </tr>
                                    </thead>

                                    <tbody>
                                      @foreach($producto as $producto)
                                        <tr>
                                          <td style="width: 1px">{{$producto->id}}</td>
                                          <td>{{$producto->nombre}}</td>
                                          <td>{{$producto->marca_producto}}</td>
                                          <td>{{$producto->lugar_origen_producto}}</td>
                                          <td>{{$producto->color_producto}}</td>
                                          <td>{{$producto->precio_venta}}</td>
                                          <td>{{$producto->descripcion}}</td>
                                          <td>
                                            <div class="checkBtn">
                                              <input id="checkCarrito" type="checkbox">
                                              <label for="checkCarrito"><i class="uil-home-alt"></i></label>
                                              </div>
                                          </td>
                                        </tr>
                                      @endforeach
                                    </tbody>

                                  </table>                                          
                                </div> <!-- end preview-->
                              </div> <!-- end tab-content-->
                            </div> <!-- end card body-->
                          </div> <!-- end card -->
                      </div><!-- end col-->
                  </div>
                <!-- end row-->
          </div>
                   

                  </div>
                  <!-- End Billing Information Content-->

                  <!-- Customer Content-->
                  <div class="tab-pane" id="customer-information">

                    Customer = cliente

                  </div>
                  <!-- End Shipping Information Content-->

                  <!-- Billing Content-->
                  <div class="tab-pane" id="billing-information">

                    billing = facturación
                    
                  </div>
                  <!-- End Payment Information Content-->

              </div> <!-- end tab content-->

          </div> <!-- end card-body-->
      </div> <!-- end card-->
  </div> <!-- end col -->
</div>
<!-- end row-->


        <!-- third party js -->
        <script src="{{asset('assets/js/vendor/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('assets/js/vendor/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/buttons.html5.min.js')}}"></script>
        {{-- <script src="assets/js/vendor/buttons.flash.min.js"></script> --}}
        {{-- <script src="assets/js/vendor/buttons.print.min.js"></script> --}}
        {{-- <script src="assets/js/vendor/dataTables.keyTable.min.js"></script> --}}
        {{-- <script src="assets/js/vendor/dataTables.select.min.js"></script> --}}
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{asset('assets/js/pages/demo.datatable-init.js')}}"></script>
        <!-- end demo js-->


@stop