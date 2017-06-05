<?
  session_start();
  unset($_SESSION["nombreEmpresa"]); 
  unset($_SESSION["telefonoEmpresa"]);
  unset($_SESSION["mailEmpresa"]);
  session_destroy();
  header('location: ../main.php?p=menu');
  exit;
?>