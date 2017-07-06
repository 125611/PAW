<?php
require_once 'controlador/Controlador.php';
require_once 'modelo/Cliente.php';
require_once 'libs/Google/autoload.php';

class LoginGoogle extends Controlador{
        
    private $client_id;
    private $client_secret;
    private $redirect_uri;
    
    public function __construct(){
        parent::__construct();       
        if(!isset($_SESSION)){ 
            session_start(); 
        }        
        $this->client_id = '400854753613-q6e6c145g765c3tn5ffhn5tqg1sm5p0f.apps.googleusercontent.com'; 
        $this->client_secret = 'GjMR-Z6hPkMtVB1qYJs_8YBt';
        $this->redirect_uri = $this->getBaseUrl().'index.php/LoginGoogle/Respuesta';
    }
   
    public function defaultAction(){$this->mostrar($REQ);}    
        
    public function mostrar($REQ){
        if ($this->isLogueado()){
            $this->setVariableVista('mostrar','home');
        }else{
            $this->setVariableVista('mensaje', '');
            $this->setVariableVista('mostrar','login');            
        }
    }    
    
    public function iniciarSesion($REQ){
            //Realizamos la solicitud de API, enviamos datos para obtener un TOKEN
            $client = new Google_Client();
            $client->setClientId($this->client_id);
            $client->setClientSecret($this->client_secret);
            $client->setRedirectUri($this->redirect_uri);
            $client->addScope("email");
            $client->addScope("profile");
        
            //Creamos el servicio de google
            $service = new Google_Service_Oauth2($client);
            
            //quitamos cualquier token antiguo
            unset($_SESSION['access_token']);
            
            //obtenemos URL y nos dirigimos al google oauth
            $authUrl = $client->createAuthUrl();
            if (isset($authUrl)){
                header('location:'.$authUrl);
            }
    }
            
    public function Respuesta($REQ){  
        //construimos la solicitud
        $client = new Google_Client();
        $client->setClientId($this->client_id);
        $client->setClientSecret($this->client_secret);
        $client->setRedirectUri($this->redirect_uri);
        $client->addScope("email");
        $client->addScope("profile");
        
        //Creamos el servicio de google
        $service = new Google_Service_Oauth2($client);
        
        //obtenemos el codigo de regreso para acceder al TOOKEN
        if (isset($_GET['code'])) {
            $client->authenticate($_GET['code']);
            $_SESSION['access_token'] = $client->getAccessToken();
        }
        
        $user = $service->userinfo->get(); //get user info    
        
        //ver si ya tenemos registrado al cliente en la BBDD
            //$result = $mysqli->query("SELECT COUNT(google_id) as usercount FROM google_users WHERE google_id=$user->id");
	          
            //SI NO EXISTE HAY QUE CREARLO!!!!
                   
            //SINO EXISTE EN LA BD LO AGREGAMOS
                //$statement = $mysqli->prepare("INSERT INTO google_users (google_id, google_name, google_email, google_link, google_picture_link) VALUES (?,?,?,?,?)");
		      //$statement->bind_param('issss', $user->id,  $user->name, $user->email, $user->link, $user->picture);
		      //$statement->execute();
		      // echo $mysqli->error;
            
            //MOSTRAMOS DATOS USUARIO
            print_r($user);
        
        
        //AHORA CREAMOS LA SESION DEL CLIENTE
        $_SESSION['isLogueado']= 'true';                
        $_SESSION['nombreCliente']=  $user->name;
        $_SESSION['telefonoCliente']= '111111';
        $_SESSION['mailCliente']= $user->email;
        $_SESSION['id']= $user->id;
        $this->ponerDatosDeUsuarioEnVista();
        $this->setVariableVista('mostrar','home');
  
    }
    
    public function cerrarSesion(){
        unset($_SESSION["isLogueado"]);
        unset($_SESSION["nombreCliente"]); 
        unset($_SESSION["telefonoCliente"]);
        unset($_SESSION["mailCliente"]);
        session_destroy();
        //$this->ponerDatosDeUsuarioEnVista();
        $this->setVariableVista('mensaje', '');
        $this->setVariableVista('mostrar','login');
    }
    
    public function isLogueado(){
        if (empty($_SESSION)){
        return false;
        }else{
        return ($_SESSION['isLogueado'] == 'true');        
        }
        
     }
    
    private function getBaseUrl() {
            $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
            $hostName = $_SERVER['HTTP_HOST'];
            $pathInfo = split('index.php',$_SERVER['PHP_SELF'])[0];
            //  http:// + localhost + /PAW/miviajante/
            return $protocol.$hostName.$pathInfo;
        }
    
    
}
?>