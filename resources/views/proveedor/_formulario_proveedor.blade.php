
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Proveedor<span class="separador_menu"> | </span>Registrar</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- <h4 class="header-title">Ingrese la informacion de producto</h4> -->
                <h4>Ingrese la información del proveedor</h4>

                <div class="tab-content">
                    <div class="tab-pane show active" id="form-row-preview">
                        <div class="form-group">
                            <label for="proveedor">Empresa</label>
                            <select id="proveedor" name="proveedor" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Seleccione empresa</option>
                                @if(!empty($empresas))
                                @foreach($empresas as $empresa)
                                <option value="{{$empresa->id}}">{{$empresa->nombreempresa}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre</label>
                            <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Ingrese nombre de almacen">
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="descripcion">Descripción de proveedor</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="5" placeholder="Ingrese descripción del producto"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="archivo_seleccionado">Logo</label>
                                    <input id="archivo_seleccionado" name="archivo_seleccionado" type="file" onchange="seleccionar_archivo_imagen()" />    
                                    <div class="contenedor_imagen" id="cuadro_selector_elemento">
                                        <div id="ver_archivo" class="ver_imagen"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="direccion">Direccion</label>
                                    <input type="text" id="direccion" class="form-control" name="direccion" placeholder="Ingrese número de telefono">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="pais" class="col-form-label">Pais</label> 
                                    <select id="pais" name="pais" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="3">Seleccione pais</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Brasil">Brasil</option>
                                        <option value="Brasil">Peru</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="estado" class="col-form-label">Estado</label> 
                                    <select id="estado" name="estado" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="3">Seleccione departamento</option>
                                        <option value="Ilo">Ilo</option>
                                        <option value="Cusco">Cusco</option>
                                        <option value="Cajamarca">Cajamarca</option>
                                        <option value="Arequipa">Arequipa</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="municipio" class="col-form-label">Municipio</label> 
                                    <input type="text" id="municipio" class="form-control" name="municipio" placeholder="Ingrese municipio">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="correo_electronico">Correo electronico</label>
                                        <input type="email" id="correo_electronico" class="form-control" name="correo_electronico" placeholder="Ingrese correo electronico">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="telefono" class="col-form-label">Telefono</label> 
                                        <input type="number" id="telefono" class="form-control" name="telefono" placeholder="Ingrese número de telefono">
                                    </div>
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