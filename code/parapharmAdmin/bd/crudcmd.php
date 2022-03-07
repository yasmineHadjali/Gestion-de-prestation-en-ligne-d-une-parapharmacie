<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();



$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$cd = (isset($_POST['Com_client'])) ? $_POST['Com_client'] : '';
$montant = (isset($_POST['Com_montant'])) ? $_POST['Com_montant'] : '';
$date = (isset($_POST['Com_date'])) ? $_POST['Com_date'] : '';
// $image = (isset($_POST['Com_client'])) ? $_POST['Com_client'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id_com = (isset($_POST['id_com'])) ? $_POST['id_com'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO commandes (email , Com_client , Com_montant , Com_date) VALUES('$email' , '$cd', '$montant', '$date') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM commandes ORDER BY id_com DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE commandes SET  email ='$email' , Com_client ='$cd' , Com_montant ='$montant' , Com_montant ='$montant', Com_date ='$date' WHERE id_com ='$id_com' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM commandes WHERE id_com='$id_com' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM commandes WHERE id_com='$id_com' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM commandes";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 5:    
        $consulta = "SELECT * FROM commandes WHERE id_com='$id_com'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;    

    }

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;