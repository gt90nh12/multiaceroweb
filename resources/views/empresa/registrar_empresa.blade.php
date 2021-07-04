<!-- ************** Formulario admin *************** -->
@extends('layouts\admin')
@section('titulo_pagina', 'Almacen')
@section('descripcion_pagina', 'Formulario Registrar Almacen')
<!-- *********************************************** -->
@section('content')
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Seccino de errrores-->
@if(Session::has('message'))
<div class="container">
    <div class="alert alert-{{ Session::get('typealert') }}" style="display:none;">
        {{ Session::get('message')}}
        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <script>
            $('.alert').slideDown();
            setTimeout(function(){$('.alert').slideUp(); }, 10000);
        </script>
    </div>
</div>
@endif

<form  action="{{route('almacenar_empresa')}}"  enctype="multipart/form-data" method="post" novalidate>
    {{ csrf_field() }}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Información<span class="separador_menu"> | </span>Registrar</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Ingrese información</h4>
                    <div id="basicwizard">
                        <ul class="nav nav-pills nav-justified form-wizard-header mb-4">
                            <li class="nav-item">
                                <a href="#basictab1" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active"> 
                                    <i class="mdi mdi-account-circle mr-1"></i>
                                    <span class="d-none d-sm-inline">Empresa</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#basictab2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                    <i class="mdi mdi-home-circle mr-1"></i>
                                    <span class="d-none d-sm-inline">Casa matriz</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content b-0 mb-0">
                        <div class="tab-pane active" id="basictab1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nombre_empresa">Nombre de la empresa</label>
                                        <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa" placeholder="Ingrese nombre de la empresa.">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-textarea" onclick="mostraIMGFOR()" >Imagenes empresa</label>
                                        <input id="archivo_seleccionado" name="archivo_seleccionado" type="file" onchange="seleccionar_archivo_imagen()" />    
                                        <div class="contenedor_imagen" id="cuadro_selector_elemento">
                                            <div id="ver_archivo" class="ver_imagen"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="mision" class="col-form-label">Misión</label> 
                                            <textarea id="mision" class="form-control" name="mision" placeholder="Ingrese misión de la empresa."></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="vision" class="col-form-label">Visión</label> 
                                            <textarea id="vision" class="form-control" name="vision" placeholder="Ingrese visión de la empresa."></textarea> 
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="valores" class="col-form-label">Valores</label> 
                                            <textarea id="valores" class="form-control" name="valores" placeholder="Ingrese valores de la empresa."></textarea> 
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="conocenos" class="col-form-label">Conócenos</label> 
                                            <textarea id="conocenos" class="form-control" name="conocenos" placeholder="Ingrese una descripcon corta de la empresa."></textarea> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="historia">Historia</label>
                                        <textarea class="form-control" id="historia" name="historia" rows="5" placeholder="Debe ingresar la historia de la empresa."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="basictab2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nit">NIT</label>
                                            <input type="text" class="form-control" id="nit" name="nit" placeholder="Ingrese número de identificación tributaria.">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="numero_autorizacion">Número de autorización</label>
                                            <input type="text" class="form-control" id="numero_autorizacion" name="numero_autorizacion" placeholder="Ingrese la actividad pricipal de la sucursal.">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label for="actividad">Actividad principal</label>
                                        <textarea class="form-control" id="actividad" name="actividad" rows="1" placeholder="Ingrese la actividad pricipal."></textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="example-textarea" onclick="mostraIMGSUCURSAL()">Imagen de sucursal</label>
                                                <input id="archivo_seleccionadoS" name="archivo_seleccionadoS" type="file" onchange="seleccionar_archivo_imagenS()" />    
                                                <div class="contenedor_imagen" id="cuadro_selector_elemento">
                                                    <div id="ver_archivoS" class="ver_imagen"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="descripcion" class="col-form-label">Descripción</label>
                                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Ingrese descripción de la sucursal."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="direccion">Dirección</label>
                                        <textarea class="form-control" id="direccion" name="direccion" rows="1" placeholder="Ingrese dirección."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <span> País: </span><input type="text" class="form-control" name="pais">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <span> Departamento: </span><input type="text" class="form-control" name="estado_departamento">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <span> Municipio: </span><input type="text" class="form-control" name="municipio">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="telefono" class="col-form-label">Teléfono</label> 
                                            <input type="number" id="telefono" class="form-control" name="telefono" placeholder="Ingrese número teléfonico."/>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="correo" class="col-form-label">Correo electrónico</label>
                                            <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese correo electronico."/>
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
    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Guardar</button>        
</form>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
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



/*--------------------- SCRIPT PARA ADICIONAR IMAGEN --------------------*/
function mostraIMGSUCURSAL(){
    var archivoIMAGENSUCURSAL = document.getElementById("archivo_seleccionadoS")
    archivoIMAGENSUCURSAL.click();
}
function seleccionar_archivo_imagenS() {
    var filesSelected = document.getElementById("archivo_seleccionadoS").files;
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
                    document.getElementById("ver_archivoS").innerHTML = newImage.outerHTML;
                }
                fileReader.readAsDataURL(fileToLoad);
            }
        }
        else{
            alert('Archivo no permitido. Seleccione una imagen en formato PNG o JPEG.')
            document.getElementById("archivo_seleccionadoS").value=''
        }
    }
    /*--------------- FINALIZA SCRIPT PARA ADICIONAR IMAGEN -----------------*/


</script>
@stop

