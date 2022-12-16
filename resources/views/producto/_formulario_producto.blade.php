<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Productos</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>Registrar</h4>
                <div class="tab-content">
                    <div class="tab-pane show active" id="form-row-preview">
                     <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="cod_empresa" class="col-form-label">Proveedor</label>
                            @if(!empty($proveedores))
                            <select id="cod_empresa" name="cod_empresa" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Seleccione proveedor</option>
                                @foreach($proveedores as $proveedor)
                                <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                                @endforeach
                            </select>
                            @else
                            <label>Debe agregar un nuevo empresa.</label>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tipo" class="col-form-label">Tipo producto</label>
                            @if(!empty($tipo_productos))
                            <select id="tipo" name="tipo" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Seleccione tipo de producto</option>
                                @foreach($tipo_productos as $productotipo)
                                <option value="{{$productotipo->tipo_producto}}">{{$productotipo->tipo_producto}}</option>
                                @endforeach
                            </select>
                            @else
                            <label>Debe agregar un nuevo tipo de producto</label>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nombre" class="col-form-label">Nombre de producto</label>
                    <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Ingrese nombre de producto">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="descripcion">Descripción del producto</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="5" placeholder="Ingrese descripción del producto"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="example-textarea" onclick="mostraIMGFOR()">Imagen de producto</label>
                        <input id="archivo_seleccionado" name="imagen_producto" type="file" onchange="seleccionar_archivo_imagen()" />    
                        <div class="contenedor_imagen" id="cuadro_selector_elemento">
                            <div id="ver_archivo" class="ver_imagen"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label>Procedencia del producto</label>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control nombre_caracteristica" id="pais_procedencia_producto" name="pais_procedencia_producto" placeholder="País">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="departamento_procedencia_producto" name="departamento_procedencia_producto" placeholder="Estado">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="municipio_procedencia_producto" name="municipio_procedencia_producto" placeholder="Municipio">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="marca_producto">Marca del producto</label>
                        <input type="text" class="form-control" id="marca_producto" name="marca_producto" placeholder="ingrese la marca del producto" />    
                    </div>
                    <div class="form-group col-md-4">
                        <label for="material_producto">Material de elaboracion de producto</label>
                        <input type="text" class="form-control" id="material_producto" name="material_producto" placeholder="Ingrese el material del producto" />    
                    </div>
                    <div class="form-group col-md-4">
                        <label for="color_producto">Color del producto</label>
                        <input type="text" class="form-control" id="color_producto" name="color_producto" placeholder="Ingrese el color del producto" />    
                    </div>
                </div>
                <div class="form-row" id="caracteristicaProducto">
                    <div class="form-row col-12">
                        <div class="form-group col-md-3" id="divNombreCaracteristica">
                        </div>
                        <div class="form-group col-md-6" id="divDatoCaracteristica">
                        </div>
                        <div class="form-group col-md-3" id="divUnidadMedida">    
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 claseselect">
                        <label for="unidad_comercial" class="col-form-label">Unidad de comercial</label>
                        <select id="unidad_comercial" name="unidad_comercial" class="form-control">
                            <option data-select="unidad_factor_almacen">Seleccionar unidad.</option>
                            <option>Toneladas</option>
                            <option>Kilo</option>
                            <option>Metro lineal</option>
                            <option>Caja</option>
                            <option>Bolsa</option>
                            <option>Juego</option>
                            <option>Metro</option>
                            <option>Paquete</option>
                            <option>Unidad</option>
                            <option>Rollo</option>
                            <option>Par 2 unidades</option>
                        </select>
                        <label for="embalaje" class="col-form-label">Embalaje</label>
                        <select id="embalaje" name="embalaje" class="form-control">
                            <option data-select="unidad_factor_almacen">Seleccionar tipo embalaje.</option>
                            <option>Palets</option>
                            <option>Paquetes</option>
                            <option>Bobina</option>
                            <option>Bolsa</option>
                            <option>Ninguno</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 claseselect">
                        <label for="manejo_producto" class="col-form-label">Descripción manejo de productos</label>
                        <textarea class="form-control" id="manejo_producto" name="manejo_producto" rows="4" placeholder="Ingrese descripción del manejo de producto"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="precio_venta" class="col-form-label">Precio venta</label>
                    <input type="text" class="form-control" id="precio_venta" name="precio_venta" placeholder="Ingrese el precio de venta.">
                    <span class="font-13 text-muted">Unidad monetaria en Bolivianos.</span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script>

    /*----------------------------------- SCRIPT PARA ADICIONAR IMAGEN -----------------------------------*/
    function seleccionar_archivo_imagen() {
        var filesSelected = document.getElementById("archivo_seleccionado").files;
        var formato_imagen
        formato_imagen=filesSelected[0]
        if (formato_imagen.type==="image/png" || formato_imagen.type==="image/jpeg" || formato_imagen.type==="image/PNG" || formato_imagen.type==="image/JPEG"){
            if (filesSelected.length > 0) {
                var fileToLoad = filesSelected[0];
                var fileReader = new FileReader();
                fileReader.onload = function(fileLoadedEvent) {
                    var srcData = fileLoadedEvent.target.result; // <--- data: base64
                    var newImage = document.createElement('img');
                    newImage.src = srcData;
                    document.getElementById("ver_archivo").innerHTML = newImage.outerHTML;
                }
                fileReader.readAsDataURL(fileToLoad);
            }
        }
        else{
            alert('Archivo no permitido. Seleccione una imagen en formato PNG o JPEG.')
            document.getElementById("archivo_seleccionado").value=''
        }
    }
    /*------------------------------ FINALIZA SCRIPT PARA ADICIONAR IMAGEN ------------------------------*/

    function mostraIMGFOR(){
        var archivoIMAGEN = document.getElementById("archivo_seleccionado")
        archivoIMAGEN.click();
    }
    
    let validacionCaracteristica;
    let unidad_medida;
    let unidad_medida_alternativa;

    // const contenedor = document.getElementById("caracteristicaProducto");
    const contenedorNombre = document.getElementById("divNombreCaracteristica");
    const contenedorDato = document.getElementById("divDatoCaracteristica");
    const contenedorUnidadMedida = document.getElementById("divUnidadMedida");
    
    $(document).ready(function(){
        $("#tipo").change(function(){
            contenedorNombre.innerHTML="";
            contenedorDato.innerHTML="";
            contenedorUnidadMedida.innerHTML="";
            var tipoProducto = $(this).val();
            $.get('producto_caracteristicas/'+tipoProducto, function(data){
                // console.log(data);
                for(var caracteristica in data) {
                    if(data[caracteristica].nombre) {
                        contenedorNombre.innerHTML +="<div class='estilosFilaCaracteristicas'><label class='col-form-label estilosNombreCaracte'>"+data[caracteristica].nombre+"</label></div>";
                        contenedorNombre.innerHTML +="<input type='hidden' class='col-form-label' name='nombreCaracteristica[]' value='"+data[caracteristica].nombre+"' />"; 
                    }
                    if(data[caracteristica].validacion) {
                        validacionCaracteristica = data[caracteristica].validacion;
                    }
                    if(data[caracteristica].tipo_dato == "numeros") {
                        contenedorDato.innerHTML +="<div class='estilosFilaCaracteristicas'><input type='number' class='form-control' name='dato_caracteristica[]' placeholder='"+ validacionCaracteristica +"' /></div>"; 
                    }
                    if(data[caracteristica].tipo_dato == "alfaNumerico") {
                        contenedorDato.innerHTML +="<div class='estilosFilaCaracteristicas'><textarea class='form-control' name='dato_caracteristica[]' rows='1' placeholder='"+ validacionCaracteristica + "'></textarea></div>"; 
                    }
                    if(data[caracteristica].tipo_dato == "letras") {
                        contenedorDato.innerHTML +="<div class='estilosFilaCaracteristicas'><input type='text' class='form-control' name='dato_caracteristica[]' placeholder='"+ validacionCaracteristica +"' /></div>"; 
                    }
                    if(data[caracteristica].tipo_dato == "fecha") {
                        contenedorDato.innerHTML +="<div class='estilosFilaCaracteristicas'> <input type='date' class='form-control' name='dato_caracteristica[]' placeholder='"+ validacionCaracteristica +"' /></div>"; 
                    }
                    if(data[caracteristica].unidad_medida) {
                        unidad_medida = data[caracteristica].unidad_medida
                    }
                    if(data[caracteristica].unidad_medida_alternativa){
                        unidad_medida_alternativa = data[caracteristica].unidad_medida_alternativa;console.log(unidad_medida_alternativa);
                    }
                    if(unidad_medida =="Seleccionar medida" && unidad_medida_alternativa == "Seleccionar medida alternativa"){
                        contenedorUnidadMedida.innerHTML +="<div class='estilosFilaCaracteristicas'><input type='hidden' class='col-form-label' name='unidad_medida[]' value='null' /></div>";
                    }else if(unidad_medida_alternativa != "Seleccionar medida alternativa" && unidad_medida != " "){
                        contenedorUnidadMedida.innerHTML += "<div class='estilosFilaCaracteristicas'><select name='unidad_medida[]' class='form-control'><option data-select='Seleccione unidad'>Seleccionar unidad</option> <option>"+unidad_medida+"</option> <option>"+data[caracteristica].unidad_medida_alternativa+"</option></select></div>";
                    }else if(unidad_medida_alternativa == "Seleccionar medida alternativa" && unidad_medida != " "){
                        contenedorUnidadMedida.innerHTML +="<div class='estilosFilaCaracteristicas'><p>"+data[caracteristica].unidad_medida+"</p></div>"; 
                        contenedorUnidadMedida.innerHTML +="<input type='hidden' class='col-form-label' name='unidad_medida[]' value='"+data[caracteristica].unidad_medida+"' />"; 
                    }
                }   
            });
        });
    });


  </script>