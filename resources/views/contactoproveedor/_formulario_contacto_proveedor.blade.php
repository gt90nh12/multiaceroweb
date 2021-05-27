
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Contacto proveedor<span class="separador_menu"> | </span>Registrar</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
               <h4>Ingrese la información del contacto proveedor</h4>
               <div class="tab-content">
                    <div class="tab-pane show active" id="form-row-preview">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="persona">Persona</label>
                                    <input type="text" id="persona" class="form-control" name="persona">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="proveedor">Proveedor</label>
                                    <select id="proveedor" name="proveedor" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="3">Seleccione proveedor</option>
                                        @if(!empty($proveedores))
                                            @foreach($proveedores as $proveedor)
                                                <option value="{{$proveedor->cod_proveedor}}">{{$proveedor->nombre}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="profesion">Profesión</label>
                                    <input type="text" id="profesion" class="form-control" name="profesion" placeholder="Ingrese profesión.">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cargo">Cargo</label>
                                    <input type="text" id="cargo" class="form-control" name="cargo" placeholder="Ingrese cargo que ocupa en la empresa.">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="telefono_coorporativo">Teléfono coorporativo</label>
                                    <input type="text" id="telefono_coorporativo" class="form-control" name="telefono_coorporativo" placeholder="Ingrese número de telefono coorporativo.">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="correo_coorporativo" class="col-form-label">Correo electrónico coorporativo</label> 
                                    <input type="text" id="correo_coorporativo" class="form-control" name="correo_coorporativo" placeholder="Ingrese correo electronico coorporativo.">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fecha_inicio">Fecha inicio de actividades</label>
                                    <span><input type="date" id="fecha_inicio" class="form-control" name="fecha_inicio"></span><input type="time" class="form-control" name="hora_inicio">
                                    <label for="descripcion_inicio_actividades">Descripción del inicio de actividades, del contacto personal del proveedor</label>
                                    <textarea class="form-control" id="descripcion_inicio_actividades" name="descripcion_inicio_actividades" rows="5" placeholder="Ingrese el motivo de inicio del contacto del personal del proveedor"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="fecha_finalizacion">Fecha finalización de actividades</label>
                                    <span><input type="date" id="fecha_finalizacion" class="form-control" name="fecha_finalizacion"></span><input type="time" class="form-control" name="hora_finalizacion">
                                    <label for="descripcion_finalizacion_actividades">Descripción de la finalizacion de actividades, del contacto personal del proveedor</label>
                                    <textarea class="form-control" id="descripcion_finalizacion_actividades" name="descripcion_finalizacion_actividades" rows="5" placeholder="Ingrese el motivo de finalización del contacto del personal del proveedor"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </div>
</div>
