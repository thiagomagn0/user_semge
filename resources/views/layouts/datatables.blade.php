<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.5/css/autoFill.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/datatables.min.css"/>
<link rel="stylesheet" href="http://cdn.datatables.net/responsive/1.0.2/css/dataTables.responsive.css"/>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/datatables.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/responsive/1.0.2/js/dataTables.responsive.js"></script>


<style>
.dt-button {
  background-color:#212529 !important; 
  border-color:white !important;
  color:white !important;
}
</style>


<script>

//-------USERS
$(document).ready(function(){
var table = $('#users-table').DataTable({
dom: 'Bfrtip',
"language": {
"sProcessing":    "Procesando...",
"sLengthMenu":    "Mostrar _MENU_ registros",
"sZeroRecords":   "Nenhum registro encontrado",
"sEmptyTable":    "Nenhum registro encontrado",
"sInfo":          "Total  de  _TOTAL_ registros",
"sInfoEmpty":     "Mostrando total de 0 registros",
"sInfoFiltered":  "(filtrado total de _MAX_ registros)",
"sInfoPostFix":   "",
"sSearch":        "Buscar:",
"sUrl":           "",
"sInfoThousands":  ",",
"sLoadingRecords": "Carregando...",
"oPaginate": {
"sFirst":    "Primeiro",
"sLast":    "Último",
"sNext":    "Seguinte",
"sPrevious": "Anterior"
},
}
});
});



</script>
 

