/*
$(document).ready(function () {
    let tabla = $('#example').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        dom: 'Bfrtip',
        buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
        ajax: {
            url: 'controllers/admin/TableController.php',
            type: 'GET',
            dataType: 'json',
            dataSrc: 'data',
            data: { op: 'listar_para_tabla' },
            error: function (xhr, status, error) {
                console.error('Error al cargar datos:', error);
            }
        },
        destroy: true,
        pageLength: 5,
        searching: false,
        paging: false,
        columns: [
            { data: 'id', title: 'ID' },
            { data: 'nombre', title: 'Nombre' },
            { data: 'correo', title: 'Correo' },
            { data: 'telefono', title: 'Telefono' },
            { data: 'direccion', title: 'Direccion' },
            { data: 'fecha', title: 'Fecha' }
        ]
    });

    function listarUsuariosTodos() {
        tabla.ajax.reload();
    }

    listarUsuariosTodos();
});
*/
new DataTable('#myTable');
