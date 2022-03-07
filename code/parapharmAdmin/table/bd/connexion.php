<?php

class Conexion{	  
    public static function Relier() {        
        define('servidor', 'localhost');
        define('nombre_bd', 'adminpanel');
        define('usuario', 'root');
        define('password', '88@1310L');					        
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $options);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}


