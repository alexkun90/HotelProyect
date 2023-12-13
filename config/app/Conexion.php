<?php
require_once __DIR__ . '/../config.php';

class Conexion {
    private $conect;

    public function conectar() {
        try {
            $cn = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE . ";charset=utf8", USER, PASS);
            $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $cn;
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
}
?>



