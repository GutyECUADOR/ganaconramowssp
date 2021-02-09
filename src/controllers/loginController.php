<?php namespace App\Controllers;

use App\Models\loginModel;

class loginController  {

    public $loginModel;

    public function __construct()
    {
        $this->loginModel = new loginModel();
    }

    public function actionCatcherController(){
        if (isset($_POST['cedula']) && isset($_POST['telefono']) ) {
                $arrayDatos = array("cedula"=>$_POST['cedula'],"telefono"=>$_POST['telefono']);
                $arrayResultados = $this->loginModel->validaIngreso($arrayDatos);
              
                    if (!empty($arrayResultados)) {
                         if(!isset($_SESSION)) 
                            { 
                                session_start(); 
                            } 
                        $_SESSION["usuario_email".APP_UNIQUE_KEY] =  trim($arrayResultados['email']);
                        $_SESSION["usuario_nombres".APP_UNIQUE_KEY] =  trim($arrayResultados['nombres']);
                        $_SESSION["usuario_cedula".APP_UNIQUE_KEY] =  trim($arrayResultados['cedula']);
                        $_SESSION["usuario_telefono".APP_UNIQUE_KEY] =  trim($arrayResultados['telefono']);
                        $_SESSION["usuario_rol".APP_UNIQUE_KEY] =  trim($arrayResultados['rol']);
                        header("Location: index.php?&action=dashboard");
                           
                    }else{
                        
                        echo '
                            <div class="alert alert-danger text-center">
                                No se ha podido ingresar con el usuario <strong>'.$arrayDatos['cedula'].' </strong>, reintente.
                        
                            </div>
                        ';
                    }
        }
    }

   
   
    /*Crea elementos HTML opcion button para ser listados en el select*/
    public function getAllDataBaseList(){
        $opciones = $this->loginModel->getAllDataBaseList();

        foreach ($opciones as $opcion) {
            $codigo = $opcion['NameDatabase'];
            $texto = $opcion['Nombre'];
            echo "<option value='$codigo'>$texto</option>";
    
        }
    }
}
