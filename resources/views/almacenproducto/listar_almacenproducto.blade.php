@extends(mb_strtolower('layouts/'.explode(' ',DB::table('empleados')->where('id',Auth::user()->id)->first()->cargo==='Administrador'?'Admin':DB::table('empleados')->where('id',Auth::user()->id)->first()->cargo)[0],'UTF-8'))

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
      <h4 class="page-title">Lista productos en almacén</h4>
    </div>
  </div>
</div>
<!-- end page title -->

<div class="row">  
  <div class="col-sm-4">
    <a href="{{url('/registro_almacenproducto')}}" class="btn btn-success mb-2">
      <i class="mdi mdi-plus-circle mr-2"></i>Agregar inventario</a>
    </div>
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
                    <td>{{$item->almacen}}</td>
                    <td>{{$item->producto}}</td>
                    <td>{{$item->cantidad_producto}}</td>
                    <td>{{$item->stock_minimo}}</td>
                    <td>{{$item->stock_maximo}}</td>
                    <td>{{$item->cantidad_producto}}</td>
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