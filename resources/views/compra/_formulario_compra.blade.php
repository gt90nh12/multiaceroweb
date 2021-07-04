<!-- <div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Realizar compra</h4>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="header-title mb-3">Compra de productos</h4>
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
                        <span class="d-none d-sm-inline">Almacen</span>
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
                                  
                                    <button class="btn btn-primary btn-sm mt-1">Ver empresa</button>
                                    <p class="text-muted mt-2 font-14">Operador logistico: <strong>Lic. Juan Alvaro Marquez</strong></p>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label" for="proveedor">Proveedor</label>
                                <div class="col-md-9">
                                 <select id="proveedor" name="proveedor" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="3">Seleccione proveedor</option>
                                    @if(!empty($contactoProveedores))
                                    @foreach($contactoProveedores as $proveedor)
                                    <option value="{{$proveedor->id}}">{{$proveedor->persona}}</option>
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
                            <label class="col-md-3 col-form-label" for="fecha_recepion">Fecha de orden</label>
                            <div class="col-md-9">
                                <input type="date" id="fecha_recepion" name="fecha_recepion" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="metodo_entrega">Metodo de entrega</label>
                            <div class="col-md-9">
                                <select class="form-control" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true" id="metodo_entrega" name="metodo_entrega">
                                    <option data-select2-id="3">Seleccionar método de entrega</option>
                                    <option value="AK" data-select2-id="15">Envio a almacen</option>
                                    <option value="HI" data-select2-id="16">Recojo en plata de produccion</option>
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
                                    <option data-select3-id="4">Seleccionar Unidad monetaria</option>
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
                            <select id="producto" name="producto" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Seleccione producto</option>
                                @if(!empty($productos))
                                @foreach($productos as $producto)
                                <option value="{{$producto->id}}">
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
                    <label class="col-form-label" for="password3">Productos comprados: </label>
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
                            <label class="col-md-3 col-form-label" for="almacen">Almacén</label>
                            <div class="col-md-9">
                                <select name="almacen" id="almacen" class="form-control select2 select2-hidden-accessible" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true">
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
                                <select name="direccion_entrega" id="almacen" class="form-control select2 select2-hidden-accessible" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true">
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
                            <label class="col-md-3 col-form-label" for="costo_transporte">Costo de transporte</label>
                            <div class="col-md-5">
                                <input type="number" id="costo_transporte" name="costo_transporte" class="form-control" required>
                            </div>
                          
                        </div>
                    </div>
                </div>   
                <div class="row"> 
                    <div class="col-12">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="fecha_esperada_recepion">Fecha esperada de recepion</label>
                            <div class="col-md-9">
                                <input type="date" id="fecha_esperada_recepion" name="fecha_esperada_recepion" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-12">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="estado">Estado de compra</label>
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
</div>
<script type="text/javascript">
    var room = 1;
    function agregar_producto_comprado() {
        var ProductoSelecconado = document.getElementById('producto') 
        var IdProducto = ProductoSelecconado.value; console.log(IdProducto);
        var NombreProducto = document.getElementById('producto').options[ProductoSelecconado.selectedIndex].text; console.log(NombreProducto); 
        room++;
        var objTo = document.getElementById('resgistro_producto_comprado')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass" + room);
        var rdiv = 'removeclass' + room;
        divtest.innerHTML = '<div class="producto-comprado"><div class="producto-comprado-opciones"><label class="eliminar_productoC">'+ NombreProducto +'</label><input type="button" class="btn btn-danger eliminar_productoC" onclick="eliminar_producto_comprado('+ room +')" value="Eliminar producto"></div><div class="row"><div class="form-group col-md-3 producto-comprado-imagen"><label for="archivo_seleccionado">Imagen de producto</label><div class="img_compra_producto"></div></div><div class="form-group col-md-9 producto-comprado-cuerpo"><input type="text" value="'+ IdProducto +'" name="id_producto[]"><div class="form-row"><div class="form-group col-md-6"><label for="cantidad">Cantidad</label><input type="number" id="cantidad" class="form-control" name="cantidad[]" placeholder="Ingrese cantidad de producto"/></div><div class="form-group col-md-6"><label for="fechaFabricacion">Fecha de Fabricación</label><input type="date" id="fechaFabricacion" class="form-control" name="fechaFabricacion[]" placeholder="Ingrese fecha de fabricación del producto."/></div></div><div class="form-row"><div class="form-group col-md-6"><label for="lote">Lote</label><input type="number" id="lote" class="form-control" name="lote[]" placeholder="Ingrese lote de producto."></div><div class="form-group col-md-6"><label for="fechaCaducidad">Fecha de caducidad</label><input type="date" id="fechaCaducidad" class="form-control" name="fechaCaducidad[]" placeholder="Ingrese fecha de caducidad del producto."/></div></div><div class="form-row"><div class="form-group col-md-6"><label for="costo">Costo</label><input type="number" id="costo" class="form-control" name="costo[]" placeholder="Ingrese costo de producto"></div><div class="form-group col-md-6"><label for="descuento">Descuento</label><input type="number" class="form-control" id="descuento" name="descuento[]" placeholder="Ingrese descuento del producto"/></div></div><div class="form-row"><label for="identificador">Identificador de producto</label><textarea class="form-control" id="identificador" name="identificador[]" rows="5" placeholder="Ingrese descripción del producto"></textarea></div></div></div></div>';
        objTo.appendChild(divtest);
    }
    function eliminar_producto_comprado(rid) {
        $('.removeclass' + rid).remove();
    }
</script> -->