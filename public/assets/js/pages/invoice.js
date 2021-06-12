const $rowInvoice=document.getElementById('invoice');
const unoRoute=document.getElementById('unoRoute').value;
const sucursal=document.getElementById('sucursal').value;
t=new Date();
const renderInvoice=()=>{
  if(venta.length!==0&&Object.entries(cliente).length!==0){
    let templateTr="", empty1="";
    let inputProducto="", empty2="";c=0;
    venta.forEach(el=>{
      templateTr=`
      <tr>
        <td>#${el.codigo}</td>
        <td>
          <b>${el.nombre}</b> <br/>
          ${el.car}
        </td>
        <td>${el.precio.toFixed(2)} Bs.</td>
        <td>${el.multiplicador}</td>
        <td class="text-right">${el.total.toFixed(2)} Bs.</td>
      </tr>`;
      templateTr=empty1+templateTr;
      empty1=templateTr;
      inputProducto=`
      <input type="hidden" name="${c}" value="${el.id},${el.precio},${el.multiplicador},${el.total}"/>
      `;
      c++;
      inputProducto=empty2+inputProducto;
      empty2=inputProducto;
    });
    suc=JSON.parse(sucursal)[0];
    let templateInvoice=`
    <div class="col-12">
      <div class="card">
        <div class="card-body">
            <!-- Invoice Detail-->
            <div class="row">
              <div class="col-sm-6">
                <div class="float-left mt-3">
                  <img src="${assetGeneral}assets/images/logo-light.png" alt="" height="22px">
                  <h4>${suc.nombre_empresa}</h4>
                  <h5>Sucursal ${suc.numero_sucursal}</h5>
                  <address>
                    ${suc.pais} - ${suc.estado_departamento}<br>
                    ${suc.ciudad}<br>
                    ${suc.direccion}<br>
                    Correo: ${suc.correo}<br>
                    Telefono: ${suc.telefono}
                  </address>
                </div>
              </div><!-- end col -->
              <div class="col-sm-4 offset-sm-2">
                <div class="mt-3 float-sm-right">
                  <p class="font-12"><strong>NIT:</strong><span class="float-right">${suc.nit}</span></p>
                  <p class="font-12"><strong>N° FACTURA:</strong><span class="float-right">001</span></p>
                  <p class="font-12"><strong>N° AUTORIZACION:</strong><span class="float-right">${suc.numero_autorizacion}</span></p>
                  <p class="font-18"><strong>ORIGINAL</strong></p>
                  <p class="font-12"><strong></strong><span class="float-right">${suc.actividad}.</span></p>
                </div>
              </div><!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
              <div class="col-sm-12">
                <div style="text-align: center;">
                  <h1>FACTURA</h1>
                </div>
              </div><!-- end col -->
            </div>
            <div class="row mt-4">
              <div class="col-sm-3">
                <h6>NOMBRE / RAZON SOCIAL</h6>
                ${cliente.nombre_razon_social}
              </div> <!-- end col-->
              <div class="col-sm-5">
                <h6>CI / NIT</h6>
                ${cliente.num_documento}
              </div> <!-- end col-->
              <div class="col-sm-4 text-sm-right">
                  <h6>FECHA</h6>
                  ${t.toLocaleDateString()}
              </div> <!-- end col-->
            </div> 
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table class="table mt-4">
                    <thead>
                      <tr><th>CODIGO</th>
                        <th>DESCRIPCION</th>
                        <th>PRECIO UNITARIO</th>
                        <th>CANTIDAD</th>
                        <th class="text-right">TOTAL</th>
                      </tr>
                    </thead>
                    <tbody>
                    ${templateTr}
                    </tbody>
                  </table>
                </div> <!-- end table-responsive-->
              </div> <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
              <div class="col-sm-12">
                <div class="float-right mt-3 mt-sm-0">
                  <p><b>Sub-total:</b> <span class="float-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${venta.totalGeneral.toFixed(2)} Bs.</span></p>
                  <p><b>Descuento:</b> <span class="float-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${venta.descuentoTotal} Bs.</span></p>
                </div>
                <div class="clearfix"></div>
              </div> <!-- end col -->
            </div>
            <!-- end row-->
            <div class="row">
              <div class="col-sm-9">
                <h5>SON: ${montoInvoice(venta.totalFinal)} </h5>
              </div> <!-- end col -->
              <div class="col-sm-3">
                <div class="float-right mt-3 mt-sm-0">
                  <h5>TOTAL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${venta.totalFinal.toFixed(2)} Bs.</h5>
                </div>
              </div> <!-- end col -->
            </div>
            <!-- end row-->
          <div class="row mt-4">
            <div class="col-sm-5">
                <h6>FECHA LIMITE DE EMISION</h6>
                <p>11/06/2021</p>
            </div> <!-- end col-->
            <div class="col-sm-3">
                <h6>CODIGO DE CONTROL</h6>
                <p id="unoCode"></p>
            </div> <!-- end col-->
            <div class="col-sm-4">
              <div id="divQr" style="border:3px solid #FFFFFF;float: right;width:140px"></div>
            </div> <!-- end col-->
          </div>    
          <!-- end row -->  
          <div style="text-align: center;">
            <h6 class="text-muted">"ESTA FACTURA CONTRIBUYE AL DESARROLLO DE NUESTRO PAIS, EL USO ILÍCITO  DE ÉSTA  SERÁ  SANCIONADO DE ACUERDO A LEY"</h6>
            <h6 class="text-muted">Ley N° 453: Tienes derecho a recibir información sobre las características y contenidos de los servicios que utilices.</h6>
          </div>
          <div class="d-print-none mt-4">
            <div class="text-right">
              <form id='form1' action="${ventasStore}" method="POST">
              </form>
            </div>
          </div>   
          <!-- end buttons -->
        </div> <!-- end card-body-->
      </div> <!-- end card -->
    </div> <!-- end col-->`;
    $rowInvoice.innerHTML=templateInvoice;
    templateForm=`
    <input type="hidden" name="_token" value="${$csrf_token}">
    <input type="hidden" name="max" value="${c}"/>${inputProducto}
    <input type="hidden" name="descuentoTotal" value="${venta.descuentoTotal}"/>
    <input type="hidden" name="totalGeneral" value="${venta.totalGeneral}"/>
    <input type="hidden" name="totalFinal" value="${venta.totalFinal}"/>
    <input type="hidden" id="cod" name="cod" value=""/>
    <input type="hidden" name="id_cliente" value="${cliente.id}"/>
    <input type="hidden" name="id_sucursal" value="${JSON.parse(sucursal)[0].id}"/>
    <input type="hidden" name="id_cajero" value="${cajero.id}"/>
    <button class="btn btn-primary type="submit" onclick="imprimir();">REALIZAR VENTA</button>
    `;
    document.getElementById('form1').innerHTML=templateForm;
		qrcode=new QRCode(document.getElementById("divQr"),{
      width: 140,
      height: 140,
      correctLevel : 0,
      useSVG:true
    });
    let data=JSON.stringify({"a": "7904006306693","b":"876814","c":"1665979","d":"20080519","e":venta.totalFinal.toFixed(2),"f":"zZ7Z]xssKqkEf_6K9uH(EcV+%x+u[Cca9T%+_$kiLjT8(zr3T9b5Fx2xG-D+_EBS"
    });
    let opciones={
      headers: {
        "Content-Type": "application/json",
        "Accept": "application/json, text-plain, */*",
        "X-Requested-With": "XMLHttpRequest",
        "X-CSRF-TOKEN": $csrf_token
        },
      method: 'POST',
      credentials: "same-origin",
      body: data
    };
    unoCode(unoRoute, opciones);
  }else{
    $rowInvoice.innerHTML="";
  }
};
unoCode=(url, options={})=>{
  fetch(url, options)
  .then(res=>res.ok?res.text():Promise.reject(res))
  .then(json=>{
    document.getElementById('unoCode').innerText=json;
    document.getElementById('cod').value=json;
    qrcode.makeCode(`${suc.nit}|001|${suc.numero_autorizacion}|${t.toLocaleDateString()}|${venta.totalFinal.toFixed(2)}|${venta.totalFinal.toFixed(2)}|${json}|${cliente.num_documento}|0|0|0|${venta.descuentoTotal}`);
  })
  .catch(err=>{
    mensaje=err.statusText||"Ocurrió un error";
    console.log(`Denny hay un Error ${err.status}: ${mensaje}`);
  });
};
imprimir=()=>{
  console.log("start");
  mywindow = window.open('', 'Nueva_factura', 'height=600px,width=800px');
  mywindow.document.write('<html>');
  mywindow.document.write('<head>');
  mywindow.document.write('<title>Factura</title>');
  mywindow.document.write(`<link href="${assetGeneral}assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="light-style" />`);
  mywindow.document.write('</head>');
  mywindow.document.write('<body>');
  mywindow.document.write($rowInvoice.innerHTML);
  mywindow.document.write('</body>');
  mywindow.document.write('</html>');
  setTimeout(()=>{
    mywindow.document.close();
    mywindow.focus();
    mywindow.print();
    mywindow.close();
  },300);
}
