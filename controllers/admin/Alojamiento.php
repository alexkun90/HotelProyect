<?php 

    class Alojamiento extends Controller{
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $data['title'] = 'Alojamiento';
            $this->views->getView('admin/alojamiento/index', $data);
        }
    }
?>