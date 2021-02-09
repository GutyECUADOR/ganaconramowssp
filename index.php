<?php
namespace App\Controllers;
;
   
    date_default_timezone_set('America/Lima');
    @ob_start();
    session_start();

    require_once './config/global.php';
    require_once './src/models/conexion.php';
    require_once './src/controllers/routeController.php';
    require_once './src/models/routeModel.php';
    require_once './src/controllers/loginController.php';
    require_once './src/models/loginModel.php';
    require_once './src/models/ajaxModel.php';   
    
    $app = new routeController();
    $app->loadtemplate();
   

    