@extends(mb_strtolower('layouts/'.explode(' ',DB::table('empleados')->where('id',Auth::user()->id)->first()->cargo==='Administrador'?'Admin':DB::table('empleados')->where('id',Auth::user()->id)->first()->cargo)[0],'UTF-8'))
@section('titulo_pagina', 'Ventas')
@section('descripcion_pagina', 'Formulario Ventas')

@section('content')
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">DETALLE DE LA VENTA</h4>
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

                                <h4 class="mt-1 mb-1 text-white">#{{$ve->id}}</h4>
                                <p class="font-13 text-white-50">Numero de Venta</p>

                                <ul class="mb-0 list-inline text-light">
                                    <li class="list-inline-item mr-3">
                                        <h5 class="mb-1">Bs. {{$ve->monto_total}}</h5>
                                        <p class="mb-0 font-13 text-white-50">Total Venta</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-1">{{count($pr)}}</h5>
                                        <p class="mb-0 font-13 text-white-50">Cantidad de Productos</p>
                                    </li>
                                </ul>
                            </div> <!-- end media-body-->
                        </div>
                    </div> <!-- end col-->

                    <div class="col-sm-4">
                        <div class="text-center mt-sm-0 mt-3 text-sm-right">
                            <a href="#" class="btn btn-light">
                              <i class="mdi mdi-store mr-1"></i> Editar Venta
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
            <h4 class="header-title mt-0 mb-3">Información de la Venta</h4>
            <hr/>
            <div class="text-left">
              <p class="text-muted"><strong>Fecha de la Venta :</strong><span class="ml-2">{{$tr->fecha_transaccion}}</span></p>
              <p class="text-muted"><strong>Sub Total :</strong><span class="ml-2">Bs. {{$ve->monto_total+$ve->descuento_total}}</span></p>
              <p class="text-muted"><strong>Descuento :</strong><span class="ml-2">Bs. {{$ve->descuento_total}}</span></p>
              <p class="text-muted"><strong>TOTAL:</strong><span class="ml-2" style="color: #f9c851">Bs. {{$ve->monto_total}}</span></p>
            </div>
          </div><hr>
          <div class="card-body">
            <h4 class="header-title mt-0 mb-3">Información del Cliente </h4>
            <hr/>
            <div class="text-left">
              <p class="text-muted"><strong>Razón Social :</strong><span class="ml-2" style="color: #f9c851">{{$cl->nombre_razon_social}}</span></p>
              <p class="text-muted"><strong>Tipo de Documento :</strong><span class="ml-2">{{$cl->tipo_documento}}</span></p>
              <p class="text-muted"><strong>N° de Documento :</strong><span class="ml-2">{{$cl->num_documento}}</span></p>
              <p class="text-muted"><strong>Agregado el :</strong><span class="ml-2">{{$cl->created_at}}</span></p>
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
              <h6 class="text-muted text-uppercase mt-0">N° Productos</h6>
              <h2 class="m-b-20">{{count($pr)}}</h2>
          </div> <!-- end card-body-->
        </div> <!--end card-->
      </div><!-- end col -->
              
      <div class="col-sm-4">
        <div class="card tilebox-one">
          <div class="card-body">
            <i class="dripicons-box float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Descuento</h6>
            <h2 class="m-b-20">Bs <span>{{$ve->descuento_total}}</span></h2>
          </div> <!-- end card-body-->
        </div> <!--end card-->
      </div><!-- end col -->
              
      <div class="col-sm-4">
        <div class="card tilebox-one">
          <div class="card-body">
            <i class="dripicons-jewel float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Total</h6>
            <h2 class="m-b-20">Bs <span>{{$ve->monto_total}}</span></h2>
          </div> <!-- end card-body-->
        </div> <!--end card-->
      </div><!-- end col -->
    </div>
    <!-- end row -->    
    <div class="card">
      <div class="card-body">
        <h4 class="header-title mb-3">Productos Vendidos</h4>
        <div class="table-responsive">
          <table class="table table-hover table-centered mb-0">
            <thead>
              <tr>
                <th>Producto</th>
                <th>Marca</th>
                <th>Precio(Bs)</th>
                <th>Cantidad</th>
                <th>Total(Bs)</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pr as $item)
                <tr>
                  <td>{{$item->pro->nombre}}</td>
                  <td>{{$item->pro->marca_producto}}</td>
                  <td>{{$item->costo}}</td>
                  <td><span class="badge badge-warning">{{$item->cantidad}} Pzs</span></td>
                  <td>{{$item->costo*$item->cantidad}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div> <!-- end table responsive-->
      </div> <!-- end col-->
    </div> <!-- end row-->
  </div>
</div>
<div class="card tilebox-one">
  <div class="card-body">
      <h4 class="header-title mb-3">Frecuencia de ventas al Cliente: {{$cl->nombre_razon_social}}</h4>
      {{-- <div style="height: 260px;" class="chartjs-chart"> --}}
      <div id="datalabels-column" class="apex-charts" data-colors="#10c469"></div>    
  </div>
</div>
<script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/js/pages/demo.apex-column.js')}}"></script>
@stop