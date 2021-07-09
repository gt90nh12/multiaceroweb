<!-- ************** Formulario admin *************** -->
@extends('layouts\admin')
@section('titulo_pagina', 'Compra')
@section('descripcion_pagina', 'Formulario compra de productos')
<!-- *********************************************** -->
@section('content')
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Seccino de errrores-->
@if(Session::has('message'))
<div class="container">
    <div class="alert alert-{{ Session::get('typealert') }}" style="display:none;">
        {{ Session::get('message')}}
        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <script>
            $('.alert').slideDown();
            setTimeout(function(){$('.alert').slideUp(); }, 10000);
        </script>
    </div>
</div>
@endif

<form  action="{{route('almacenar_compra')}}" enctype="multipart/form-data" method="post" novalidate>
    {{ csrf_field() }}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Realizar compra</h4>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mb-3">Ingrese informacion</h4>
            <div id="rootwizard">
                <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                    <li class="nav-item" data-target-form="#accountForm">
                        <a href="#first" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                            <i class="mdi mdi-account-circle mr-1"></i>
                            <span class="d-none d-sm-inline">Proveedor</span>
                        </a>
                    </li>
                    <li class="nav-item" data-target-form="#profileForm">
                        <a href="#second" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                            <i class="uil-box"></i>
                            <span class="d-none d-sm-inline">Producto</span>
                        </a>
                    </li>
                    <li class="nav-item" data-target-form="#otherForm">
                        <a href="#third" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                            <i class="uil-store"></i>
                            <span class="d-none d-sm-inline">Almacén</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content mb-0 b-0">
                    <div class="tab-pane" id="first">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="mt-3 text-center">
                                        <img src="assets/images/logoProveedores/soboce.png" alt="shreyu" class="img-thumbnail avatar-lg">
                                        <h4>Sociedad Boliviana de Cemento</h4>
                                        <!-- <button class="btn btn-primary btn-sm mt-1"><i class="uil uil-envelope-add mr-1"></i>Send Email</button> -->
                                        <button class="btn btn-primary btn-sm mt-1">Ver empresa</button>
                                        <p class="text-muted mt-2 font-14">Operador logistico: <strong>Lic. Juan Alvaro Marquez</strong></p>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-md-3 col-form-label" for="proveedorSeleccionando">Proveedor</label>
                                    <div class="col-md-9">
                                       <select id="proveedorSeleccionando" name="proveedor" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="3">Seleccione proveedor</option>
                                        @if(!empty($contactoProveedores))
                                        @foreach($contactoProveedores as $proveedor)
                                        <option value="{{$proveedor->id_proveedores}}">{{$proveedor->persona}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label" for="descripcion_compra">Descripción de Compra</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="descripcion_compra" rows="3" name="descripcion_compra"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label" for="fecha_orden">Fecha de orden</label>
                                <div class="col-md-9">
                                    <input type="date" id="fecha_orden" name="fecha_orden" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label" for="metodo_entrega">Tipo de entrega</label>
                                <div class="col-md-9">
                                    <select class="form-control" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true" id="metodo_entrega" name="metodo_entrega">
                                        <option data-select2-id="3">Seleccionar tipo de entrega</option>
                                        <option value="AK" data-select2-id="15">Envio a almacén</option>
                                        <option value="HI" data-select2-id="16">Recojo en plata de producción</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label" for="costo_total_compra">Costo total de compra</label>
                                <div class="col-md-6">
                                    <input type="number" id="costo_total_compra" name="costo_total_compra" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true" name="unidad_monetaria">
                                        <option data-select3-id="4">Seleccione unidad monetaria</option>
                                        <option value="AK" data-select3-id="15">Bolivianos</option>
                                        <option value="HI" data-select3-id="16">Dolares</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="second">
                    <div class="row">
                        <div class="col-md-2 alineacion_derecha">
                            <label class="col-form-label" for="seleccionar_producto">Seleccionar producto</label>
                        </div>
                        <div class="col-md-8">
                            <span class="input-group-btn input-group-prepend">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="mdi mdi-package-variant"></i>
                                    </span>
                                </div>
                                <select id="producto_seleccionado" name="producto" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="3">Seleccione producto</option>
                                    @if(!empty($productos))
                                    @foreach($productos as $producto)
                                    <option value="{{$producto->id}}imagen{{$producto->imagen}}">
                                        {{$producto->nombre}} 
                                    </option>
                                    @endforeach
                                    @endif
                                </select>
                            </span>
                        </div>
                        <div class="col-md-2">
                            <label class="col-md-12 col-form-label btn btn-success" for="name3" onclick="agregar_producto_comprado()">Agregar</label>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <label class="col-form-label" for="password3">Productos comprados: </label> -->
                        <div class="contenedor_productos_comprados" id="resgistro_producto_comprado">
                            <br>
                        </div>
                        <div class="col-12">
                            <label class="col-md-3 col-form-label" for="observaciones">Descripción de Compra</label>
                            <textarea class="form-control" id="observaciones" rows="3" name="observaciones"></textarea>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="third">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="mt-3 text-center">
                                    <img src="assets/images/logoProveedores/multiacero.jfif" alt="shreyu" class="img-thumbnail avatar-lg">
                                    <h4>Multiacero</h4>
                                    <button class="btn btn-primary btn-sm mt-1">Ver empresa</button>
                                    <p class="text-muted mt-2 font-14">Representante legal: <strong>Ing. Simeón Kapa Larico</strong></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="seleccion_almacen">Almacén</label>
                                <div class="col-md-9">
                                    <select name="seleccion_almacen" id="seleccion_almacen" class="form-control select2 select2-hidden-accessible" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        @if(!empty($almacenes))
                                        @foreach($almacenes as $almacen)
                                        <option value="{{$almacen->id}}">{{$almacen->nombre}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="direccion_entrega">Dirección entrega</label>
                                <div class="col-md-9">
                                    <select name="direccion_entrega" id="direccion_entrega" class="form-control select2 select2-hidden-accessible" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="3">Multiacero</option>
                                        <option value="AZ" data-select2-id="23">Cesarines</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="fecha_esperada_recepion">Fecha de recepción</label>
                                <div class="col-md-9">
                                    <input type="date" id="fecha_esperada_recepion" name="fecha_esperada_recepion" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="costo_transporte">Costo de transporte</label>
                                <div class="col-md-9">
                                    <input type="number" id="costo_transporte" name="costo_transporte" class="form-control" required>
                                    <p>Unidad monetaria en Bolivianos.</p>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="row"> 
                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="estado">Conformidad</label>
                                <div class="col-md-9">
                                    <select name="estado" class="form-control" data-toggle="select4" data-select4-id="1" tabindex="-1" aria-hidden="true">
                                        <option data-select4-id="4">Seleccione orden</option>
                                        <option value="HI" data-select2-id="16">En espera</option>    
                                        <option value="HI" data-select2-id="16">No entregado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="documentacion">Documentos de entrega</label>
                                <div class="col-md-9">
                                    <input type="file" id="documentacion" name="documentacion" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="list-inline wizard mb-0">
                    <li class="previous list-inline-item"><a href="#" class="btn btn-info">Atras</a>
                    </li>
                    <li class="next list-inline-item float-right"><a href="#" class="btn btn-info">Siguente</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Guardar</button> 
</form>




<script type="text/javascript">
    const datoProducto={};
    var room = 1;
    function agregar_producto_comprado() {
        //------------------------------------------------------- ExtraerDatosProducto -------------------------------------------------------
        var ProductoSelecconado = document.getElementById('producto_seleccionado') 
        var NombreProducto = document.getElementById('producto_seleccionado').options[ProductoSelecconado.selectedIndex].text; console.log(NombreProducto); 
        var idProductoEImagen = ProductoSelecconado.value; console.log(idProductoEImagen);var separador = "imagen", datoProducto = idProductoEImagen.split(separador);
        var IdProducto      =  datoProducto[0];console.log(IdProducto);
        var ImagenProducto  =  datoProducto[1];console.log(ImagenProducto);
        room++;
        
        //------------------------------------------------ Finaliza datos extraccion producto ------------------------------------------------
        var objTo = document.getElementById('resgistro_producto_comprado')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass" + room);
        var rdiv = 'removeclass' + room;
        divtest.innerHTML = '<div class="producto-comprado"><div class="producto-comprado-opciones"><label class="producto-comprado-nombre">'+ NombreProducto +'</label><input type="button" class="btn btn-danger eliminar_productoC" onclick="eliminar_producto_comprado('+ room +')" value="X"></div><div class="row"><div class="form-group col-md-3 producto-comprado-imagen"><label for="archivo_seleccionado">Imagen de producto</label><div class="img_compra_producto"><img src="../storage/imagenes/'+ImagenProducto+'" alt="shreyu" class="img-thumbnail avatar-lg"></div></div><div class="form-group col-md-9 producto-comprado-cuerpo"><input type="hidden" value="'+ IdProducto +'" name="id_producto[]"><div class="form-row"><div class="form-group col-md-4"><label for="cantidad">Cantidad</label><input type="number" id="cantidad" class="form-control" name="cantidad[]"/></div><div class="form-group col-md-4"><label for="fechaFabricacion">Fecha de Fabricación</label><input type="date" id="fechaFabricacion" class="form-control" name="fechaFabricacion[]"/></div><div class="form-group col-md-4"><label for="fechaCaducidad">Fecha de caducidad</label><input type="date" id="fechaCaducidad" class="form-control" name="fechaCaducidad[]"/></div></div><div class="form-row"><div class="form-group col-md-4"><label for="lote">Lote</label><input type="number" id="lote" class="form-control" name="lote[]"></div><div class="form-group col-md-4"><label for="costo">Costo</label><div class="form-row"><div class="form-group col-md-6"><input type="number" id="costo" class="form-control" name="costo[]"></div><div class="form-group col-md-6"><select class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true" name="costo_unidad_moneda[]"><option data-select3-id="4">Seleccione</option><option value="Bolivianos" data-select3-id="15">Bolivianos</option><option value="Dolares" data-select3-id="16">Dolares</option></select></div></div></div><div class="form-group col-md-4"><label for="descuento">Descuento</label><div class="form-row"><div class="form-group col-md-6"><input type="number" class="form-control" id="descuento" name="descuento[]"/></div><div class="form-group col-md-6"><select class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true" name="descuento_unidad_moneda[]"><option data-select3-id="4">Seleccione</option><option value="Bolivianos" data-select3-id="15">Bolivianos</option><option value="Dolares" data-select3-id="16">Dolares</option></select></div></div></div><div class="form-row col-12"><label for="identificador">Identificador de producto</label><textarea class="form-control" id="identificador" name="identificador[]" rows="3"></textarea></div></div></div></div></div>';
        objTo.appendChild(divtest);
    }
    function eliminar_producto_comprado(rid) {
        $('.removeclass' + rid).remove();
    }
    $(document).ready(function(){
        $("#proveedorSeleccionando").change(function(){
            var proveedorSeleccionando = $(this).val();
            console.log(proveedorSeleccionando);
            $.get('datos_proveedor/'+proveedorSeleccionando, function(data){
             console.log(data);
            })
        })
    })
</script>
<script src="assets/js/pages/demo.form-wizard.js"></script>
@stop
