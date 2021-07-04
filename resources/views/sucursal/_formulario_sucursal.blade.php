<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Sucursal<span class="separador_menu"> | </span>Registrar</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>Ingrese información de la sucursal</h4>
                <div class="form-row">
                    <label for="id_empresa" class="col-form-label">Casa matriz: 
                        @if(!empty($empresas)) 
                            @foreach($empresas as $empresa)
                                {{$empresa->nombre_empresa}}
                            <input type="hidden" name="id_empresa" value="{{$empresa->id}}">
                            @endforeach 
                        @endif
                    </label>
                </div>
                <div class="form-group">
                    <label for="nombre_sucursal" class="col-form-label">Nombre sucursal</label> 
                    <input type="text" id="nombre_sucursal" class="form-control" name="nombre_sucursal" placeholder="Ingrese número telefonico de la sucursal.">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="actividad">Actividad principal</label>
                        <textarea type="text" class="form-control" rows="5" id="actividad" name="actividad" placeholder="Ingrese la actividad pricipal."></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="example-textarea" onclick="mostraIMGFOR()" >Imagen de sucursal</label>
                        <input id="archivo_seleccionado" name="archivo_seleccionado" type="file" onchange="seleccionar_archivo_imagen()" />    
                        <div class="contenedor_imagen" id="cuadro_selector_elemento">
                            <div id="ver_archivo" class="ver_imagen"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="codigo_punto_venta">Código de punto de venta</label>
                        <input type="number" class="form-control" id="codigo_punto_venta" name="codigo_punto_venta" placeholder="Ingrese código de punto de venta.">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="numero_autorizacion">Número de autorización</label>
                        <input type="text" class="form-control" id="numero_autorizacion" name="numero_autorizacion" placeholder="Ingrese la actividad pricipal de la sucursal.">
                    </div>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <textarea class="form-control" id="direccion" name="direccion" rows="2" placeholder="Ingrese dirección de la sucursal."></textarea>
                </div>
                <div class="form-group">
                    <!-- <label class="col-form-label">Existencia de producto</label> -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <span> País: </span><input type="text" class="form-control" name="pais">
                        </div>
                        <div class="form-group col-md-4">
                            <span> Departamento: </span><input type="text" class="form-control" name="estado_departamento">
                        </div>
                        <div class="form-group col-md-4">
                            <span> Municipio: </span><input type="text" class="form-control" name="ciudad">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefono" class="col-form-label">Teléfono</label> 
                    <input type="number" id="telefono" class="form-control" name="telefono" placeholder="Ingrese número teléfonico de la sucursal.">
                </div>
                <div class="form-group">
                    <label for="correo">Correo electrónico</label>
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingrese correo electrónico de la sucursal."></textarea>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="2" placeholder="Ingrese descripción de la sucursal."></textarea>
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