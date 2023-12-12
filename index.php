<?php 
    require_once 'config/config.php';

   
    //Verifixcar si existe la ruta admin
    $isAdmin = strpos($_SERVER['REQUEST_URI'], '/' . ADMIN) !== false;
    //Comprobar si existe get para crear urls amigables
    $ruta = empty($_GET['url']) ? 'principal/index' : $_GET['url'];
    //Crear un array apartir de la ruta
    $array = explode('/', $ruta);
    //Validar si nos encontramos en la ruta admin
    if ($isAdmin && (count($array) == 1 || (count($array) == 2 && empty ($array[1]))) && $array[0] == ADMIN) {
       //Crear Controlador
        $controller = 'Admin';
        $metodo = 'login';
    } else {
        $indiceUrl = ($isAdmin) ? 1 : 0;
        $controller = ucfirst($array[$indiceUrl]);
        $metodo = 'index';
    }  
    //Validar metodos
    $metodoIndice = ($isAdmin) ? 2 : 1;
    if (!empty($array[$metodoIndice]) && $array[$metodoIndice] != '') {
        $metodo = $array[$metodoIndice];
    }
    //Validar parametros
    $parametro = '';
    $parametroIndice = ($isAdmin) ? 3 : 2;
    if (!empty($array[$parametroIndice]) && $array[$parametroIndice] != '') {
        for ($i = $parametroIndice; $i < count($array); $i++) { 
            $parametro .= $array[$i] . ',';
        }
        $parametro = trim($parametro, ',');       
    }
    //LLamar Autoload
    require_once 'config/app/Autoload.php';
    //Validar directorio de controladores
    $dirControllers = ($isAdmin) ? 'controllers/admin/' . $controller . '.php' : 'controllers/principal/' . $controller . '.php';
    if (file_exists($dirControllers)) {
        require_once $dirControllers;
        $controller = new $controller();
        if (method_exists($controller, $metodo)) {
            $controller->$metodo($parametro);
        } else {
            echo 'metodo no existe';
        }
    } else {
        echo 'controlador no existe';
    }
    
?>