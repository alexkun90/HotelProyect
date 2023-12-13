<?php
require('D:\Progra\MySQL\htdocs\HotelProyect\models\admin\table.php');
//require('./models/admin/table.php');

class TableController
{
    function listarUsuariosParaTabla() {
        try {
            $tableModel = new TableModel();
            $usuarios = $tableModel->mostrarTodos();
    
            $data = array("data" => $usuarios);  // Asegúrate de envolver los datos en un array con la clave "data"
    
            echo json_encode($data);
        } catch (Exception $e) {
            echo json_encode(["error" => $e->getMessage()]);
        }
    }
}

$tableController = new TableController();

// Modificación: Asegúrate de verificar si se envió el parámetro "op"
if (isset($_GET["op"])) {
    switch ($_GET["op"]) {
        case 'listar_para_tabla':
            $tableController->listarUsuariosParaTabla();
            break;
        // Puedes agregar más casos según sea necesario
    }
}
