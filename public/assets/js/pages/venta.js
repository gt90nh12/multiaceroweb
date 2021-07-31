const assetGeneral=document.getElementById('assetGeneral').value;
const $trProductosDOM=document.getElementById('tbodyProductos');
const $resumenVentaDOM=document.getElementById('resumenVenta');
const $des=document.getElementById('thanks');
const ventasStore=document.getElementById('ventasStore').value;
const $csrf_token=document.getElementById('csrf_token').value;
cajero={id:1};
venta=[];
checkProductos=e=>{
  if(e.target.checked){
    id=Number(e.target.dataset.id);
    codigo=e.target.dataset.codigo;
    nombre=e.target.dataset.nombre;
    producto=e.target.dataset.producto;
    origen=e.target.dataset.origen;
    color=e.target.dataset.color;
    precio=Number(e.target.dataset.precio);
    descripcion=e.target.dataset.descripcion;
    multiplicador=1;
    total=precio;
    car=e.target.dataset.car;
    al=e.target.dataset.al;
    img=e.target.dataset.img;
    data=[{id, codigo,nombre,producto,origen,color,precio,multiplicador,total,descripcion,car,img,al}];
    almacenProductos(data);
  }
};
almacenProductos=data=>{
  venta=[...venta,...data];
  let voild1={};
  filtrado1=venta.filter(element=>voild1[element.id]?false:voild1[element.id]=true);
  venta=filtrado1;
  venta.descuentoTotal=0;
  renderizadoProductosCheck(venta);
};
function renderizadoProductosCheck(venta){
  contenido=``;
  resumenVenta=``;
  if(venta.length===0){
    $resumenVentaDOM.innerHTML=resumenVenta;
  }
  venta.totalGeneral=0;
  venta.totalFinal=0;
  $des.value=venta.descuentoTotal||"0";
  venta.forEach((element,i)=>{
    venta.totalGeneral=venta.totalGeneral+venta[i].total,clip=0;
    venta.totalFinal=venta.totalGeneral-venta.descuentoTotal;
    let nuevocontenido=`
      <tr id="tr-productos">
        <td id="eventoEjemplo" >
          <img src="${assetGeneral}assets/images/products/${element.img}" alt="${element.nombre}"
          title="Caracteriticas: ${element.car}" class="rounded mr-3" height="64" />
          <p class="m-0 d-inline-block align-middle font-16">
              <a href="javascript: void(0);"
                  class="text-body"> ${element.nombre} </a>
              <br>
              <small class="mr-2"><b>Origen:</b> ${element.origen} </small><br>
              <small><b>Color:</b> ${element.color} </small>
          </p>
        </td>
        <td style="font-size: 16px;" class="classPrecio"> ${element.precio.toFixed(2)} </td>
        <td>
          <div class="number-input">
            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown();multiplicar();" ></button>
              <input class="cantidadProducto" min="1" value="${element.multiplicador}" type="number" onInput="multiplicar();">
            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp();multiplicar();" class="plus"></button>
          </div>
        </td>
        <td style="font-size: 16px;" id="precioTotal" >${element.total.toFixed(2)}</td>
        <td>
            <a href="javascript:void(0);" class="action-icon">
              <i onclick="eliminarItem(${element.id})" name="delete" class="mdi mdi-delete"></i>
            </a>  
        </td>
      <tr>
    `;
    let resumenVenta=`
      <tr>
        <td>Total General:</td>
        <td class="text-sm-right">${venta.totalGeneral.toFixed(2)}</td>
      </tr>
      <tr>
        <td>Descuento:</td>
        <td class="text-sm-right">${venta.descuentoTotal}</td>
      </tr>
      <tr>
        <th>TOTAL FINAL:</th>
        <th class="text-sm-right">${venta.totalFinal.toFixed(2)}</th>
      </tr>
    `;
    contenido=contenido+nuevocontenido;
    for(i=0;i<venta.length;i++){
      for(j=0;j<venta.length;j++){
        if(venta[i].al===venta[j].al)
          clip++;
      }
    }
    $resumenVentaDOM.innerHTML=resumenVenta;
  });
  $trProductosDOM.innerHTML=contenido;
  renderInvoice();
};
eliminarItem=deleteId=>{
  venta.forEach((e,i)=>{
    venta = venta.filter(e=>e.id!==deleteId);
  });
  venta.totalFinal=0;
  venta.descuentoTotal=0;
  renderizadoProductosCheck(venta);
};
const $multi=document.getElementsByClassName('cantidadProducto');
multiplicar=()=>{
  const $precioTotal=document.getElementById('precioTotal');
  [...$multi].forEach((el,i) => {
    if(el.value==0){
      el.value=1;
    }
    venta[i].multiplicador=el.value;
    venta[i].total=parseInt(el.value)*venta[i].precio;
    renderizadoProductosCheck(venta);
  });
};
$des.onkeypress=e=>(/^([0-9]+\.?[0-9]{0,2})$/).test(e.target.value+e.key)?true:false;
descuento=()=>{
  venta.descuentoTotal=$des.value==0?0:parseFloat($des.value).toFixed(2);
  renderizadoProductosCheck(venta);
};
borrarTodo=()=>{
  renderizadoProductosCheck(venta=[]);
};