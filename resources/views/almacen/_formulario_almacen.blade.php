<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- <h4 class="header-title">Ingrese la informacion de producto</h4> -->
                                        <h4>Ingrese la información del almacen</h4>

                                                           <div class="tab-content">
                                            <div class="tab-pane show active" id="form-row-preview">
                                                
                                                    <div class="form-group">
                                                        <label for="nombre" class="col-form-label">Nombre de almacen</label>
                                                        <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Ingrese nombre de producto">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-textarea">Imagen de Almacen</label>
                                                        <input id="archivo_seleccionado" name="imagen_producto" type="file" onchange="seleccionar_archivo_imagen()" />    
                                                        <div class="contenedor_imagen" id="cuadro_selector_elemento">
                                                            <div id="ver_archivo" class="ver_imagen"></div>
                                                        </div>
                                                    </div>

                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <textarea class="form-control" id="direccion" name="direccion" rows="2" placeholder="Ingrese dirección del almacen."></textarea>
                </div>
                <div class="form-group">
                    <label for="telefono" class="col-form-label">Telefono</label> 
                    <input type="text" id="telefono" class="form-control" name="telefono" placeholder="Ingrese número de telefono">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Horario de atención</label>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <span> De: </span><input type="time" class="form-control" name="horario_abierto">
                        </div>
                        <div class="form-group col-md-6">
                            <span> Hasta: </span><input type="time" class="form-control" name="horario_cerrado">
                        </div>
                    </div>
                </div>
               <!--  <div class="form-group">
                    <label class="col-form-label">Horario de descanso </label><span class="btn btn-success" click="adicionar_horario_descanso()">+</span>
                    <div class="form-row" id="contenedor_horario_descanso">
                        <div class="form-group col-md-3">
                            <span> De: </span><input type="time" class="form-control" name="horario_abierto">
                        </div>
                        <div class="form-group col-md-3">
                            <span> Hasta: </span><input type="time" class="form-control" name="horario_cerrado">
                        </div>
                        <div class="form-group col-md-6">
                            <span> Motivo: </span><input type="time" class="form-control" name="horario_cerrado">
                        </div>
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="5" placeholder="Ingrese descripción del almacen."></textarea>
                </div>
        
        
                                                    <!-- <button type="submit" class="btn btn-primary">Registrar</button> -->
        
                                                                  
                                            </div> <!-- end preview-->
                                        
                                            
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