
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Vehículo<span class="separador_menu"> | </span>Registrar</h4>
        </div>
    </div>
</div><div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>Ingrese la información del vehículo</h4>

                <div class="tab-content">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <span> Placa: </span><input type="text" class="form-control" name="placa">
                            </div>
                            <div class="form-group col-md-6">
                                <span> Numero de chasis: </span><input type="text" class="form-control" name="chasis">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="descripcion">Tipo de carga</label>
                                <textarea class="form-control" name="tipo_carga" rows="5" placeholder="Ingrese descripción tipo de carga que maneja el vehículo."></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="archivo_seleccionado">Imagen vehículo</label>
                                <input id="archivo_seleccionado" name="archivo_seleccionado" type="file" onchange="seleccionar_archivo_imagen()" />    
                                <div class="contenedor_imagen" id="cuadro_selector_elemento">
                                    <div id="ver_archivo" class="ver_imagen"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <span>Modelo: </span><input type="text" class="form-control" name="modelo">
                            </div>
                            <div class="form-group col-md-6">
                                <span> Marca: </span><input type="text" class="form-control" name="marca">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <span> Color: </span><input type="text" class="form-control" name="color">
                            </div>
                            <div class="form-group col-md-6">
                                <span> Peso: </span><input type="number" class="form-control" name="peso"><p>Unidad medida de peso tonelas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    /*------------------------- SCRIPT PARA ADICIONAR CODIGOS DE LOTE DE PRODUCTOS -----------------------*/
    /*var checkbox = document.querySelector("input[name=manejo_lote]");
    checkbox.addEventListener( 'change', function() {
        if(this.checked) {
            document.getElementById('contenedor_lote').classList.remove('ocultar_contenedor');
        } else {
            document.getElementById('contenedor_lote').classList.add('ocultar_contenedor');
        }
    });*/
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