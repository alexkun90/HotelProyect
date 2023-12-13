<?php

class ReservaModel extends Query {

    public function __construct() {
        parent::__construct();
    }

    public function guardarReserva($nombre, $apellido, $correo, $fecha) {
        $sql = "INSERT INTO tabla_reservas (nombre, apellido, correo, fecha) VALUES (?, ?, ?, ?)";
        $parametros = array($nombre, $apellido, $correo, $fecha);

        // Llama al método de la clase Query
        $resultado = $this->insert($sql, $parametros);

        return $resultado;
    }
}
?>