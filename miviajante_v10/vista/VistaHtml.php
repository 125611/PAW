<?php   //MI VISTA HTML
    require_once('vista/iVista.php');
    require_once("vista/smarty-3.1.30/libs/Smarty.class.php");
 
    class VistaHtml implements IVista{
        
        private $misVariables;
        private $miSmarty;
            
        public function __construct (){
            $this->miSmarty = new Smarty();
            $this->miSmarty->template_dir = 'vista/templates';
            $this->miSmarty->config_dir = 'vista/config';
            $this->miSmarty->cache_dir = 'vista/cache';
            $this->miSmarty->compile_dir = 'vista/templates_c';
            //pasamos el path base a smarty para que cargue bien los css y js
            $this->miSmarty->assign( 'path_base', $this->getBaseUrl() );
        }
        
        public function setVariables(array $arrayVariables){
            $this->misVariables=array();
            $this->misVariables=$arrayVariables;
        } 
        
        public function renderizar(){
            $v=$this->misVariables;
            //echo "renderiznado...</br>";
            foreach($v as $clave => $valor) {
                //pasamos las variables de la vista a smarty
                $this->miSmarty->assign($clave,$valor);
            }
            //mostramos el template correspondiente
            if(empty($v['mostrar']))$v['mostrar']='menu';
            $this->miSmarty->display($v['mostrar'].'.tpl');
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