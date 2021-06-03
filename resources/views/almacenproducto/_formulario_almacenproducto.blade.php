<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Almacen <span class="separador_menu"> | </span> Existencia de productos</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>Ingrese la información del producto en almacen</h4>
                <div class="tab-content">
                    <div class="tab-pane show active" id="form-row-preview">
                        <div class="form-group">
                            <label for="almacen" class="col-form-label">Seleccione almacen</label>
                            <select id="almacen" name="almacen" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Seleccione proveedor</option>
                                @if(!empty($almacenes))
                                @foreach($almacenes as $almacen)
                                <option value="{{$almacen->id}}">{{$almacen->nombre}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="producto" class="col-form-label">Seleccione producto</label>
                            <select id="producto" name="producto" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Seleccione proveedor</option>
                                @if(!empty($productos))
                                @foreach($productos as $producto)
                                <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label for="loteinterno">Lote interno</label>
                            <textarea class="form-control" id="loteinterno" name="loteinterno" rows="2" placeholder="Ingrese el lote interno."></textarea>
                        </div> -->
                        <div class="form-group">
                            <label for="cantidadproducto" class="col-form-label">Cantidad de producto</label> 
                            <input type="text" id="cantidadproducto" class="form-control" name="cantidadproducto" placeholder="Ingrese número de cantidad del producto">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Existencia de producto</label>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <span> stock minimo: </span><input type="number" class="form-control" name="stockminimo">
                                </div>
                                <div class="form-group col-md-6">
                                    <span> stock maximo: </span><input type="munber" class="form-control" name="stockmaximo">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="comprasporrecibir">Compras por recibir</label>
                            <input type="number" class="form-control" id="comprasporrecibir" name="comprasporrecibir" rows="2" placeholder="Ingrese cantidad de compras por recibir.">
                        </div>
                        <div class="form-group">
                            <label for="pendientesporventa">Pendiente en ventas</label>
                            <input type="number" class="form-control" id="pendientesporventa" name="pendientesporventa" rows="2" placeholder="Ingrese cantidad de pendientes por venta.">
                        </div>
                        <div class="form-group">
                            <label for="costopromedio">Costo promedio</label>
                            <input type="number"class="form-control" id="costopromedio" name="costopromedio" rows="2" placeholder="Ingrese cantidad de pendientes por venta.">
                            <span class="font-13 text-muted">Unidad monetaria en Bolivianos.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                        <!-- end row -->