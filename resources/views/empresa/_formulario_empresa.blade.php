<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Empresa<span class="separador_menu"> | </span>Registrar</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- <h4 class="header-title">Ingrese la informacion de producto</h4> -->
                <h4>Ingrese la información de la empresa</h4>

                <div class="form-group">
                    <label for="nombreempresa">Nombre de la empresa</label>
                    <input type="text" class="form-control" id="nombreempresa" name="nombreempresa" placeholder="Ingrese nombre de la empresa."></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="actividad">Actividad principal</label>
                        <input type="text" class="form-control" id="actividad" name="actividad" placeholder="Ingrese la actividad pricipal de la empresa."></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nit">NIT</label>
                        <input type="text" class="form-control" id="nit" name="nit" placeholder="Ingrese numero de identificación tributaria.">
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-textarea" onclick="mostraIMGFOR()" >Imagen de empresa</label>
                    <input id="archivo_seleccionado" name="archivo_seleccionado" type="file" onchange="seleccionar_archivo_imagen()" />    
                    <div class="contenedor_imagen" id="cuadro_selector_elemento">
                        <div id="ver_archivo" class="ver_imagen"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="mision" class="col-form-label">Misión</label> 
                            <input type="text" id="mision" class="form-control" name="mision" placeholder="Ingrese misión de la empresa">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="vision" class="col-form-label">Visión</label> 
                            <input type="text" id="vision" class="form-control" name="vision" placeholder="Ingrese visión de la empresa">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="valores" class="col-form-label">Valores</label> 
                            <input type="text" id="valores" class="form-control" name="valores" placeholder="Ingrese valores de la empresa">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="conocenos" class="col-form-label">Conócenos</label> 
                            <input type="text" id="conocenos" class="form-control" name="conocenos" placeholder="Ingrese una descripcon corta de la empresa">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="historia">Historia</label>
                    <textarea class="form-control" id="historia" name="historia" rows="2" placeholder="Debe ingresar la historia de la empresa."></textarea>
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
                            <span> Municipio: </span><input type="text" class="form-control" name="municipio">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="telefono" class="col-form-label">Telefono</label> 
                            <input type="number" id="telefono" class="form-control" name="telefono" placeholder="Ingrese número telefonico de la empresa">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="correo">Correo electrónico</label>
                            <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingrese correo electronico de la empresa."></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

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