<?php

require_once 'configs/ConectarDB.php';
require_once 'configs/Query.php';

require_once 'modelo/Producto.php';
require_once 'modelo/Pedido.php';

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
    
    
    // listar productos por rubro
    //$this -> tabla  $this-> objeto (rubro)     
  public function listar(){
      
      $items=array();
      
      //PROBAR ESTO!!!!! ojo los cases
      
    
      
       switch ($this->tabla) {
           
           
           
                    case "productos":
                        
                                if(empty($this->objeto)){//si rubro es vacio traigo todos los productos
                                    $sql = $this->getBD->get_productos();
                                }else{
                                    $sql = $this->getBD->get_productos_por_rubro($this->objeto);
                                }

                                $rta = $this->query($sql);

                               
                                foreach ($rta as $row){
                                    $producto = new Producto();
                                    $producto->setTitulo($row['titulo']);
                                    $producto->setDescripcion($row['descripcion']) ;
                                    $producto->setRutaImagen($row['rutaImagen']);
                                    $producto->setPrecio_unitario($row['precio_unitario']);  
                                    $producto->setCodigo_producto($row['codigo_producto']);  

                                    $items[]=$producto;
                                    }                  
                               break;
                    
                               
                               
                               
                     case "pedidos":
                                
                         
                                $sql = $this->getBD->get_pedidos_por_id($this->objeto);                             
                         
                                $rta = $this->query($sql);                           
                                
                                
                                foreach ($rta as $row) {
                                    
                                     $pedido = new Pedido();
                                     
                                     $pedido->setNro($row['nro']);
                                     $pedido->setId_cliente($row['id_cliente']);
                                     $pedido->setFecha_de_inicio($row['fecha_de_inicio']);
                                     $pedido->setFecha_de_entrega($row['fecha_de_entrega']);
                                     $pedido->setEstado_pedido($row['estado_pedido']);
                                     $pedido->setPrecio_total($row['precio_total']);
                                     
                                     
                                    $items[]=$pedido;
                                    
                                  
                                }
                                
                               break;
                }
                   
               
                
            return $items;
 
       }
       
   
       
       

    
    
    
    public function get(){
        
        $data = explode("/", $this->objeto);
        $user = $data[0]; 
        $password = $data[1]; 
        $pass = md5($password);
        
          switch ($this->tabla) {
                    case "cliente":
        
                     $sql = $this->getBD->get_cliente($user,$pass);
                     $rta = $this->query($sql);
                     
                     $cliente = new Cliente();
                     foreach ($rta as $row) {
                        $cliente->setId($row['ID']);
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
     
    public function verificar(){
        
        $data = explode("/", $this->objeto);
        $user = $data[0]; 
        $password = $data[1]; 
        
        $pass = md5($password);
        
        $b = false;
         
             switch ($this->tabla) {
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

    
     public function registrar(){
         
           
         $b = false;
            
         
             switch ($this->tabla) {
                    case "cliente":
                     
                     $sql = $this->altaBD->insert_Cliente($this->objeto);
                            
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
