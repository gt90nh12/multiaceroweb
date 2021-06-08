const rutaMiniclienteIndex = document.getElementById('rutaMiniClienteIndex').value;
tablaClientes=(find='')=>{
  fetch(rutaMiniclienteIndex)
  .then(res=>res.ok?res.json():Promise.reject(res))
  .then(json=>{
    json.forEach(el=>{
      el.radio=`<input type="radio" name="clienteRatio" onclick="clienteRatio(event);" data-json='${JSON.stringify(el)}' value="${el.id}"/>`;
      el.created_at=new Date(el.created_at).toLocaleString();
    });
    return json;
  })
  .then(data=>{
    jQuery.noConflict();
    table=$('#tablaClientes').DataTable().destroy();
    table=$('#tablaClientes').DataTable({
      "language": {
        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    `<div style="color:#f9c851">No Exixte.</div><br><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#crearCliente-modal" onClick="clienteCreate();" ><i class="uil-user font-14"></i> Desea Crear un Nuevo Cliente</button>`,
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
          "sFirst":    "Primero",
          "sLast":     "Último",
          "sNext":     "Siguiente",
          "sPrevious": "Anterior"
        },
        "paginate":{
        "previous":"<i class='mdi mdi-chevron-left'>",
        "next":"<i class='mdi mdi-chevron-right'>"
        },
        "oAria": {
          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
      },
      paging: true,
      searching:true,
      search: {
        "search": find
      },
      order: [0, "desc"],
      data,
      "columns":[
        {"data": "id"},
        {"data": "created_at"},
        {"data": "nombre_razon_social"},
        {"data": "num_documento"},
        {"data": "tipo_documento"},
        {"data": "radio"},
      ]
    });
  })
  .catch(err=>{
    console.log(err);
    mensaje=err.statusText||"Ocurrió un error";
    console.log(`Error ${err.status}: ${mensaje}`);
  });
};
tablaClientes();
const $nombreRazonSocial=document.getElementById('nombre_razon_social');
const $tipoDocumento=document.getElementById('tipo_documento');
const $numeroDocumento=document.getElementById('numero_documento');
const $formCrearCliente=document.getElementById('formCrearCliente');
$formCrearCliente.addEventListener('submit',e=>{
  e.preventDefault();
});
clienteCreate=()=>{
  $nombreRazonSocial.value="";
  $tipoDocumento.value="";
  $formCrearCliente.reset();
  document.getElementById('botonSubmit').removeAttribute('data-dismiss','modal');
  $numeroDocumento.value = table.search(this.value);
  valorFinalRazonSocial="";
  valorFinalTipoDocumento="";
  valorFinalnumeroDocumento="";
  validarNumeroDocumento=(datoEvalue)=>{
    let cont=0;
    Array.from(datoEvalue,(el,i)=>{
      if(!isNaN(parseInt(el))){
        cont++;
      }
      if(cont===i+1&&datoEvalue.length>=5&&datoEvalue.length<=10){
        valorFinalnumeroDocumento = datoEvalue;
        isOk=true;
      }else{
        valorFinalnumeroDocumento="";
        isOk=false;
      }
    });
    todoOk();
    return isOk;
  };
  validarNumeroDocumento($numeroDocumento.value);
  $numeroDocumento.addEventListener('keypress',e=>{
    Array.from(e.target.value+e.key,el=>{
      if(isNaN(parseInt(el))){
        e.preventDefault();
      }
    });
  });
  $numeroDocumento.addEventListener('input',e=>{
    validarNumeroDocumento(e.target.value);
  });
  $nombreRazonSocial.addEventListener('keypress',e=>{
    if((e.key).charCodeAt(0)>=48&&(e.key).charCodeAt(0)<=57){
      e.preventDefault();
    }
  });
  $nombreRazonSocial.addEventListener('input',e=>{
    valorFinalRazonSocial=e.target.value;
    todoOk();
  });
  $tipoDocumento.addEventListener('input',e=>{
    valorFinalTipoDocumento=e.target.value;
    todoOk();
  });
};
todoOk=()=>{
  if(valorFinalRazonSocial&&valorFinalTipoDocumento&&valorFinalnumeroDocumento){
    document.getElementById('botonSubmit').setAttribute('data-dismiss','modal');
    document.getElementById('botonSubmit').setAttribute('onclick','clienteStore();');
  }else{
    document.getElementById('botonSubmit').removeAttribute('data-dismiss','modal');
    document.getElementById('botonSubmit').removeAttribute('onclick','clienteStore();');
  }
}
const $rutaMiniClienteStore=document.getElementById('rutaMiniClienteStore').value;
clienteStore=()=>{
  let datosCliente=JSON.stringify({"nombre_razon_social": valorFinalRazonSocial,"tipo_documento": valorFinalTipoDocumento,"num_documento":valorFinalnumeroDocumento});
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
cd($rutaMiniClienteStore, opciones);
};
cd=(url, options={})=>{
  fetch(url, options)
  .then(res=>res.ok?res.json():Promise.reject(res))
  .then(json=>{
    tablaClientes(json.num_documento.toString());
  })
  .catch(err=>{
    console.log("error", err);
    mensaje=err.statusText||"Ocurrió un error";
    console.log(`Error ${err.status}: ${mensaje}`);
  });
};
let cliente={};
clienteRatio=(e)=>{
  cliente=JSON.parse(e.target.dataset.json),
  templateDivCliente=`
  <p><strong>Razon Social :</strong> <span class="ml-2">${cliente.nombre_razon_social}</span></p>
  <p><strong>Tipo Documento :</strong> <span class="ml-2">${cliente.tipo_documento}</span></p>
  <p><strong>N° Documento :</strong> <span class="ml-2">${cliente.num_documento}</span></p>
  `;
  document.getElementById('divCliente').innerHTML=templateDivCliente;
  renderInvoice();
}
