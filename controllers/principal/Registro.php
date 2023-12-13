<?php 

    class Registro extends Controller{
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $data['title'] = 'Registro';
            $data['subtitle'] = 'Registrarse';
            $this->views->getView('principal/login', $data);
        }
        public function crear (){
            $nombre= strClean ($_POST['nombre']);
            $correo= strClean($_POST['correo']);
            $usuario = strClean ($_POST['usuario']);
            $clave = strClean($_POST['clave']);
            $hash = password_hash($clave, PASSWORD_DEFAULT);
            $rol = 2;
            $this->model->registrarse( $nombre, $correo, $usuario, $hash, $rol);

        }
    }
?>