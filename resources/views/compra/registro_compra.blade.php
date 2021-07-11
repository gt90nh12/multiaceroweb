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
                                    <div class="text-center">
                                        <div id="contenedorImagenProveedor"></div>
                                        <input type="hidden" name="proveedor" id="idContactoProveedor">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-md-3 col-form-label" for="proveedorCompra">Proveedor</label>
                                    <div class="col-md-9">
                                     <select id="proveedorCompra" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="3" hidden>Seleccione proveedor</option>
                                        @if(!empty($contactoProveedores))
                                        @foreach($contactoProveedores as $proveedor)
                                        <option value="{{$proveedor->id_proveedores}}sjim._{{$proveedor->logo}}sjim._{{$proveedor->proveedor}}">{{$proveedor->persona}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label" for="descripcion_compra">Descripción de Compra</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="descripcion_compra" rows="3" name="descripcion_compra" placeholder="Ingrese descripción de compra"></textarea>
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
                                        <option data-select2-id="3" hidden>Seleccionar tipo de entrega</option>
                                        <option value="AK" data-select2-id="15">Envio a almacén</option>
                                        <option value="HI" data-select2-id="16">Recojo en plata de producción</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label" for="costo_total_compra">Costo total de compra</label>
                                <div class="col-md-6">
                                    <input type="number" id="costo_total_compra" name="costo_total_compra" class="form-control" placeholder="Ingrese el costo total de compra" required>
                                    <p>Unidad monetaria en Bolivianos.</p>
                                </div>
                                <div class="col-md-3 container-centrado">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="switchTipoCambio">
                                        <label class="custom-control-label" for="switchTipoCambio">Seleccionar unidad monetaria.</label>
                                        <p class="etiquetaImvisible">.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="adicionarUnidadMonetaria" class="row esconder">
                                <label class="col-md-3 col-form-label" for="costo_total_compra">Unidad monetaria</label>
                                <div class="col-md-4">
                                    <select class="form-control"  data-toggle="select3" tabindex="-1" aria-hidden="true" name="unidad_monetaria_costo_compra">
                                        <option data-select3-id="4" hidden>Seleccione unidad monetaria</option>
                                        <option value="reales">Real</option>
                                        <option value="soles">Soles</option>
                                        <option value="dolares">Dolares</option>
                                    </select>
                                </div>
                                <label class="col-md-2 col-form-label" for="costo_total_compra">Tipo de cambio</label>
                                <div class="col-md-3">
                                    <input type="number" id="tipo_cambio" name="tipo_cambio_costo_compra" class="form-control" placeholder="Ingrese tipo de cambio" required>
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
                                    <option data-select2-id="3" hidden>Seleccione producto</option>
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
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border p-3 mt-4 mt-lg-0 rounded contenedor_productos_comprados">
                                <h4 class="header-title mb-3">Detalle de compra</h4>
                                <div class="table-responsive" id="resgistro_producto_comprado">
                                    <br>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <label class="col-md-3 col-form-label" for="observaciones">Descripción de Compra</label>
                            <textarea class="form-control" id="observaciones" rows="3" name="observaciones" placeholder="Ingrese descripción de compra"></textarea>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="third">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="text-center">
                                    <div id="contenedorImagenAlmacen">
                                    </div>
                                    <!-- <h4 id="nombreEmpresaMultiacero"></h4> -->
                                    <input type="hidden" name="seleccion_almacen" id="almacenMultiaceroSeleccionado">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="seleccion_almacen">Almacén</label>
                                <div class="col-md-9">
                                    <select id="seleccion_almacen" class="form-control select2 select2-hidden-accessible" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        @if(!empty($almacenes))
                                        @foreach($almacenes as $almacen)
                                        <option value="{{$almacen->id}}JSIAM.{{$almacen->nombre}}JSIAM.{{$almacen->imagen}}">{{$almacen->nombre}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="direccion_entrega">Dirección entrega</label>
                                <div class="col-md-9">
                                    <input type="text" id="direccion_entrega" name="direccion_entrega" class="form-control" placeholder="Ingrese dirección de entrega" required>
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
                                    <input type="number" id="costo_transporte" name="costo_transporte" class="form-control" placeholder="Ingrese costo de transporte" required>
                                    <p>Unidad monetaria en Bolivianos.</p>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="row"> 
                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="estado">Recepción</label>
                                <div class="col-md-9">
                                    <select name="estado" class="form-control" data-toggle="select4" data-select4-id="1" tabindex="-1" aria-hidden="true">
                                        <option class="placeholderselect" data-select4-id="4" disabled selected>Seleccione orden</option>
                                        <option value="HI" data-select2-id="16">Conforme</option>    
                                        <option value="HI" data-select2-id="16">Inconpleto</option>
                                        <option value="HI" data-select2-id="16">Dañado</option>

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
                    <!-- <li class="previous list-inline-item"><a href="#" class="btn btn-info">Atras</a></li> -->
                    <!-- <li class="next list-inline-item float-right"><a href="#" class="btn btn-info">Siguente</a></li> -->
                </ul>
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Guardar</button> 
</form>
<script type="text/javascript">
    //------------------------------------------------------- Evento tipo de cambio -----------------------------------------------------
    (function(){
        var switchTipoCambio = document.getElementById("switchTipoCambio");
        var contenedorTipoUnidadMonetaria = document.getElementById("adicionarUnidadMonetaria");
        switchTipoCambio.addEventListener('change', function(e){
            if(e.target.checked){
                contenedorTipoUnidadMonetaria.classList.remove('esconder')
                contenedorTipoUnidadMonetaria.classList.add('ver')
            }else{
                contenedorTipoUnidadMonetaria.classList.remove('ver')
                contenedorTipoUnidadMonetaria.classList.add('esconder')
            }
        });
    })();
    //------------------------------------------------------- ExtraerDatosAlmacen -------------------------------------------------------
    (function(){
        var almacenSeleccionado = document.getElementById("seleccion_almacen");
        console.log(almacenSeleccionado); 
        almacenSeleccionado.addEventListener('change', function(){
            var opcion_seleccionada = this.options[almacenSeleccionado.selectedIndex];
            var imagenNombreId = opcion_seleccionada.value;
            var separador = "JSIAM.";
            var datoAlmacen = imagenNombreId.split(separador);
            document.getElementById("almacenMultiaceroSeleccionado").value=datoAlmacen[0];
            document.getElementById("contenedorImagenAlmacen").innerHTML = '<img src="assets/almacenes/'+datoAlmacen[2]+'" alt="almacen" class="img-thumbnail avatar-lg"> <h4>'+datoAlmacen[1]+'</h4>';
        });
    })();
    //------------------------------------------------------- ExtraerDatosProveedor -------------------------------------------------------
    (function(){
        var proveedorSeleccionado = document.getElementById("proveedorCompra");
        proveedorSeleccionado.addEventListener('change', function(){
            var opcion_seleccionada = this.options[proveedorSeleccionado.selectedIndex];
            var idImagenNombre = opcion_seleccionada.value;
            var separador = "sjim._";
            var datoProveedor = idImagenNombre.split(separador);
            document.getElementById("idContactoProveedor").value=datoProveedor[0];
            document.getElementById("contenedorImagenProveedor").innerHTML = '<img src="assets/logos/'+datoProveedor[1]+'" alt="logo" class="img-thumbnail avatar-lg"> <h4>'+datoProveedor[2]+'</h4>';
        });
    })();
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
        divtest.innerHTML = '<div class="row col-12 producto-comprado separador-compra-producto"><div class="row col-12"><div class="form-group col-md-3 contenedor-imagen-compra"><div class="img_compra_producto"><img src="../storage/imagenes/'+ImagenProducto+'" alt="shreyu" id="imagen-producto-compra"></div></div><div class="form-group col-md-9"><input type="hidden" value="'+ IdProducto +'" name="id_producto[]"><div class="form-row quitar-producto"><label for="archivo_seleccionado">Producto: <snpa class="nombre-producto-comprado">'+ NombreProducto +'</span></label><button type="button" class="btn btn-danger" onclick="eliminar_producto_comprado('+ room +')">Quitar producto <i class="mdi mdi-window-close"></i> </button></div><br><div class="form-row"><div class="form-group col-md-4"><label for="cantidad">Cantidad</label><input type="number" id="cantidad" class="form-control" placeholder="Ingrese cantidad" name="cantidad[]"/></div><div class="form-group col-md-4"><label for="fechaFabricacion">Fecha de Fabricación</label><input type="date" id="fechaFabricacion" class="form-control" name="fechaFabricacion[]"/></div><div class="form-group col-md-4"><label for="costo">Precio unitario</label><div class="form-row"><div class="form-group col-md-7"><input type="number" id="costo" class="form-control" placeholder="Ingrese costo unitario" name="costo[]"></div><p id="monedaCompraProducto">Bs.</p></div></div></div></div></div><div class="col-lg-12"><div class="accordion custom-accordion" id="custom-accordion-one"><div class="card mb-0 acordion-contenido"><div class="card-header" id="headingFour"><h5 class="m-0"><a class="custom-accordion-title d-block py-1" data-toggle="collapse" href="#acordion'+ room +'" aria-expanded="false" aria-controls="'+ room +'">Adicionar detalle de producto<i class="dripicons-align-center text-success separa-acordion"></i></a></h5></div><div id="acordion'+ room +'" class="acordion-contenido-dentro collapse" aria-labelledby="headingFour" data-parent="#custom-accordion-one"><div class="form-row"><div class="form-group col-md-4"><label for="lote">Lote</label><input type="number" id="lote" class="form-control" placeholder="Ingrese lote de productos" name="lote[]"></div><div class="form-group col-md-4"><label for="color">Color</label><input type="number" id="color" class="form-control" placeholder="Ingrese lote de productos" name="color[]"></div><div class="form-group col-md-4"><label for="descuento">Descuento</label><div class="form-row"><div class="form-group col-md-9"><input type="number" class="form-control" id="descuento" placeholder="Ingrese descuento" name="descuento[]"/></div><div class="form-group col-md-3"><p id="monedaCompraProducto">Bs.</p></div></div></div></div><div class="form-row"><div class="form-group col-md-4"><label for="fechaCaducidad">Fecha de caducidad</label><input type="date" id="fechaCaducidad" class="form-control" name="fechaCaducidad[]"/></div><div class="form-group col-md-4"><label for="utilizacion">Utilización</label><input type="text" id="utilizacion" class="form-control" placeholder="modo_utilizacion" name="utilizacion[]"/></div><div class="form-group col-md-4"><label for="descuento">Accesorios</label><br><button type="button" class="btn btn-outline-success btn-rounded" onclick="accesoriosProducto('+room+')"><i class="uil-cloud-computing"></i>Agregar</button></div></div><div class="form-row col-12"><label for="identificador">Accesorios de producto</label><a href="#" class="right-bar-toggle float-right eliminar-accesorios-producto"><i class="dripicons-cross noti-icon"></i></a><textarea class="form-control esconder" id="accesorios'+room+'" name="identificador[]" rows="3"></textarea></div></div></div></div></div> </div>';

        objTo.appendChild(divtest);
        // document.getElementById("tablaprueba").insertRow(-1).innerHTML = '<td></td><td></td><td></td><td></td>';
    }
    function accesoriosProducto(id){
        var nombre="accesorios"+id
        console.log(nombre);
        // document.getElementById(nombre).classList.remove('esconder');
        document.getElementById(nombre).classList.add('ver');
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
