<?php 

    class ReservasE extends Controller{
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $data['title'] = 'ReservasE';
            $this->views->getView('principal/eventos/reservasE', $data);
        }
    }
?>