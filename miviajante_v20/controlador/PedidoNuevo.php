<?php
require_once 'controlador/Controlador.php';
require_once 'modelo/Pedido.php';
require_once 'modelo/Descripcion.php';


class PedidoNuevo extends Controlador{
        
    public function __construct(){
        parent::__construct();

    }
    
    public function defaultAction(){$this->mostrar($REQ);}
    
    public function mostrar($REQ){
       // $this->ponerDatosDeUsuarioEnVista(); 
        $this->setVariableVista('mostrar', 'pedido_nuevo');
    }
    
    public function nuevo($REQ){
        $fecha = getdate();
        $fechaInicio = $fecha['mday'].'-'.$fecha['mon'].'-'.$fecha['year'];
        $pedido = new Pedido();
        $pedido->setId_cliente($_SESSION['id']);
        $pedido->setFecha_de_inicio($fechaInicio);
        $descripciones = array();
        
        foreach ($_COOKIE as $clave => $valor){
            if ((substr_compare($clave , 'IDP' , 0, 2, false)) == 0){
                $descripcion = new Descripcion();
                $descripcion->setCodigo_producto(substr($clave, 3));
                $descripcion->setCantidad($valor);
                array_push($descripciones, $descripcion);
                setcookie($clave,0, time() + (86400 * 30), "/");
            }   
        }
        
        $tarea = new AdministradorModelo();
        $rta = $tarea->accion('registrar', 'pedido', $pedido);
        
        if($rta){
            $this->setVariableVista('mensaje', 'El pedido ha sido registrado'); 
        }else{
            $this->setVariableVista('mensaje', 'El pedido no se pudo registrar, intentelo mas tarde'); 
        }
        
        $this->setVariableVista('alerta', '');
        $this->setVariableVista('mostrar', 'pedido'); 
        
    }

}
?>