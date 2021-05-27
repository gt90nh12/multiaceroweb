<div class="row">
    <div class="col-12">
        <div class="page-title-box">
        <h4 class="page-title">Empresa<span class="separador_menu">|</span>Registrar</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- <h4 class="header-title">Ingrese la informacion de producto</h4> -->
                <h4>Ingrese la información de la empresa</h4>
<!-- 
                                                           <div class="tab-content">
                                            <div class="tab-pane show active" id="form-row-preview">
                                                
                                                    <div class="form-group">
                                                        <label for="nombre" class="col-form-label">Seleccione almacen</label>
                                                        <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="3">Seleccione almacen</option>
                                                            <option value="AZ" data-select2-id="18">Multiacero</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="producto" class="col-form-label">Seleccione producto</label>
                                                        <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="3">Seleccione producto</option>
                                                            <option value="AZ" data-select2-id="18">Fierro</option>
                                                        </select>
                                                    </div> -->


                                                    <div class="form-group">
                                                        <label for="nombreempresa">Nombre de la empresa</label>
                                                        <input type="text" class="form-control" id="nombreempresa" name="nombreempresa" placeholder="Ingrese nombre de la empresa."></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="example-textarea" onclick="mostraIMGFOR()" >Imagen de empresa</label>
                                                        <input id="archivo_seleccionado" name="archivo_seleccionado" type="file" onchange="seleccionar_archivo_imagen()" />    
                                                        <div class="contenedor_imagen" id="cuadro_selector_elemento">
                                                            <div id="ver_archivo" class="ver_imagen"></div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="nit">NIT</label>
                                                        <input type="text" class="form-control" id="nit" name="nit" placeholder="Ingrese numero de identificación tributaria."></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="actividad">Actividad principal</label>
                                                        <input type="text" class="form-control" id="actividad" name="actividad" placeholder="Ingrese la actividad pricipal de la empresa."></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="direccion">Dirección</label>
                                                        <textarea class="form-control" id="direccion" name="direccion" rows="2" placeholder="Ingrese dirección de la empresa."></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <!-- <label class="col-form-label">Existencia de producto</label> -->
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <span> Pais: </span><input type="text" class="form-control" name="pais">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <span> Estado: </span><input type="text" class="form-control" name="estado_departamento">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <span> Ciudad: </span><input type="text" class="form-control" name="ciudad">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="telefono" class="col-form-label">Telefono</label> 
                                                        <input type="number" id="telefono" class="form-control" name="telefono" placeholder="Ingrese número telefonico de la empresa">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="correo">Correo electrónico</label>
                                                        <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingrese correo electronico de la empresa."></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="descripcion">Descripción</label>
                                                        <textarea class="form-control" id="descripcion" name="descripcion" rows="2" placeholder="Ingrese descripción de la empresa."></textarea>
                                                    </div>


                                                    <!-- <button type="submit" class="btn btn-primary">Registrar</button> -->


                                                </div> <!-- end preview-->


                                            </div> <!-- end tab-content-->

                                        </div> <!-- end card-body -->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

<script type="text/javascript">
     /*--------------------- SCRIPT PARA ADICIONAR IMAGEN --------------------*/
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
/*--------------- FINALIZA SCRIPT PARA ADICIONAR IMAGEN -----------------*/

function mostraIMGFOR(){
        var archivoIMAGEN = document.getElementById("archivo_seleccionado")
        archivoIMAGEN.click();
    }
</script>