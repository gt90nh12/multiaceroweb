const $rowInvoice=document.getElementById('invoice');
const unoRoute=document.getElementById('unoRoute').value;
t=new Date();
const renderInvoice=()=>{
  if(venta.length!==0&&Object.entries(cliente).length!==0){
    let templateTr="", empty1="";
    venta.forEach(el=>{
      templateTr=`
      <tr>
        <td>${el.id}</td>
        <td>
          <b>${el.nombre}</b> <br/>
          ${el.producto}, ${el.color}
        </td>
        <td>${el.precio.toFixed(2)} Bs.</td>
        <td>${el.multiplicador}</td>
        <td class="text-right">${el.total.toFixed(2)} Bs.</td>
      </tr>`;
      templateTr=empty1+templateTr;
      empty1=templateTr;
    });
    let templateInvoice=`
    <div class="col-12">
      <div class="card">
        <div class="card-body">
            <!-- Invoice Detail-->
            <div class="row">
              <div class="col-sm-6">
                <div class="float-left mt-3">
                  <img src="${assetGeneral}assets/images/logo-light.png" alt="" height="22px">
                  <h4>MULTIACERO</h4>
                  <h5>CASA MATRIZ</h5>
                  <address>
                    La Paz - Bolivia<br>
                    Zona 16 de Julio<br>
                    Calle Juan Pablo II, #123<br>
                    <abbr title="Telefono"></abbr> (512) 78860849
                  </address>
                </div>
              </div><!-- end col -->
              <div class="col-sm-4 offset-sm-2">
                <div class="mt-3 float-sm-right">
                  <p class="font-12"><strong>NIT:</strong><span class="float-right">456489012</span></p>
                  <p class="font-12"><strong>N° FACTURA:</strong><span class="float-right">100</span></p>
                  <p class="font-12"><strong>N° AUTORIZACION:</strong><span class="float-right">434401000041743</span></p>
                  <p class="font-18"><strong>ORIGINAL</strong></p>
                  <p class="font-12"><strong></strong><span class="float-right">Venta al por mayor de materiales de ferreteria, equipo y materiales de fontaneria y calefacción.</span></p>
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
              <a href="javascript: void(0);" onclick="imprimir();" class="btn btn-primary"><i class="mdi mdi-printer"></i> Imprimir</a>
              <a href="javascript: void(0);" class="btn btn-info">Realizar Venta</a>
            </div>
          </div>   
          <!-- end buttons -->
        </div> <!-- end card-body-->
      </div> <!-- end card -->
    </div> <!-- end col-->`;
    $rowInvoice.innerHTML=templateInvoice;
		qrcode=new QRCode(document.getElementById("divQr"), {
      text: `456489012|100|434401000041743|${t.toLocaleDateString()}|${venta.totalFinal.toFixed(2)}|${venta.totalFinal.toFixed(2)}|17-89-80-C7-3C|${cliente.num_documento}|0|0|0|${venta.descuentoTotal}`,
      width: 140,
      height: 140,
      correctLevel : 0,
      useSVG:true
    });
    let datosCliente=JSON.stringify({
      "a": "7904006306693",
      "b":"876814",
      "c":"1665979",
      "d":"20080519",
      "e":venta.totalFinal.toFixed(2),
      "f":"zZ7Z]xssKqkEf_6K9uH(EcV+%x+u[Cca9T%+_$kiLjT8(zr3T9b5Fx2xG-D+_EBS"
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
      body: datosCliente
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
  })
  .catch(err=>{
    mensaje=err.statusText||"Ocurrió un error";
    console.log(`Denny hay un Error ${err.status}: ${mensaje}`);
  });
};
imprimir=()=>{
  console.log("hola cabrito");
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