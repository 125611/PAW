<?php



class ConectarDB{
    public $driver;
    public $host, $user, $pass, $database, $charset;

     public function __construct() {   
         
                       $db_cfg = require 'ParametrosDB.php';

                       $this->driver=$db_cfg["driver"];
                       $this->host=$db_cfg["host"];
                       $this->user=$db_cfg["user"];
                       $this->pass=$db_cfg["pass"];
                       $this->database=$db_cfg["database"];
                       $this->charset=$db_cfg["charset"];   
                       
                                    }
    

    
    public function start(){
        
        
    try{
        
        $datos = $this->driver . ':host=' . $this->host . ';dbname=' . $this->database;
        
        $conexion = new PDO($datos , $this->user, $this->pass);
         
        
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
         
         
        }catch(PDOException $e){
                                echo "ERROR: " . $e->getMessage();
                                $conexion = null ;
                                }
                                   
        
         return $conexion;
    }
    
    
    
    
    
    
}