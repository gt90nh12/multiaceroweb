@extends(mb_strtolower('layouts/'.explode(' ',DB::table('empleados')->where('id',Auth::user()->id)->first()->cargo==='Administrador'?'Admin':DB::table('empleados')->where('id',Auth::user()->id)->first()->cargo)[0],'UTF-8'))

@section('content')
<link href="{{asset('assets/css/vendor/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/vendor/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/vendor/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/vendor/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <h4 class="page-title">Compras realizadas</h4>
    </div>
  </div>
</div>
<div class="row">  
  <div class="col-sm-4">
    <a href="{{url('/registro_compra')}}" class="btn btn-success mb-2"><i class="mdi mdi-plus-circle mr-2"></i> Agregar compra</a>
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane show active">
            <table id="basic-datatable" class="table activate-select dt-responsive nowrap">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Almacén</th>
                  <th>Fecha recepción</th>
                  <th>Costo total</th>
                  <th>Entrega de producto</th>
                  <th>Documentación</th>
                  <th >Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach($compras as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->nombre_almacen}}</td>
                  <td>{{$item->fecha_recepion_producto}}</td>
                  <td>{{$item->costo_total_compra}}</td>
                  <td>{{$item->recepion_producto}}</td>
                  <td>{{$item->documentacion}}</td>
                  <td class="table-action">
                    <a href="#" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                    <!-- <a href="#" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a> -->
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