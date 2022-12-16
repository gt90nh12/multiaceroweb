@extends(mb_strtolower('layouts/'.explode(' ',DB::table('empleados')->where('id',Auth::user()->id)->first()->cargo==='Administrador'?'Admin':DB::table('empleados')->where('id',Auth::user()->id)->first()->cargo)[0],'UTF-8'))
@section('titulo_pagina', 'Logs')
@section('descripcion_pagina', 'Lista de Logs')
@section('content')
<style type="text/css">
  #myTextArea {
  border: 1px solid #DBE1EB;
  font-size: 14px;
  font-family: Arial, Verdana;
  padding-left: 7px;
  padding-right: 7px;
  padding-top: 10px;
  padding-bottom: 10px;
  border-radius: 4px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  background: #FFFFFF;
  background: linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);
  color: #6c757d;

}
.fechahoralogs{
margin-top: 3px;
}
.negritalogs{
  font-weight: bold;
}
.nombreusuariologs{
  font-weight: bold;
  margin-top: 3px;
}
</style>
<link href="{{asset('assets/css/vendor/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/vendor/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/vendor/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<!-- third party css end -->

<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <h4 class="page-title">Logs</h4>
    </div>
  </div>
</div>
<!-- end page title -->

<div class="row">  
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane show active">
            <table id="basic-datatable" class="table activate-select dt-responsive nowrap">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Usuario</th>
                  <th>Descripción</th>
                  <th>Consulta</th>
                </tr>
              </thead>
              <tbody>
               @if(!empty($logs))
               @foreach($logs as $usuario)
               <tr>
                <td>{{ $usuario->id}}</td>
                <td class="text-center">
                  <img src="http://localhost/multiacero/storage/personal/{{ $usuario->image }}" alt="Imagen usuario" height="42" class="rounded-circle shadow-sm">
                  
                  <p class="nombreusuariologs">{{ $usuario->name}}</p>
                </td>
                <td class="text-left">
                  <p><span class="negritalogs">Acción: </span>{{ $usuario->description}}</p>
                  
                  <p class="fechahoralogs"><span class="negritalogs">Fecha y hora</span>{{ $usuario->date_time}}</p>
                </td>
                <td class="text-center"> 
                  <textarea id="myTextArea" cols="60" rows="3">{{ $usuario->consulta}}</textarea>
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