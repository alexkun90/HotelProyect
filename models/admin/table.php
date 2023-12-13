<?php
require('D:\Progra\MySQL\htdocs\HotelProyect\config\app\Conexion.php');
//require('./config/app/Conexion.php');

class TableModel extends Conexion
{
    protected static $cnx;
    private $id;
    private $correo;
    private $nombre;
    private $direccion;
    private $fecha;
    private $telefono;

    public function __construct()
    {
        // No llamamos al constructor de la clase padre aquí
    }

    // Métodos getter y setter para cada propiedad

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getEmail()
    {
        return $this->correo;
    }

    public function setEmail($correo)
    {
        $this->correo = $correo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public static function getConexion()
    {
        self::$cnx = new Conexion();
        self::$cnx = self::$cnx->conectar();
    }

    /*
    public function listarTodosDb()
    {
        try {
            $this->getConexion();
            $query = "SELECT id, nombre, correo, telefono, direccion, fecha FROM reservas.usuarios";
            $resultados = array();

            $stmt = $this->conectar()->prepare($query);
            $stmt->execute();

            while ($encontrado = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $resultados[] = $encontrado;
            }

            return $resultados;
        } catch (PDOException $Exception) {
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            // En caso de error, puedes devolver un array con el mensaje de error
            return ["error" => $error];
        }
    }
    */

    public static function mostrarTodos()
    {
        $query = "SELECT * FROM reservas.usuarios";
        try {
            self::getConexion();
            $resultado = self::$cnx->query($query); // Cambié prepare y execute por query
            return $resultado->fetchAll(PDO::FETCH_ASSOC); // Cambié el modo de recuperación de datos
        } catch (PDOException $Exception) {
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return $error;
        }
    }
}
