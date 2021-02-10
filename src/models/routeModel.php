<?php namespace App\Models;

class routeModel {
    
    public function actionCatcherModel($action){
        switch ($action) {
            case 'bienvenidos':
                $contenido = "views/modulos/bienvenidosView.php";
                break;
            
            case 'register':
                $contenido = "views/modulos/registerView.php";
                break;

            case 'comoparticipar':
                $contenido = "views/modulos/comoparticiparView.php";
                break;

            case 'premios':
                $contenido = "views/modulos/premiosView.php";
                break;

            case 'terminoscondiciones':
                $contenido = "views/modulos/terminoscondicionesView.php";
                break;
                
            case 'dashboard':
                $contenido = "views/modulos/dashboardView.php";
                break;    

            case 'puntos':
                $contenido = "views/modulos/puntosView.php";
                break;    
                
            case 'ranking':
            $contenido = "views/modulos/rankingView.php";
                break;    

            case 'login':
                $contenido = "views/modulos/loginView.php";
                break;    
         
            case 'logout':
                $contenido = "views/modulos/cerrarSesion.php";
                break; 

            // Social Logins
            case 'loginfacebook':
                $contenido = "views/modulos/facebookView.php";
                break;
            
            case 'logingoogle':
                $contenido = "views/modulos/googleView.php";
                break;
            
            default:
                $contenido = "views/modulos/bienvenidosView.php";
                break;
        }
        
       
        return $contenido;
        
    }
}
