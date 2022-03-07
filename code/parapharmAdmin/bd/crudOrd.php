<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();



$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$image = (isset($_POST['image'])) ? $_POST['image'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id_ordonnance = (isset($_POST['id_ordonnance'])) ? $_POST['id_ordonnance'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO ordonnance (email , image) VALUES('$email' , '$image') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM ordonnance ORDER BY id_ordonnance DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        // $consulta = "UPDATE ordonnance SET  categorie ='$categorie' WHERE NumMsg ='$NumMsg' ";		
        // $resultado = $conexion->prepare($consulta);
        // $resultado->execute();        
        
        // $consulta = "SELECT * FROM ordonnance WHERE NumMsg='$NumMsg' ";       
        // $resultado = $conexion->prepare($consulta);
        // $resultado->execute();
        // $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        // break;
    case 3:        
        $consulta = "DELETE FROM ordonnance WHERE id_ordonnance='$id_ordonnance' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM ordonnance";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 5:    
        $consulta = "SELECT * FROM ordonnance WHERE id_ordonnance='$id_ordonnance'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;    

    }

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;