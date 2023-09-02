<?php
include('datoscone.php');
class Conexion {
    function conectar(){
        try{
            $conexion = new PDO("mysql:host=".SERVER.";dbname=".DBNAME, USER, PASSWORD);
           // $conexion = new PDO("pgsql:host=".SERVER.";port= 5432 ;dbname=".DBNAME, USER, PASSWORD);
            return $conexion;
    
        }catch(Exception $error){
            die ("Error mi amor".$error->getMessage());


        }
        

    }
}