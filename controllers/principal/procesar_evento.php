<?php
include_once 'Conexion.php';
include_once 'EventoModel.php';
include_once 'EventoController.php';

// Crear instancia de conexión
$conexion = new Conexion();

// Crear instancia del modelo y del controlador
$modelo = new EventoModel($conexion);
$controlador = new EventoController($modelo);

// Verificar si se recibieron datos del formulario
if ($_POST) {
    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $allDay = $_POST['allDay'];

    // Procesar el evento y obtener el resultado
    $resultado = $controlador->procesarEvento($title, $start, $end, $allDay);

    // Imprimir el resultado
    if ($resultado) {
        echo "Evento registrado con éxito.";
    } else {
        echo "Error al registrar el evento.";
    }
} else {
    echo "No se recibieron datos del formulario.";
}

// Cerrar conexión
$conexion->cerrarConexion();
?>