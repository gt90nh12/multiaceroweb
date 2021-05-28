@extends('layouts\admin')
@section('titulo_pagina', 'Clientes')
@section('descripcion_pagina', 'Formulario Ventas')


@section('content')
{{$todasLasVentas}}

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
            <li class="breadcrumb-item active">Todas las Ventas</li>
          </ol>
        </div>
        <h4 class="page-title">Todas las Ventas</h4>
      </div>
    </div>
  </div>
  <!-- end page title -->

  <div class="row">  
    <div class="col-sm-4">
      <a href="{{route('ventas.create')}}" class="btn btn-danger mb-2">
        <i class="mdi mdi-cash-usd mr-2"></i> Nueva Factura</a>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane show active">
              <table id="basic-datatable" class="table activate-select dt-responsive nowrap">
                
                <thead>
                  <tr>
                    {{-- <th class="all">Producto</th>
                    <th>Categoria</th>
                    <th>fecha add</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Estado</th>
                    <th style="width: 85px;">Action</th> --}}



                      <th style="width: 1px">Codigo</th>
                      <th>Producto</th>
                      <th>Categoria</th>
                      <th>Fecha Agreagado</th>
                      <th>Precio</th>
                      <th>Cantidad</th>
                      <th>estado</th>
                      <th style="width: 85px;">Action</th>
                      <th>Email</th>

                    </tr>
                  </thead>

                  <tbody>
                    @foreach($todasLasVentas as $item)
                      <tr>
                        <td style="width: 1px">{{'$item->id'}}</td>
                        <td>{{'$item->nombre'}}</td>
                        <td>{{'$item->apellidos'}}</td>
                        <td>{{'$item->tipo_documento'}}</td>
                        <td>{{'$item->num_documento'}}</td>
                        <td>{{'$item->telefono_movil'}}</td>
                        <td>{{'$item->telefono_fijo'}}</td>
                        <td>{{'$item->email'}}</td>
                        <td class="table-action">
                          <a href="#" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                          <a href="#" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                          {{-- <a href="#" class="action-icon"> <i class="mdi mdi-delete"></i></a> --}}
                          <form action="#" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-light" >
                              <i class="action-icon mdi mdi-delete"></i>
                            </button>
                          </form>
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