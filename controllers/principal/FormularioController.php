<?php

class FormularioController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function procesarFormulario() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $correo = $_POST["correo"];
            $fecha = $_POST["fecha"];

            // Intenta insertar la reserva en la base de datos
            if ($this->model->guardarReserva($nombre, $apellido, $correo, $fecha)) {
                echo "Registro exitoso";
            } else {
                echo "Hubo un error al procesar el formulario.";
            }
        }
    }
}
?>

