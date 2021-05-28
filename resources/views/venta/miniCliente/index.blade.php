  {{-- <link href="{{asset('assets/css/vendor/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" /> --}}
  <link href="{{asset('assets/css/vendor/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/vendor/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/vendor/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <!-- third party css end -->

  <div class="row">  
    <div class="col-sm-4">
      <a href="{{route('clientes.create')}}" class="btn btn-danger mb-2">
        <i class="mdi mdi-plus-circle mr-2"></i> Agregar Cliente</a>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane show active">
              <table id="datatable2" class="table activate-select dt-responsive nowrap">
                
                <thead>
                  <tr>
                      <th style="width: 1px">Codigo</th>
                      <th>Razon Social</th>
                      <th>Tipo Doc</th>
                      <th>Numero Doc</th>
                      <th>Producto Favorito</th>
                      <th>Numero de Compras</th>
                      <th>otro</th>
                      <th>Email</th>
                      <th>Acción</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($clientes_total as $item)
                      <tr>
                        <td style="width: 1px">{{$item->id}}</td>
                        <td>{{$item->nombre_razon_social}}</td>
                        <td>{{$item->tipo_documento}}</td>
                        <td>{{$item->num_documento}}</td>
                        <td>{{$item->apellidos}}</td>
                        <td>{{$item->telefono_movil}}</td>
                        <td>{{$item->telefono_fijo}}</td>
                        <td>{{$item->email}}</td>
                        <td class="table-action">
                          <a href="{{route('clientes.show', $item->id)}}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                          <a href="{{route('clientes.edit', $item->id)}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                          {{-- <a href="#" class="action-icon"> <i class="mdi mdi-delete"></i></a> --}}
                          <form action="{{route('clientes.destroy', $item->id)}}" method="POST">
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
