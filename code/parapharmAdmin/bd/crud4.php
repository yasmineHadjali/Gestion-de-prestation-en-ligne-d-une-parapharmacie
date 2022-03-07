<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();


$dateMsg = (isset($_POST['dateMsg'])) ? $_POST['dateMsg'] : '';
$contenuMsg = (isset($_POST['contenuMsg'])) ? $_POST['contenuMsg'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';

// $status = (isset($_POST['status'])) ? $_POST['status'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$NumMsg = (isset($_POST['id'])) ? $_POST['id'] : '';
// $k = (isset($_POST['k'])) ? $_POST['k'] : '';
// $opcion = (isset($_POST['k'])) ? $_POST['k'] : $opcion ;

switch($opcion){
    case 1:
        $consulta = "INSERT INTO messages (dateMsg , contenuMsg , email) VALUES('$dateMsg' , '$contenuMsg' , '$email') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM messages ORDER BY NumMsg DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE messages SET  categorie ='$categorie' WHERE NumMsg ='$NumMsg' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM messages WHERE NumMsg='$NumMsg' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM messages WHERE NumMsg='$NumMsg' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM messages";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 5:    
        $consulta = "SELECT * FROM messages WHERE NumMsg='$NumMsg'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;    

    }

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;