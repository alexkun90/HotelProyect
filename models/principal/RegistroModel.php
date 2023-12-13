<?php

class RegistrolModel extends Query{
    
    public function __construct(){
        parent::__construct();
    }
    public function getDisponible($nombre, $correo, $usuario, $hash, $rol){
       $sql = "INSERT INTO usuarios (nombre,correo,usuario,clave, rol) VALUES (?,?,?,?,?)";
        return $this->insert($sql, [$nombre, $correo, $usuario, $hash, $rol]); ;

    }
}

?>