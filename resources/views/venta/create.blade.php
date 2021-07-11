@extends('layouts\admin')
@section('titulo_pagina', 'Ventas')
@section('descripcion_pagina', 'Formulario Ventas')
@section('content')
{{-- {{$todosLosProductos}} --}}
{{-- {{$caracteristicas}} --}}
<!-- third party css -->
{{-- <link href="{{asset('assets/css/vendor/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" /> --}}
<link href="{{asset('assets/css/vendor/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/vendor/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/vendor/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<!-- third party css end -->
<style>
  input[type="number"] {
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    appearance: textfield;
  }

  input[type=number]::-webkit-inner-spin-button,
  input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
  }

  .number-input {
    background: #fef4dc;
    border: 0px solid #ced4da;
    display: inline-flex;
    border-radius: 4px;
  }

  .number-input,
  .number-input * {
    box-sizing: border-box;
  }

  .number-input button {
    outline:none;
    -webkit-appearance: none;
    background-color: transparent;
    border: none;
    align-items: center;
    justify-content: center;
    width: 2rem;
    height: 2rem;
    cursor: pointer;
    margin: 0;
    position: relative;
  }

  .number-input button:before,
  .number-input button:after {
    display: inline-block;
    position: absolute;
    content: '';
    width: 1rem;
    height: 2px;
    background-color: #37404a;
    transform: translate(-50%, -50%);
  }
  .number-input button.plus:after {
    transform: translate(-50%, -50%) rotate(90deg);
  }

  .number-input input[type=number] {
    font-family: sans-serif;
    color: #37404a;
    max-width: 4rem;
    padding: .5rem;
    border: solid black;
    border-width: 0 2px;
    font-size: 18px;
    height: 2rem;
    font-weight: bold;
    text-align: center;
  }
</style>

<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <h4 class="page-title">NUEVA FACTURA</h4>
    </div>
  </div>
</div>
<!-- end page title -->

