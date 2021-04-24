
<!-- ************** Formulario admin *************** -->
@extends('layouts\admin')
@section('titulo_pagina', 'Producto')
@section('descripcion_pagina', 'Formulario Registrar productos')
<!-- *********************************************** -->

@section('content')
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Productos <span class="separador_titulo_formulario">|</span> listar</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
               <!--  <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="javascript:void(0);" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle mr-2"></i> Add Products</a>
                    </div>
                    <div class="col-sm-8">
                        <div class="text-sm-right">
                            <button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-cog-outline"></i></button>
                            <button type="button" class="btn btn-light mb-2 mr-1">Import</button>
                            <button type="button" class="btn btn-light mb-2">Export</button>
                        </div>
                    </div>
                </div> -->
                
                <div class="table-responsive">
                    <table class="table table-centered w-100 dt-responsive nowrap" id="myTable">
                        <thead class="thead-light">
                            <tr>
                                <th class="all" style="width: 20px;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                    </div>
                                </th>
                                <th class="all">Imagen</th>
                                <th>Pais de origen</th>
                                <th>Marca</th>
                                <th>Precio</th>
                                <th>Estado</th>
                                <th style="width: 85px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($productos))
                            @foreach($productos as $producto)
                         
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="http://localhost/multiacero/storage/imagenes/{{ $producto->imagen }}" alt="imagen producto" title="contact-img" class="rounded mr-1" height="48" />
                                    <p class="m-0 d-inline-block align-middle font-16">
                                        <a href="apps-ecommerce-products-details.html" class="text-body">{{ $producto->nombre}}</a>
                                        <br/>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                    </p>
                                </td>
                                <td>
                                    {{ $producto->lugar_origen_producto }}
                                </td>
                                <td>
                                    {{ $producto->marca_producto }}
                                </td>                              
                                <td>
                                    {{ $producto->precio_venta }}
                                </td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="table-action">
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                         
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@stop