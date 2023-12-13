<?php 

    class Fullcalendar extends Controller{
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $data['title'] = 'Fullcalendar';
            $this->views->getView('principal/eventos/FullCalendar', $data);
        }
    }
?>