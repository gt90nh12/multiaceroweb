@extends('layouts\admin')
@section('titulo_pagina', 'Ventas')
@section('descripcion_pagina', 'Formulario Ventas')


@section('content')


<link href="{{asset('assets/css/vendor/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/vendor/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
      
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ventas</a></li>
                    <li class="breadcrumb-item active">Listar Ventas</li>
                </ol>
            </div>
            <h4 class="page-title">Ventas</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <div class="row mb-2">
                          <div class="col-sm-4">
                              <a href="{{route('nueva_factura.create')}}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle mr-2"></i>Nueva Factura</a>
                          </div>
                          <div class="col-sm-8">
                              <div class="text-sm-right">
                                  <button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-cog-outline"></i></button>
                                  <button type="button" class="btn btn-light mb-2 mr-1">Imporar</button>
                                  <button type="button" class="btn btn-light mb-2">Exportar</button>
                              </div>
                          </div><!-- end col-->
                      </div>

                      <div class="table-responsive">
                          <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                              <thead class="thead-light">
                                  <tr>
                                      <th class="all" style="width: 20px;">
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                                              <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                          </div>
                                      </th>
                                      <th class="all">Producto</th>
                                      <th>Categoria</th>
                                      <th>fecha add</th>
                                      <th>Precio</th>
                                      <th>Cantidad</th>
                                      <th>Estado</th>
                                      <th style="width: 85px;">Action</th>
                                  </tr>
                              </thead>
                              <tbody>

                                @foreach ($venta as $item)
                                  <tr>
                                    <td>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                      </div>
                                    </td>
                                      <td>
                                        <img src="{{ asset('assets/images/products/product-1.jfif') }}" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                        <p class="m-0 d-inline-block align-middle font-16">
                                          <a href="apps-ecommerce-products-details.html" class="text-body">{{$item->nombre}}</a>
                                          <br/>
                                          <span class="text-warning mdi mdi-star"></span>
                                          <span class="text-warning mdi mdi-star"></span>
                                          <span class="text-warning mdi mdi-star"></span>
                                          <span class="text-warning mdi mdi-star"></span>
                                          <span class="text-warning mdi mdi-star"></span>
                                        </p>
                                      </td>
                                      <td>Aeron Chair</td>
                                      <td>09/12/2018</td>
                                      <td>$148.66</td>
                                      <td>254</td>
                                      <td><span class="badge badge-{{$item->estado?'success':'danger'}}">{{$item->estado?'Activo':'Inacivo'}}</span></td>
                                      <td class="table-action">
                                        <a href="{{route('ver_factura', $item->id)}}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                      </td>
                                  </tr>
                                @endforeach
                            </tbody>
                          </table>
                      </div>
                  </div> <!-- end card-body-->
              </div> <!-- end card-->
          </div> <!-- end col -->
  





        <!-- third party js -->
        <script src="{{asset('assets/js/vendor/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('assets/js/vendor/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/dataTables.checkboxes.min.js')}}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{asset('assets/js/pages/demo.products.js')}}"></script>
        <!-- end demo js-->













@stop
