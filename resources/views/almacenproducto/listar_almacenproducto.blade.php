@extends('layouts\admin')

@section('content')
<link href="{{asset('assets/css/vendor/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/vendor/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/vendor/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/vendor/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<!-- third party css end -->

<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <!-- <div class="page-title-right">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">Multiacero</a></li>
          <li class="breadcrumb-item"><a href="javascript: void(0);">Ventas</a></li>
          <li class="breadcrumb-item active">Todas las Ventas</li>
        </ol>
      </div> -->
      <h4 class="page-title">Lista productos en almacén</h4>
    </div>
  </div>
</div>
<!-- end page title -->

<div class="row">  
  <!-- <div class="col-sm-4">
    <a href="{{route('ventas.create')}}" class="btn btn-danger mb-2">
      <i class="mdi mdi-cash-usd mr-2"></i> Nueva Factura</a>
    </div> -->
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane show active">
              <table id="basic-datatable" class="table activate-select dt-responsive nowrap">

                <thead>
                  <tr>
                    <th>Almacén</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Stock minimo</th>
                    <th>Stock maximo</th>
                    <th>Cantidad</th>
                    <th style="width: 85px;">Action</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($almacenproductos as $item)
                  <tr>
                    <td>{{$item->almacen_id}}</td>
                    <td>{{$item->producto_id}}</td>
                    <td>{{$item->cantidadproducto}}</td>
                    <td>{{$item->stockminimo}}</td>
                    <td>{{$item->stockmaximo}}</td>
                    <td>{{$item->cantidadproducto}}</td>
                    <td class="table-action">
                      <a href="#" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                      <a href="#" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>                                          
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>

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

  <script src="{{asset('assets/js/pages/demo.datatable-init.js')}}"></script>


  @stop