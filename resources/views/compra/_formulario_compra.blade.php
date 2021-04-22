<div class="row">
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
                                    <!-- <button class="btn btn-primary btn-sm mt-1"><i class="uil uil-envelope-add mr-1"></i>Send Email</button> -->
                                    <button class="btn btn-primary btn-sm mt-1">Ver empresa</button>
                                    <p class="text-muted mt-2 font-14">Operador logistico: <strong>Lic. Juan Alvaro Marquez</strong></p>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label" for="proveedor">Proveedor</label>
                                <div class="col-md-9">
                                    <select id="proveedor" class="form-control" data-toggle="select2" data-select1-id="1" tabindex="-1" aria-hidden="true" name="proveedor">
                                        <option data-select1-id="1">Seleccionar Proveedor</option>
                                        <optgroup label="Representante Legal" data-select2-id="14">
                                            <option value="AK" data-select1-id="15">Lic. Ivan Callizaya Choque</option>
                                            <option value="HI" data-select1-id="16">Ing. Tania Idanea Chura</option>
                                        </optgroup>
                                        <optgroup label="Operador Logístico" data-select2-id="17">
                                            <option value="CA" data-select1-id="18">Lic. Roberto Rondo Ticona</option>
                                            <option value="NV" data-select1-id="19">Lic. Grover Gloddy Condori</option>
                                            <option value="OR" data-select1-id="20">Lic. Rigoberto Ramos Condori</option>
                                            <option value="WA" data-select1-id="21">Lic. Jorge Deyvis Alanoca/option>
                                        </optgroup>
                                        <optgroup label="Personal de Ventas" data-select2-id="22">
                                            <option value="AZ" data-select1-id="23">Lic. Fabiola Chaiña Quique</option>
                                            <option value="CO" data-select1-id="24">Jhanny aliaga Chambi</option>
                                            <option value="ID" data-select1-id="25">Lic. Mirian Limachi Quispe</option>
                                        </optgroup>
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
                                <label class="col-md-3 col-form-label" for="fecha_recepion">Fecha de recepcion</label>
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
                                    <select class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true" name="unidad_monetaria_TP">
                                        <option data-select3-id="4">Seleccionar Unidad monetaria</option>
                                        <option value="AK" data-select3-id="15">Bolivianos</option>
                                        <option value="HI" data-select3-id="16">Dolares</option>
                                    </select>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
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
                                <select class="select2 form-control select2-multiple" data-toggle="select2" multiple="multiple" name="" id="seleccionar_producto" data-placeholder="Elegir un producto ...">
                                    <optgroup label="Construccion">
                                        <option value="AK">Fierro</option>
                                        <option value="HI">Cemento</option>
                                    </optgroup>
                                    <optgroup label="Interior sanitarios">
                                        <option value="CA">Kit de ducha</option>
                                        <option value="NV">Lavamanos</option>
                                        <option value="OR">Inodoros</option>
                                        <option value="WA">Ceramica</option>
                                    </optgroup>
                                    <optgroup label="Cocina">
                                        <option value="AZ">Lavadora tramontina</option>
                                        <option value="CO">Grifos master G</option>
                                    </optgroup>
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
                            <div class="producto_comprado">
                <label class="eliminar_productoC">Fierro corrugado de construccion  5/8<span class="btn btn-danger" onclick="eliminar_producto_comprado()">X</span></label>
                                <!-- <input type="button" class="btn btn-danger eliminar_productoC" onclick="eliminar_producto_comprado()" value="Eliminar producto"/> -->
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="archivo_seleccionado">Imagen de producto</label>
                                        <input id="archivo_seleccionado" name="imagen_producto" type="file" onchange="seleccionar_archivo_imagen()" />    
                                        <div class="contenedor_imagen imagen_producto_compra" id="cuadro_selector_elemento">
                                            <div id="ver_archivo" class="ver_imagen"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-9">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="cantidad">Cantidad</label>
                                                <input type="number" id="cantidad" class="form-control" name="cantidad" placeholder="Ingrese cantidad de producto"/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="unidad_medida">Unidad de medida</label>
                                                <select id="unidad_medida" name="unidad_medida" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="3">Seleccione unidad de medida</option>
                                                    <option value="AK" data-select2-id="15">Metros</option>
                                                    <option value="HI" data-select2-id="16">Toneladas</option>
                                                    <option value="HI" data-select2-id="16">Kilos</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="precio_unitario">Precio unitario</label>
                                                <input type="number" id="precio_unitario" class="form-control" name="precio_unitario" placeholder="Ingrese precio unitario de producto">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="unidad_modetaria_UP">Unidad monetaria</label>
                                                <select id="unidad_modetaria_UP" name="unidad_modetaria_UP" class="form-control" data-toggle="select4" data-select4-id="1" tabindex="-1" aria-hidden="true">
                                                    <option data-select4-id="4">Seleccione unidad monetaria</option>
                                                    <option value="AK" data-select2-id="15">Bolivianos</option>
                                                    <option value="HI" data-select2-id="16">Dolares</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="fecha_caducidad_producto">Fecha de caducidad de producto</label>
                                                <input type="date" id="fecha_caducidad_producto" class="form-control" name="fecha_caducidad_producto" placeholder="Ingrese fecha caducidad de producto"/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="lote_producto">Lote de productos</label>
                                                <input id="lote_producto" name="lote_producto" type="text" class="form-control" placeholder="Ingrese lote de productos">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    <!-- <button class="btn btn-primary btn-sm mt-1"><i class="uil uil-envelope-add mr-1"></i>Send Email</button> -->
                                    <button class="btn btn-primary btn-sm mt-1">Ver empresa</button>
                                    <p class="text-muted mt-2 font-14">Representante legal: <strong>Ing. Simeón Kapa Larico</strong></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="almacen">Seleccione almacen</label>
                                <div class="col-md-9">
                                    <select name="almacen" id="almacen" class="form-control select2 select2-hidden-accessible" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true">
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
                                <div class="col-md-4">
                                    <select name="unida_monetaria_CT" class="form-control" data-toggle="select4" data-select4-id="1" tabindex="-1" aria-hidden="true">
                                        <option data-select4-id="4">SeleccionE unidad monetaria</option>
                                        <option value="AK" data-select2-id="15">Bolivianos</option>
                                        <option value="HI" data-select2-id="16">Dolares</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="row"> 
                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="observaciones">Observaciones de entrega de productos</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="documento_compra">Documentos de entrega</label>
                                <div class="col-md-9">
                                    <input type="file" id="documento_compra" name="documento_compra" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="list-inline wizard mb-0">
                    <li class="previous list-inline-item"><a href="#" class="btn btn-info">Previous</a>
                    </li>
                    <li class="next list-inline-item float-right"><a href="#" class="btn btn-info">Next</a></li>
                    <button type="button">Click Me!</button> 
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var room = 1;
    function agregar_producto_comprado() {
        room++;
        var objTo = document.getElementById('resgistro_producto_comprado')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass" + room);
        var rdiv = 'removeclass' + room;
        divtest.innerHTML = '<div class="producto_comprado"><input type="button" class="btn btn-danger eliminar_productoC" onclick="eliminar_producto_comprado('+ room +')" value="Eliminar producto"><div class="row"><div class="form-group col-md-3"><label for="example-textarea">Imagen de producto</label><input id="archivo_seleccionado" name="imagen_producto" type="file" onchange="seleccionar_archivo_imagen()" /><div class="contenedor_imagen imagen_producto_compra" id="cuadro_selector_elemento"><div id="ver_archivo" class="ver_imagen"></div></div></div><div class="form-group col-md-9"><div class="form-row"><div class="form-group col-md-6"><label for="descripcion">Cantidad</label><input type="number" id="categoria" class="form-control" name="categoria_id" placeholder="Ingrese cantidad de producto"></div><div class="form-group col-md-6"><label for="descripcion">Unidad de medida</label><select class="form-control" data-toggle="select'+ room +'" data-select'+ room +'-id="1" tabindex="-1" aria-hidden="true"><option data-select'+ room +'-id="'+ room +'">Seleccionar Unidad de medida</option><option value="AK" data-select2-id="15">Metros</option><option value="HI" data-select2-id="16">Toneladas</option><option value="HI" data-select2-id="16">Kilos</option></select></div></div><div class="form-row"><div class="form-group col-md-6"><label for="descripcion">Precio unitario</label><input type="number" id="categoria" class="form-control" name="categoria_id" placeholder="Ingrese cantidad de producto"></div><div class="form-group col-md-6"><label for="descripcion">Unidad de monetaria</label><select class="form-control" data-toggle="select'+ room +'" data-select'+ room +'-id="'+ room +'" tabindex="-1" aria-hidden="true"><option>Seleccionar Unidad de monetaria</option><option value="AK" data-select2-id="15">Bolivianos</option><option value="HI" data-select2-id="16">Dolares</option></select></div></div><div class="form-row"><div class="form-group col-md-6"><label for="descripcion">Fecha de caducidad de producto</label><input type="date" id="categoria" class="form-control" name="categoria_id" placeholder="Ingrese fecha caducidad de producto"/></div><div class="form-group col-md-6"><label for="descripcion">Lote de productos</label><input type="text" class="form-control" placeholder="Ingrese lote de productos"></div></div></div></div></div>';
        objTo.appendChild(divtest)
    }
    function eliminar_producto_comprado(rid) {
        $('.removeclass' + rid).remove();
    }
</script>