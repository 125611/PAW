<?php

  class BajaBD implements IBajaBD{ 
     
     
     public function delete_Cliente($id){
         
         
         
         if (is_int($id)) {
             $sql = "DELETE FROM `MiViajante`.`Cliente` WHERE `Cliente`.`ID` = $id" ;
                    }
           
           
           return $sql;
     }
     
     public function delete_Pedido($nro){
         
         if (is_int($nro)) {
            $sql = "DELETE FROM `MiViajante`.`Pedido` WHERE `Pedido`.`nro` = $nro" ;
         }
           return $sql;  
     }
     
      public function delete_Producto($cod){
         
          if (is_int($cod)) {
            $sql = "DELETE FROM `MiViajante`.`Producto` WHERE `Producto`.`coodigo_producto` = $cod" ;
          }
           return $sql;  
     }
     
     
 }