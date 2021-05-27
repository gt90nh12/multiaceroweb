
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Producto<span class="separador_menu"> | </span>Tipo</h4>
        </div>
    </div>
</div><div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>Ingrese caracteristica de producto</h4>
                <div class="tab-content">
                    <div class="tab-pane show active" id="form-row-preview">

                        <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre caracteristica del producto</label>
                            <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Ingrese nombre de la caracteristica del producto.">
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="validacion">Mensaje de validación</label>
                                    <div class="form-row">
                                        <textarea class="form-control" id="validacion" name="validacion" rows="5" placeholder="Debe ingresar el mensaje de validación para la caracteristica del producto."></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="tipo_almacen">Seleccione tipo de dato</label>
                                    <div class="form">
                                        <div class="custom-control custom-radio mb-2">
                                            <input type="radio" id="numero" name="tipo_dato" class="custom-control-input" value="numeros">
                                            <label class="custom-control-label" for="numero">Numeros</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-radio-success mb-2">
                                            <input type="radio" id="letra" name="tipo_dato" class="custom-control-input" value="letras">
                                            <label class="custom-control-label" for="letra">Letras</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-radio-info mb-2">
                                            <input type="radio" id="alfaNumerico" name="tipo_dato" class="custom-control-input" value="alfaNumerico">
                                            <label class="custom-control-label" for="alfaNumerico">Simbolo letras y numeros</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-radio-info mb-2">
                                            <input type="radio" id="fecha" name="tipo_dato" class="custom-control-input" value="fecha">
                                            <label class="custom-control-label" for="fecha">Fecha</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <label id="rangotipodato"></label>
                                    <div class="form-row">
                                        <div id="opciones_rangodehasta" class="ocultarDIV">
                                            <div class="form-row col-12">
                                                <div class="form-group col-md-6 etiquetas-horizontal">
                                                    <label class="separacion_descripcion" for="de">De: </label>
                                                    <input type="number" class="form-control" id="de" name="rango_de" placeholder="Ingrese número">
                                                </div>
                                                <div class="form-group col-md-6 etiquetas-horizontal">
                                                    <label class="separacion_descripcion" for="hasta">Hasta: </label>
                                                    <input type="number" id="hasta" class="form-control" name="rango_hasta" placeholder="Ingrese número">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="opcion_unidad_medida" class="form-row col-12 ocultarDIV">
                                            <label class="col-form-label" for="unidad_medida">Seleccione la unidad de medida</label>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 etiquetas-horizontal">
                                                    <select class="form-control select2" data-toggle="select2" name="unidad_medida">
                                                        <option>Seleccionar medida</option>
                                                        <optgroup label="Medida masa (peso)">
                                                            <option value="tm">Tonelada</option>
                                                            <option value="kg">Kilogramo</option>
                                                            <option value="g">Gramo</option>
                                                            <option value="mg">Miligramo</option>
                                                        </optgroup>
                                                        <optgroup label="Medida longitud">
                                                            <option value="plg">Pulgada</option>
                                                            <option value="km">Kilometro</option>
                                                            <option value="mts">Metro</option>
                                                            <option value="dm">Decimetro</option>
                                                            <option value="cm">Centimetro</option>
                                                            <option value="mm">Milinetro</option>
                                                        </optgroup>
                                                        <optgroup label="Medida de volumen">
                                                            <option value="m3">Metro cubico</option>
                                                            <option value="l">Litro</option>
                                                            <option value="ml">Milimetro</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6 etiquetas-horizontal">
                                                    <select class="form-control select2" data-toggle="select2" name="unidad_medida_alternativa">
                                                        <option>Seleccionar medida alternativa</option>
                                                        <optgroup label="Medida masa (peso)">
                                                            <option value="tm">Tonelada</option>
                                                            <option value="kg">Kilogramo</option>
                                                            <option value="g">Gramo</option>
                                                            <option value="mg">Miligramo</option>
                                                        </optgroup>
                                                        <optgroup label="Medida longitud">
                                                            <option value="plg">Pulgada</option>
                                                            <option value="km">Kilometro</option>
                                                            <option value="mts">Metro</option>
                                                            <option value="dm">Decimetro</option>
                                                            <option value="cm">Centimetro</option>
                                                            <option value="mm">Milimetro</option>
                                                        </optgroup>
                                                        <optgroup label="Medida de volumen">
                                                            <option value="m3">Metro cubico</option>
                                                            <option value="l">Litro</option>
                                                            <option value="ml">Milimetro</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="descripcion">Informcaión caracteristica de producto</label>
                          <textarea class="form-control" id="descripcion" name="descripcion" rows="2" placeholder="Debe ingresar el mensaje de validación para la caracteristica del producto."></textarea>
                      </div>
                      <div class="form-group">
                        <label>Tipo de producto</label>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="tipoproductoseleccion" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="tipoproductoseleccion">Seleccionar tipo de producto</label>
                                </div>
                                <div id="selecciontipoProducto" class="ocultarDIV">                          
                                    @if(!empty($tipoproducto))
                                        <label for="seleccion_tipo_producto">Seleccione el tipo de producto</label>
                                        <select id="seleccion_tipo_producto" name="seleccion_tipo_producto" class="form-control" data-toggle="select3" data-select3-id="1" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="3">Seleccione tipo de producto</option>
                                            @foreach($tipoproducto as $productotipo)
                                            <option value="{{$productotipo->tipo_producto}}">{{$productotipo->tipo_producto}}</option>
                                            @endforeach
                                        </select>
                                    @else
                                        <label>Debe agregar un nuevo producto</label>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="tipoproductoNuevo" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="tipoproductoNuevo">Adicionar nuevo tipo de producto</label>
                                </div>
                                <div id="nuevotipoPregunta" class="ocultarDIV">
                                    <input type="text" id="nuevo_tipo_producto" name="nuevo_tipo_producto" class="form-control" placeholder="Ingrese el nombre de tipo de producto.">
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
<script type="text/javascript">
    const selectorNumeros = document.querySelector('#numero');
    selectorNumeros.addEventListener('change', (event) => {
        document.getElementById("rangotipodato").innerHTML = "Seleccione el rango de numero permitido";
        document.getElementById("opcion_unidad_medida").classList.add("mostrarDIV");
        document.getElementById("opciones_rangodehasta").classList.add("mostrarDIV");
    });
    const selectorLetra = document.querySelector('#letra');
    selectorLetra.addEventListener('change', (event) => {
        document.getElementById("rangotipodato").innerHTML = "Seleccione el rango de letras permitido";
        document.getElementById("opcion_unidad_medida").classList.remove("mostrarDIV");
        document.getElementById("opciones_rangodehasta").classList.add("mostrarDIV");
    });
    const selectorAlfaNumerico = document.querySelector('#alfaNumerico');
    selectorAlfaNumerico.addEventListener('change', (event) => {
        document.getElementById("rangotipodato").innerHTML = "Rango de caracteres permitido.";
        document.getElementById("opcion_unidad_medida").classList.add("mostrarDIV");
        document.getElementById("opciones_rangodehasta").classList.add("mostrarDIV");
    });
    const selectorFecha = document.querySelector('#fecha');
    selectorFecha.addEventListener('change', (event) => {
        document.getElementById("rangotipodato").innerHTML = "";
        document.getElementById("opcion_unidad_medida").classList.remove("mostrarDIV");
        document.getElementById("opciones_rangodehasta").classList.remove("mostrarDIV");
    });
    const tipoProductoNuevo = document.querySelector('#tipoproductoNuevo');
    tipoProductoNuevo.addEventListener('change', (event) => {
        document.getElementById("nuevotipoPregunta").classList.add("mostrarDIV");
        document.getElementById("selecciontipoProducto").classList.remove("mostrarDIV");
    });
    const tipoProductoSeleccion = document.querySelector('#tipoproductoseleccion');
    tipoProductoSeleccion.addEventListener('change', (event) => {
        document.getElementById("selecciontipoProducto").classList.add("mostrarDIV");
        document.getElementById("nuevotipoPregunta").classList.remove("mostrarDIV");
    });

</script>
