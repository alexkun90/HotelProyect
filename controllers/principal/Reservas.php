<?php 

    class Reservas extends Controller{
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $data['title'] = 'Reservas';
            $this->views->getView('principal/habitacion/reservas', $data);
        }
    }
?>