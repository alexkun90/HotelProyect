<?php 

    class Usuarios extends Controller{
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $data['title'] = 'Usuarios';
            $this->views->getView('admin/usuarios/index', $data);
        }
    }
?>