$(document).ready(function(){
    $("#dataTable").DataTable();
    $('#dataTable2').DataTable({
        "order": [[ 3, "desc" ]]
    });

});