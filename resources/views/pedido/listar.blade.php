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
      <h4 class="page-title">Lista pedidos</h4>
    </div>
  </div>
</div>
<!-- end page title -->

<div class="row">  
  <div class="col-sm-4">
    <a href="{{url('/registrar_pedidos')}}" class="btn btn-success mb-2">
      <i class="mdi mdi-cash-usd mr-2"></i>Registrar entrega de pedido</a>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane show active">
              <table id="basic-datatable" class="table activate-select dt-responsive nowrap">

                <thead>
                  <tr>
                    <th>Factura</th>
                    <th>PLaca</th>
                    <th>Dirección</th>
                    <th>Conformidad</th>
                    <th style="width: 85px;">Estado</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($pedidos as $pedido)
                  <tr>
                    <td>{{$pedido->factura}}</td>
                    <td>{{$pedido->placa}}</td>
                    <td>{{$pedido->direccion}}</td>
                    <td></td>
                    <td></td>
                    <td class="table-action"></td>
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