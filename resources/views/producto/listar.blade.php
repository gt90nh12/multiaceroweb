@extends('layouts\admin')

@section('content')
<link href="{{asset('assets/css/vendor/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/vendor/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/vendor/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/vendor/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <h4 class="page-title">Lista productos</h4>
  </div>
</div>
</div>
<div class="row">  
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane show active">
              <table id="basic-datatable" class="table activate-select dt-responsive nowrap">
                <thead>
                  <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Procedencia producto</th>
                    <th>Marca producto</th>
                    <th>Precio Venta</th>
                    <th>Estado</th>
                    <th style="width: 85px;">Action</th>
                </tr>
            </thead>

            <tbody>
              @foreach($productos as $item)
              <tr>
                <td><img src="http://localhost/multiacero/public/assets/productos/{{ $item->imagen }}" alt="imagen producto" title="contact-img" class="rounded mr-1" height="48" /></td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->procedencia_producto}}</td>
                <td>{{$item->marca_producto}}</td>
                <td>{{$item->precio_venta}}</td>
                <td><span class="badge badge-success-lighten">Activo</span></td>
                <td class="table-action">
                    <input type="radio" name="verproducto" id="myModal">
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
<script src="{{asset('assets/js/pages/demo.datatable-init.js')}}"></script>
<script type="text/javascript">
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
        console.log("Hora de mostrar el producto");
      myInput.focus()
    })
</script>
@stop