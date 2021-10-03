@extends(mb_strtolower('layouts/'.explode(' ',DB::table('empleados')->where('id',Auth::user()->id)->first()->cargo==='Administrador'?'Admin':DB::table('empleados')->where('id',Auth::user()->id)->first()->cargo)[0],'UTF-8'))
@section('titulo_pagina', 'Clientes')
@section('descripcion_pagina', 'Formulario Ventas')

@section('content')
  {{-- <link href="{{asset('assets/css/vendor/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" /> --}}
  <link href="{{asset('assets/css/vendor/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/vendor/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/vendor/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <!-- third party css end -->

  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box">
        <h4 class="page-title">TODAS LAS VENTAS</h4>
      </div>
    </div>
  </div>
  <!-- end page title -->
  <div class="row">  
    <div class="col-sm-12">
      <a href="{{route('ventas.create')}}" class="btn btn-success mb-2">
        <i class="mdi mdi-plus-circle mr-2"></i> Nueva Factura 
      </a>
      <a href="{{route('reporteGeneral')}}" class="btn btn-info mb-2">
        <i class="mdi mdi-file-document-outline mr-2"></i> Reporte General 
      </a>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane show active">
              <table id="basic-datatable" class="table activate-select dt-responsive nowrap">
                <thead>
                  <tr>
                      <th style="width: 1px">#</th>
                      <th style="width: 1px">FECHA DE LA VENTA</th>
                      <th>CLIENTE</th>
                      <th>CI / NIT</th>
                      <th>N° DOCUMENTO</th>
                      <th>TOTAL</th>
                      <th>DESCUENTO</th>
                      <th>TOTAL FINAL</th>
                      <th style="width: 85px;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($todasLasVentas)
                    @foreach($todasLasVentas as $item)
                      <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->nombre_razon_social}}</td>
                        <td>{{$item->tipo_documento}}</td>
                        <td>{{$item->num_documento}}</td>
                        <td>{{$item->monto_total+$item->descuento_total}} Bs.</td>
                        <td>{{$item->descuento_total}} Bs.</td>
                        <td>{{$item->monto_total}} Bs.</td>
                        <td class="table-action">
                          <a href="{{route('ventas.show', $item->id)}}" class="action-icon"><i class="mdi mdi-eye"></i></a>
                        </td>
                      </tr>
                    @endforeach
                    @endif
                  </tbody>
                </table>                                          
              </div> <!-- end preview-->
            </div> <!-- end tab-content-->
          </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
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
<!-- third party js ends -->
<script src="{{asset('assets/js/pages/demo.datatable-init.js')}}"></script>
@stop