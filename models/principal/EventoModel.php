<?php

class EventoModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function obtenerEventos() {
        // Obtener eventos desde la base de datos
        $sql = "SELECT * FROM eventos";
        $result = $this->conexion->query($sql);
        
        $eventos = [];
        while ($row = $result->fetch_assoc()) {
            $eventos[] = $row;
        }

        return $eventos;
    }

    public function insertarEvento($title, $start, $end, $allDay) {
        // Insertar el evento en la base de datos
        $sql = "INSERT INTO eventos (title, start, end, allDay) VALUES ('$title', '$start', '$end', '$allDay')";
        return $this->conexion->query($sql);
    }
}
?>
