<?php

class EventoController {
    private $modelo;

    public function __construct(EventoModel $modelo) {
        $this->modelo = $modelo;
    }

    public function obtenerEventos() {
        // Obtener eventos desde el modelo
        return $this->modelo->obtenerEventos();
    }

    public function procesarEvento($title, $start, $end, $allDay) {
        // Asegurarse de que los datos estén limpios para evitar inyección SQL
        $title = mysqli_real_escape_string($this->modelo->getConexion(), $title);
        $start = mysqli_real_escape_string($this->modelo->getConexion(), $start);
        $end = mysqli_real_escape_string($this->modelo->getConexion(), $end);
        $allDay = mysqli_real_escape_string($this->modelo->getConexion(), $allDay);

        // Insertar el evento en la base de datos
        return $this->modelo->insertarEvento($title, $start, $end, $allDay);
    }
}
?>