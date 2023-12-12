<?php 

    class Contactenos extends Controller{
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $data['title'] = 'Contactenos';
            $this->views->getView('principal/contactenos/index', $data);
        }
    }
?>