<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">
              <!-- Checkout Steps -->
              <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                  <li class="nav-item">
                      <a href="#products-information" data-toggle="tab" aria-expanded="false"
                          class="nav-link rounded-0 active">
                          <i class="mdi  mdi-truck-fast font-18"></i>
                          <span class="d-none d-lg-block">PRODUCTOS</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#customer-information" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                          <i class="mdi mdi-account-circle font-18"></i>
                          <span class="d-none d-lg-block">CLIENTE</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#billing-information" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                          <i class="mdi mdi-cash-multiple font-18"></i>
                          <span class="d-none d-lg-block">FACTURA</span>
                      </a>
                  </li>
              </ul>

              <!-- Steps Information -->
              <div class="tab-content">

                <!-- Products Content-->
                <div class="tab-pane show active" id="products-information">

                  <p>
                    <button class="btn btn-primary ml-1" type="button"
                      data-toggle="collapse" data-target="#collapseExample"
                      aria-expanded="false" aria-controls="collapseExample">
                      Productos en Stock
                    </button>
                  </p>
                  <div class="collapse show" id="collapseExample">
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="tab-content">
                                  <div class="tab-pane show active">
                                    <table id="basic-datatable" class="table activate-select dt-responsive nowrap">
                                      
                                      <thead>
                                        <tr>
                                          <th style="width: 1px">Codigo</th>
                                          <th>Nombre</th>
                                          <th>Marca</th>
                                          <th>Costo</th>
                                          <th>Material</th>
                                          <th>Procedencia</th>
                                          <th>Color</th>
                                          <th>Caracteristicas</th>
                                          <th>AGREGAR</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($todosLosProductos as $item)
                                            <?php
                                            $car="";
                                              foreach ($caracteristicas as $key=>$val){
                                                if($item->id==$val->id_producto)
                                                  $car=str_replace('null','',$car.$val->nombre.' '.$val->dato.' '.$val->unidad_medida.' | ');
                                              }
                                              $car=substr($car,0,-3);
                                            ?>
                                          <tr>
                                            <td style="width: 1px">{{$item->cod_producto}}</td>
                                            <td>{{$item->nombre}}</td>
                                            <td>{{$item->marca_producto}}</td>
                                            <td >{{$item->precio_venta}} Bs.</td>
                                            <td>{{$item->material_producto}}</td>
                                            <td>{{$item->procedencia_producto}}</td>
                                            <td>{{$item->color_producto}}</td>
                                            <td>{{$car}}</td>
                                            <td> <input onclick="checkProductos(event)" 
                                              data-id={{$item->id}}
                                              data-codigo={{$item->cod_producto}}
                                              data-nombre="{{$item->nombre}}"
                                              data-producto="{{$item->marca_producto}}"
                                              data-origen={{$item->procedencia_producto}}
                                              data-color={{$item->color_producto}}
                                              data-precio={{$item->precio_venta}}
                                              data-descripcion="{{$item->descripcion}}"
                                              data-item="{{$item}}"
                                              data-car="{{$car}}"
                                              data-img="{{$item->imagen}}"
                                              type="checkbox"></td>
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
                    <!-- end row-->
                  </div>
                <!-- end row -->
                </div>
                  <!-- End Billing Information Content-->

                  <!-- Customer Content-->
                  <div class="tab-pane" id="customer-information">

                    <div class="tab-pane show active" id="clientes-information">

                      <p>
                        <button class="btn btn-primary ml-1" type="button"
                          data-toggle="collapse" data-target="#collapseClientes"
                          aria-expanded="false" aria-controls="collapseClientes">
                          Clientes de Multiacero
                        </button>
                      </p>
                      <div class="collapse show" id="collapseClientes">

                        <div class="row">
                          <div class="col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="tab-content">
                                  <div class="tab-pane show active">

                                    <table id="tablaClientes" class="table activate-select dt-responsive nowrap" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>Codigo</th>
                                          <th>Fecha Agregado</th>
                                          <th>Razón Social</th>
                                          <th>N° Documento</th>
                                          <th>CI / NIT</th>
                                          <th>Agregar</th>
                                        </tr>
                                      </thead>
                                      <tfoot>
                                        <tr>
                                          <th>Codigo</th>
                                          <th>Fecha Agregado</th>
                                          <th>Razón Social</th>
                                          <th>N° Documento</th>
                                          <th>CI / NIT</th>
                                          <th>Agregar</th>
                                        </tr>
                                      </tfoot>
                                    </table>

                                  </div> <!-- end preview-->
                                </div> <!-- end tab-content-->
                              </div> <!-- end card body-->
                            </div> <!-- end card -->
                          </div><!-- end col-->
                        </div>
                        <!-- end row-->
                      </div>
                    </div>
                  </div>
                  <!-- End Shipping Information Content-->

                  <!-- Billing Content-->
                  <div class="tab-pane" id="billing-information">

                    <div class="tab-pane show active" id="clientes-information">
                      <p>
                        <button class="btn btn-primary ml-1" type="button"
                          data-toggle="collapse" data-target="#collapseFactura"
                          aria-expanded="false" aria-controls="collapseFactura">
                          Vista de la Factura
                        </button>
                      </p>
                      <div class="collapse show" id="collapseFactura">
                        <div class="row" id="invoice">
                      </div>
                      <!-- end row -->
                      </div>
                    </div>
                  </div>
                  <!-- End Payment Information Content-->
              </div> <!-- end tab content-->
              <hr>
              <div class="row">                  
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div id="divCliente" style="font-size:16px">
                        <h4 style="color:#866f33 ">Seleccione un cliente por favor.</h4><br>
                      </div>
                      <div class="row">
                        <div class="col-lg-8">
                          <div class="table-responsive">
                            <table class="table table-borderless table-centered mb-0">
                              <thead class="thead-light">
                                <tr>
                                  <th>Producto</th>
                                  <th>Precio</th>
                                  <th>Catidad</th>
                                  <th>TOTAL</th>
                                  <th style="width: 50px;"></th>
                                </tr>
                              </thead>
                              <tbody id ="tbodyProductos"></tbody>
                            </table>
                          </div> <!-- end table-responsive-->
                            <!-- Add note input-->
                          <div class="mt-3">
                            <label for="example-textarea">Descripcion de la venta:</label>
                            <textarea class="form-control" id="example-textarea" rows="3" placeholder="Escriba aqui..."></textarea>
                          </div>
                          <!-- action buttons-->
                          <div class="row mt-4">
                            <div class="col-sm-6">
                              {{-- <a href="apps-ecommerce-products.html" class="btn text-muted d-none d-sm-inline-block btn-link font-weight-semibold">
                                <i class="mdi mdi-arrow-left"></i> Continuar compras </a> --}}
                            </div> <!-- end col -->
                            <div class="col-sm-6">
                              <div class="text-sm-right">
                                <a class="btn btn-danger" onClick="borrarTodo();" >
                                  <i class="mdi mdi-cart-plus mr-1"></i> Vaciar Todo
                                </a>
                              </div>
                            </div> <!-- end col -->
                          </div> <!-- end row-->
                        </div>
                          <!-- end col -->
                        <div class="col-lg-4">
                          <div class="border p-3 mt-4 mt-lg-0 rounded">
                            <h4 class="header-title mb-3">Resumen del pedido (Bs)</h4>
                            <div class="table-responsive">
                              <table class="table mb-0">
                                <tbody id="resumenVenta"></tbody>
                              </table>
                            </div>
                            <!-- end table-responsive -->
                          </div>
                          <div class="alert alert-warning mt-3" role="alert">
                              Descuento <strong>Cliente</strong>?
                          </div>
                          <div class="input-group mt-3">
                            <input id="thanks" type="text" class="form-control form-control-light" value="0" placeholder="Descuento"/>
                            <div class="input-group-append">
                                <button class="btn btn-warning" onclick="descuento();" type="button">Aplicar</button>
                            </div>
                          </div>
                        </div> <!-- end col -->
                      </div> <!-- end row -->
                    </div> <!-- end card-body-->
                  </div> <!-- end card-->
                </div> <!-- end col -->
              </div>
              <!-- CrearCliente modal-->
              <div id="crearCliente-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-body">
                              <div class="text-center mt-2 mb-4">
                                  <a href="javascript: void(0);" class="text-success">
                                      <span><img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="18"></span>
                                  </a>
                              </div>
                              <form class="needs-validation" id="formCrearCliente" action="javascript: void(0);" novalidate>
                                <legend>Agregar un Nuevo Cliente</legend>
                                <div class="form-group mb-3">
                                    <label for="nombre_razon_social">Razón Social</label>
                                    <input type="text" class="form-control" id="nombre_razon_social" placeholder="Razón Social" value="" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü.\s]+$" required/>
                                    <div class="valid-feedback">¡Muy Bien!</div>
                                    <div class="invalid-feedback">Por favor ingrese un valor valido.</div>
                                </div>
                                <div class="form-group mb-3">
                                  <label for="tipo_documento">Tipo de Documento</label>
                                  <style>.select3{appearance:none;}.select3:invalid{color:#8391a2;}.select3 option{color:white;}</style>
                                  <select class="form-control select3" id="tipo_documento" required>
                                    <option value="" disabled selected hidden>Tipo de Documento</option>
                                    <option value="CI">CI</option>
                                    <option value="NIT">NIT</option>
                                  </select>
                                  <div class="valid-feedback">¡Muy Bien!</div>
                                  <div class="invalid-feedback">Elija un Tipo de Documento.</div>
                                </div>
                                <div class="form-group mb-3">
                                  <label for="numero_documento">Numero de Documento</label>
                                  <input type="text" class="form-control" id="numero_documento" placeholder="Numero de Documento" value="" pattern="[0-9]{5,10}" required/>
                                  <div class="valid-feedback">¡Muy Bien!</div>
                                  <div class="invalid-feedback">Por favor igrese un Numero de Documento valido.</div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                                  <button id="botonSubmit" class="btn btn-primary" type="submit" >Crear Cliete</button>
                                </div>
                              </form>
                          </div>
                      </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
          </div> <!-- end card-body-->
      </div> <!-- end card-->
  </div> <!-- end col -->
</div>
<!-- end row-->
  <input type="hidden" id="csrf_token" value="{{csrf_token()}}">
  <input type="hidden" id="fa" value="{{$fa?$fa->numero_factura+1:1}}">
  <input type="hidden" id="rutaMiniClienteIndex" value="{{route('miniCliente.index')}}">
  <input type="hidden" id="rutaMiniClienteStore" value="{{route('miniCliente.store')}}">
  <input type="hidden" id="assetGeneral" value="{{asset('')}}">
  <input type="hidden" id="unoRoute" value="{{route('ventas.uno')}}">
  <input type="hidden" id="sucursal" value="{{$sucursal}}">
  <input type="hidden" id="ventasStore" value="{{route('ventas.store')}}">
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
  <script src="{{asset('assets/js/pages/venta.js')}}"></script>
  <script src="{{asset('assets/js/pages/miniClientes.js')}}"></script>
  <script src="{{asset('assets/js/pages/montoInvoice.js')}}"></script>
  <script src="{{asset('assets/js/pages/invoice.js')}}"></script>
  <script src="{{asset('assets/js/pages/demo.apex.js')}}"></script>
@stop