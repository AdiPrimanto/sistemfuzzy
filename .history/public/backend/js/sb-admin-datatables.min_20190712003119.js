$(document).ready(function(){
    $("#dataTable").DataTable({
        "order": [[ 6, "desc" ]]
    });
    $('#dataTable2').DataTable({
        "order": [[ 5, "desc" ]]
    });

});