   <?php
    require_once("Director.php");
    $D=new Director();
    $D->action($_REQUEST,$_SERVER["PHP_INFO"]); 
    
?>