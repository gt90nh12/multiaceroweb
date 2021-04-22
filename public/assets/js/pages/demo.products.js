function usarDataTable(){

  $("#products-datatable").DataTable({
    language:{
      paginate:{
        previous:"<i class='mdi mdi-chevron-left'>",
        next:"<i class='mdi mdi-chevron-right'>"},
        info:"Mostrar productos _START_ a _END_ de   _TOTAL_",
        lengthMenu:'Mostrar <select class=\'custom-select custom-select-sm ml-1 mr-1\'><option value="5">5</option><option value="10">10</option><option value="20">20</option><option value="-1">All</option></select> Productos'},
        pageLength:5,
        columns:[
          {
            orderable:!1,
            targets:0,
            render:function(e,o,t,l){return"display"===o&&(e='<div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input dt-checkboxes"><label class="custom-control-label">&nbsp;</label></div>'),e},
            checkboxes:{
              selectRow:!0,
              selectAllRender:'<div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input dt-checkboxes"><label class="custom-control-label">&nbsp;</label></div>'}},
              {orderable:!0},
              {orderable:!0},
              {orderable:!0},
              {orderable:!0},
              {orderable:!0},
              {orderable:!0},
              {orderable:!1}
            ],
          
            drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")
          }
        }
        )
      };
      usarDataTable();