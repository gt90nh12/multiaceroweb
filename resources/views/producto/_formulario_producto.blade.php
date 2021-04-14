<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- <h4 class="header-title">Ingrese la informacion de producto</h4> -->
                                        <h4>Ingrese la información del producto</h4>

                                       <!--  <p class="text-muted font-14">
                                            You may also swap <code>.row</code> for <code>.form-row</code>, a variation of our standard grid row that overrides the default column gutters for tighter and more compact layouts.
                                        </p> -->

                                        <!-- navegador de como llenar el formulario -->
                                            <!-- <ul class="nav nav-tabs nav-bordered mb-3">
                                                <li class="nav-item">
                                                    <a href="#form-row-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                        Preview
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#form-row-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                        Code
                                                    </a>
                                                </li>
                                            </ul>  -->
                                        <!-- finaliza de como llenar el formulario-->

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="form-row-preview">
                                                
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
                <label for="example-textarea">Imagen de producto</label>
                <input id="archivo_seleccionado" name="imagen_producto" type="file" onchange="seleccionar_archivo_imagen()" />    
                <div class="contenedor_imagen" id="cuadro_selector_elemento">
                    <div id="ver_archivo" class="ver_imagen"></div>
                </div>
            </div>
        </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="categoria" class="col-form-label">Categoria</label>
                                                            <input type="email" id="categoria" class="form-control" name="categoria_id" placeholder="Ingrese categoria de producto">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="tipo" class="col-form-label">Tipo</label>
                                                            <input type="password" id="tipo" class="form-control" name="tipo_id" placeholder="Ingrese tipo de producto">
                                                        </div>
                                                    </div>
        
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="unidad_compra" class="col-form-label">Unidad de compra</label>
                                                            <select id="unidad_compra" name="unidad_compra" class="form-control">
                                                                <option>Toneladas</option>
                                                                <option>Kilo</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="unidad_factor_compra" class="col-form-label">Factor unidad de compra</label>
                                                            <select id="unidad_factor_compra" name="unidad_factor_compra" class="form-control">
                                                                <option>Unidad</option>
                                                                <option>Metros</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="unidad_venta" class="col-form-label">Unidad de venta</label>
                                                            <select id="unidad_venta" name="unidad_venta" class="form-control">
                                                                <option>Toneladas</option>
                                                                <option>Kilo</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="unidad_factor_venta" class="col-form-label">Factor unidad de venta</label>
                                                            <select id="unidad_factor_venta" name="unidad_factor_venta" class="form-control">
                                                                <option>Unidad</option>
                                                                <option>Metros</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="unidad_almacen" class="col-form-label">Unidad de almacen</label>
                                                            <select id="unidad_almacen" name="unidad_almacen" class="form-control">
                                                                <option>Toneladas</option>
                                                                <option>Kilo</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="unidad_factor_almacen" class="col-form-label">Factor unidad de almacen</label>
                                                            <select id="unidad_factor_almacen" name="unidad_factor_almacen" class="form-control">
                                                                <option>Unidad</option>
                                                                <option>Metros</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="precio_compra" class="col-form-label">Precio compra</label>
                                                        <input type="text" class="form-control" id="precio_compra" name="precio_compra" placeholder="Ingrese el precio de compra">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="precio_venta" class="col-form-label">Precio venta</label>
                                                        <input type="text" class="form-control" id="precio_venta" name="precio_venta" placeholder="Ingrese el precio de compra">
                                                    </div>
        
                                                    <!-- <div class="form-group"> -->
                                                    <div class="form-row">
                                                        <div class="form-group col-md-2">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="manejo_lote" name="manejo_lote"/>
                                                                <label class="custom-control-label" for="manejo_lote">Manejo por lotes</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-10 ocultar_contenedor" id="contenedor_lote">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-2">
                                                                    <input type="hidden" id="numeroLote" value="0">
                                                                    <p class="boton_agregar_lote" onclick="adicionar_codigoLote()">Agregar código</p>
                                                                </div>
                                                                <div class="form-group col-md-5">
                                                                    <label for="origen_codigo" class="col-form-label">Origen código</label>
                                                                    <div id="origenCodigo"></div>
                                                                    <!-- <input type="text" class="form-control" name="origen_codigo" placeholder="Ingrese el origen del código"> -->
                                                                </div>
                                                                <div class="form-group col-md-5">
                                                                    <label for="codigo_producto" class="col-form-label">Codigo producto</label>
                                                                    <div id="codigoProducto"></div>
                                                                    <!-- <input type="text" class="form-control" name="codigo_producto" placeholder="Ingrese el código del compra"> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->

        
                                                    <!-- <button type="submit" class="btn btn-primary">Registrar</button> -->
        
                                                                  
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="form-row-code">
                                                <pre class="mb-0">
                                                    
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                        
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
<script>
    /*------------------------- SCRIPT PARA ADICIONAR CODIGOS DE LOTE DE PRODUCTOS -----------------------*/
        var checkbox = document.querySelector("input[name=manejo_lote]");
        checkbox.addEventListener( 'change', function() {
            if(this.checked) {
                document.getElementById('contenedor_lote').classList.remove('ocultar_contenedor');
            } else {
                document.getElementById('contenedor_lote').classList.add('ocultar_contenedor');
            }
        });
        function adicionar_codigoLote() {
            var numero = parseInt(document.getElementById("numeroLote").value);
            var  room = numero+1;
            //codigo para agregar un campo de texto de origen codigo
            var origen_codigo = document.getElementById('origenCodigo')
            var divtest = document.createElement("div");
            divtest.setAttribute("class", "form-group removeclass" + room);
            var rdiv = 'removeclass' + room;
            divtest.innerHTML = '<input type="text" class="form-control" name="origen_codigo" placeholder="Ingrese el origen del código">';
            origen_codigo.appendChild(divtest)

            //codigo para agregar un campo de texto de producto codigo
            var codigo_producto = document.getElementById('codigoProducto')
            var divtestt = document.createElement("div");
            divtestt.setAttribute("class", "form-group removeclass" + room);
            var rdiv = 'removeclass' + room;
            divtestt.innerHTML = '<div class="row"><div class="col-sm-12 nopadding"><div class="form-group"><div class="input-group"><input type="text" class="form-control" name="artistas[]" value="" placeholder="Ingresé el artista" required><div class="input-group-append"> <button class="btn btn-danger" type="button" onclick="eliminar_artista_de_cancion(' + room + ');"> <i class="fa fa-minus"></i> </button></div></div><div class="clear"></div></row>';
            codigo_producto.appendChild(divtestt)
            document.getElementById("numeroLote").value=room;
        }

        function eliminar_artista_de_cancion(rid) {
            $('.removeclass' + rid).remove();
        }

    /*------------------- FINALIZA SCRIPT PARA ADICIONAR CODIGOS DE LOTE DE PRODUCTOS --------------------*/

    /*----------------------------------- SCRIPT PARA ADICIONAR IMAGEN -----------------------------------*/
    let cuadroimagen = document.querySelector('#cuadro_selector_elemento');
    cuadroimagen.addEventListener('click', ()=>{
        var archivoIMAGEN = document.getElementById("archivo_seleccionado")
        archivoIMAGEN.click();
    })

    function seleccionar_archivo_imagen() {
        var filesSelected = document.getElementById("archivo_seleccionado").files;
        var formato_imagen
        formato_imagen=filesSelected[0]
        if (formato_imagen.type==="image/png" || formato_imagen.type==="image/jpeg"){
            if (filesSelected.length > 0) {
                var fileToLoad = filesSelected[0];
                var fileReader = new FileReader();
                fileReader.onload = function(fileLoadedEvent) {
                var srcData = fileLoadedEvent.target.result; // <--- data: base64
                var newImage = document.createElement('img');
                newImage.src = srcData;
                document.getElementById("ver_archivo").innerHTML = newImage.outerHTML;// Enviara la imagen
                //alert("Converted Base64 version is " + document.getElementById("imgTest").innerHTML);
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
</script>