<?php 

class Database extends PDO{
          
     public function __construct() {
         try{
             
             parent::__construct('mysql:host=localhost;dbname=nutri_saludable','saludable','');
             parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         } catch (Exception $ex) {
             
             die('La base de datos seleccionada no existe!');

         }
         
     }   
     
 }
