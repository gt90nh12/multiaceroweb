@extends('layouts\admin')
@section('titulo_pagina', 'Clientes')
@section('descripcion_pagina', 'Formulario Ventas')
@section('content')
  <link href="{{asset('assets/css/vendor/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/vendor/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/vendor/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <div class="row">
    <div class="col-12">
      <div class="page-title-box">
        <h4 class="page-title">LISTA DEL PERSONAL</h4>
      </div>
    </div>
  </div>

  <div class="row">  
    <div class="col-sm-4">
      <a href="{{route('auths.create')}}" class="btn btn-danger mb-2">
        <i class="mdi mdi-plus-circle mr-2"></i> Nuevo Empleado </a>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane show active">
              <table id="basic-datatable" class="table activate-select dt-responsive nowrap">
                <thead>
                <tr>
                  <th style="width: 1px">Codigo</th>
                  <th>Nombre(s)</th>
                  <th>Apellido(s)</th>
                  <th>N° Documento</th>
                  <th>Cargo</th>
                  <th>Experiencia</th>
                  <th>Estado</th>
                  <th>Celular</th>
                  <th>Telefono Fijo</th>
                  <th>Correo electronico</th>
                  <th>Direccion</th>
                  <th>Activo Desde</th>
                  <th>Activo Hasta</th>
                  <th>Horario Mañana</th>
                  <th>Horario Tarde</th>
                  <th>Acción</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($per as $item)
                    <?php
                      // $ax=0;
                      // $cont_ve=0;
                      // $to_ve=0;
                      // foreach ($ve as $key=>$val) {
                      //   if($val->id_clientes==$item->id){
                      //     $cont_ve++;
                      //     $to_ve=$ax+$val->monto_total;
                      //     $ax=$to_ve;
                      //   }
                      // }
                    ?>
                    <tr>
                      <td style="width: 1px">{{$item->id}}</td>
                      <td>{{$item->nombre}}</td>
                      <td>{{$item->apellido_paterno}} {{$item->apellido_materno}}</td>
                      <td>{{$item->numero_documento_ci}}</td>
                      <td>{{$item->cargo}}</td>
                      <td>{{$item->experiencia_meses}} (Meses)</td>
                      <td><span class="badge badge-{{$item->status?'success':'danger'}}">{{$item->status?'activo':'inactivo'}}</span></td>
                      <td>{{$item->telefono_movil}}</td>
                      <td>{{$item->telefono_fijo}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->direccion}}</td>
                      <td>{{date('d/m/Y',strtotime($item->fecha_inicio_actividad))}}</td>
                      <td>{{date('d/m/Y',strtotime($item->fecha_fin_actividad))}}</td>
                      <td>{{date('H:i',strtotime($item->horario_mañana_inicio))}} - {{date('H:i',strtotime($item->horario_mañana_fin))}}</td>
                      <td>{{date('H:i',strtotime($item->horario_tarde_inicio))}} - {{date('H:i',strtotime($item->horario_tarde_fin))}}</td>
                      <td class="table-action">
                        <a href="{{route('auths.show',$item->id)}}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                        <a href="{{route('auths.edit',$item->id)}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
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