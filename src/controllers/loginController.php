<?php namespace App\Controllers;

use App\Models\loginModel;

class loginController  {

    public $loginModel;

    public function __construct()
    {
        $this->loginModel = new loginModel();
    }

    public function checkLogin($cedula, $telefono){
        if (!empty($cedula) && !empty($telefono) ) {
                $arrayDatos = array("cedula"=>$cedula,"telefono"=>$telefono);
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
                            session_destroy(); 
                        echo '
                            <div class="alert alert-danger text-center">
                                No se ha podido ingresar con el usuario <strong>'.$arrayDatos['cedula'].' </strong>, reintente.
                        
                            </div>
                        ';
                    }
        }
    }

    public function getAllDataBaseList(){
        $opciones = $this->loginModel->getAllDataBaseList();

        foreach ($opciones as $opcion) {
            $codigo = $opcion['NameDatabase'];
            $texto = $opcion['Nombre'];
            echo "<option value='$codigo'>$texto</option>";
    
        }
    }

    public function getUserByEmail($email){
        return $this->loginModel->getUserByEmail($email);
    }

    public function loginfacebook() {
        
        $config = [
            'callback' => 'http://localhost/ganaconramowssp/?action=loginfacebook', // or Hybridauth\HttpClient\Util::getCurrentUrl()
            'keys' => ['id' => '240255507681030', 'secret' => '2720cc87b649274edb2e0459075bf3ca'], // Your application credentials
        ];

        $login = new \Hybridauth\Provider\Facebook($config);
        $login->authenticate();
        $userProfile = $login->getUserProfile();
        $login->disconnect();
        return $userProfile;
    }

    public function logingoogle() {
        
        $config = [
            'callback' => 'http://localhost/ganaconramowssp/?action=logingoogle', // or Hybridauth\HttpClient\Util::getCurrentUrl()
            'keys' => ['id' => '9864280064-d278tg8ih4tpcbjglc0fcpa8nvt19avf.apps.googleusercontent.com', 'secret' => 'xHsSBRUnNVbS83oAaMVNt3NZ'], // Your application credentials
        ];

        $login = new \Hybridauth\Provider\Google($config);
        $login->authenticate();
        $userProfile = $login->getUserProfile();
        $login->disconnect();
        return $userProfile;
    }
    
}
