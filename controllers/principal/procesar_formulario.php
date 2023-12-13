<?php

require_once 'config/config.php';
require_once 'controllers/FormularioController.php';

$formularioController = new FormularioController();
$formularioController->procesarFormulario();
?>