
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
        <h4 class="page-title">Almacen<span class="separador_menu"> | </span>Registrar</h4>
    </div>
</div>
</div><div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- <h4 class="header-title">Ingrese la informacion de producto</h4> -->
                <h4>Ingrese la información del almacen</h4>

                <div class="tab-content">
                    <div class="tab-pane show active" id="form-row-preview">

                        <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre de almacen</label>
                            <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Ingrese nombre de almacen">
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="empresa_id">Empresa</label>
                                    <select id="empresa_id" name="empresa_id" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="3">Seleccione empresa</option>
                                        @if(!empty($empresas))
                                            @foreach($empresas as $empresa)
                                                <option value="{{$empresa->id}}">{{$empresa->nombreempresa}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tipo_almacen">Tipo almacen</label>
                                    <select id="tipo_almacen" name="tipo_almacen" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="3">Seleccione tipo almacen</option>
                                        <option value="Almacen">Almacen</option>
                                        <option value="Sucursal">Sucursal</option>
                                        <option value="Sucursal">Fabrica almacen</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="descripcion">Descripción del almacen</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="5" placeholder="Ingrese descripción del producto"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="archivo_seleccionado">Imagen de Almacen</label>
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
                                    <label for="direccion">Direccion</label>
                                    <textarea class="form-control" id="direccion" name="direccion" rows="2" placeholder="Ingrese dirección del almacen."></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="telefono" class="col-form-label">Telefono</label> 
                                    <input type="text" id="telefono" class="form-control" name="telefono" placeholder="Ingrese número de telefono">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Horario de atención por la mañana.</label>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <span> De: </span><input type="time" class="form-control" name="horario_abierto_m">
                                </div>
                                <div class="form-group col-md-6">
                                    <span> Hasta: </span><input type="time" class="form-control" name="horario_cerrado_m">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Horario de atención por la tarde.</label>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <span> De: </span><input type="time" class="form-control" name="horario_abierto_t">
                                </div>
                                <div class="form-group col-md-6">
                                    <span> Hasta: </span><input type="time" class="form-control" name="horario_cerrado_t">
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
                </div> --

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