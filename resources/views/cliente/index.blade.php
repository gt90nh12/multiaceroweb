@extends('layouts\admin')
@section('titulo_pagina', 'Clientes')
@section('descripcion_pagina', 'Formulario Ventas')
@section('content')
  <link href="{{asset('assets/css/vendor/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/vendor/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/vendor/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <!-- third party css end -->

  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box">
        <h4 class="page-title">Clientes</h4>
      </div>
    </div>
  </div>
  <!-- end page title -->

  <div class="row">  
    <div class="col-sm-4">
      <a href="{{route('clientes.create')}}" class="btn btn-success mb-2">
        <i class="mdi mdi-plus-circle mr-2"></i> Agregar Cliente </a>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane show active">
              <table id="basic-datatable" class="table activate-select dt-responsive nowrap">
                <thead>
                <tr>
                  <th style="width: 1px">CODIGO</th>
                  <th>RAZON SOCIAL</th>
                  <th>CI / NIT</th>
                  <th>N° DOCUMENTO</th>
                  <th>N° COMPRAS</th>
                  <th>MONTO TOTAL</th>
                  <th>FECHA AGREGADO</th>
                  <th>Acción</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($clientes_total as $item)
                    <?php
                      $ax=0;
                      $cont_ve=0;
                      $to_ve=0;
                      foreach ($ve as $key=>$val) {
                        if($val->id_clientes==$item->id){
                          $cont_ve++;
                          $to_ve=$ax+$val->monto_total;
                          $ax=$to_ve;
                        }
                      }
                    ?>
                    <tr>
                      <td style="width: 1px">{{$item->id}}</td>
                      <td>{{$item->nombre_razon_social}}</td>
                      <td>{{$item->tipo_documento}}</td>
                      <td>{{$item->num_documento}}</td>
                      <td>{{$cont_ve}}</td>
                      <td>{{$to_ve}}</td>
                      <td>{{$item->created_at}}</td>
                      <td class="table-action">
                        <a href="{{route('clientes.show', $item->id)}}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                        <a href="{{route('clientes.edit', $item->id)}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
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