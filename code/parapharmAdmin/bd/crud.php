<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$Client_nom = (isset($_POST['Client_nom'])) ? $_POST['Client_nom'] : '';
$Client_prenom = (isset($_POST['Client_prenom'])) ? $_POST['Client_prenom'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$Client_civilite = (isset($_POST['Client_civilite'])) ? $_POST['Client_civilite'] : '';
$telephone = (isset($_POST['telephone'])) ? $_POST['telephone'] : '';
// $status = (isset($_POST['status'])) ? $_POST['status'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
// $k = (isset($_POST['k'])) ? $_POST['k'] : '';
// $opcion = (isset($_POST['k'])) ? $_POST['k'] : $opcion ;

switch($opcion){
    case 1:
        $consulta = "INSERT INTO clients (Client_nom, Client_prenom, email, Client_civilite, telephone) VALUES('$Client_nom', '$Client_prenom', '$email', '$Client_civilite', '$telephone') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM clients ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE clients SET Client_nom ='$Client_nom', Client_prenom ='$Client_prenom', email ='$email', Client_civilite ='$Client_civilite', telephone ='$telephone' WHERE id ='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM clients WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM clients WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM clients";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 5:    
        $consulta = "SELECT * FROM clients WHERE id='$id'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;