<?php


require_once 'configs/ConectarDB.php';
require_once 'configs/Query.php';
require_once 'AltaBD.php';
require_once 'BajaBD.php';
require_once 'GetBD.php';

class AdministradorBD{
    
     private $conexion;
     private $tabla;
     private $objeto;
     private $altaBD;
     private $bajaBD;
     private $getBD;
     
     public function __construct($tabla, $objeto) {
         
        $this->conexion = (new ConectarDB())->start();
 
        $this->tabla = $tabla;
        $this->objeto = $objeto;
        
        $this->altaBD = new AltaBD();
        $this->bajaBD = new BajaBD();
        $this->getBD = new GetBD();
        
    }
    
    public function get($tabla,$objeto){
        
        $data = explode("/", $objeto);
        $user = $data[0]; 
        $pass = $data[1]; 
        
          switch ($tabla) {
                    case "cliente":
        
                     $sql = $this->getBD->get_cliente($user,$pass);
                     $rta = $this->query($sql);
                     
                     $cliente = new Cliente();
                     
                     foreach ($rta as $row) {
                        $cliente->setNombre_cliente($row['nombre_cliente']);
                        $cliente->setApellido_cliente($row['apellido_cliente']);
                        $cliente->setCorreo($row['correo_electronico']);
                        $cliente->setDireccion($row['direccion']);
                        $cliente->setTelefono($row['telefono']);
                         
                     }
                     
                     return $cliente ;  
                    break;
            }
    }   
     
    public function verificar($tabla,$objeto){
        
        $data = explode("/", $objeto);
        $user = $data[0]; 
        $pass = $data[1]; 
        
        
        $b = false;
         
             switch ($tabla) {
                    case "cliente":
                        
                        
                     $sql = $this->getBD->get_clienteAndPassword($user, $pass);
                     
                        //si fue vacio, la password fue mayor a 8 
                      if(empty($sql)){                      
                       break;   
                      }
                      
                     $rta = $this->query($sql);
                     
                     
                     foreach ($rta as $row) {
                         
                         if (($row['correo_electronico'] == $user) and ($row['password'] == $pass)) {                        
 
                            $b = true;  
                         }
                         
                     }
                    
                    
                     
                     break;
         
                  }
       
       return $b ; 
        
        
        
    }

    
     public function registrar($tabla,$objeto){
         
           
         $b = false;
            
         
             switch ($tabla) {
                    case "cliente":
                     
                     $sql = $this->altaBD->insert_Cliente($objeto);
                            
                     $rta = $this->query($sql);
                     
                     //validar la respuesta de la query para devolver algo
                     //try-catch ????
                     
                     $b = true;
                    
                     
                     break;
         
                            }
       
       return $b ; 
     }
    
     public function query($sql){
    
            $bd = new query(($this->conexion), $sql);
           
            
            $respuesta = $bd->prepareAndExecute();
    
        return $respuesta ;
        
    } 
    
    
    
    
    
    
    
}
