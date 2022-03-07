<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$username = (isset($_POST['nom_utilisateur'])) ? $_POST['nom_utilisateur'] : '';
$nom = (isset($_POST['nom'])) ? $_POST['nom'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$civilite = (isset($_POST['civilite'])) ? $_POST['civilite'] : '';
$telephone = (isset($_POST['telephone'])) ? $_POST['telephone'] : '';
// $status = (isset($_POST['status'])) ? $_POST['status'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
// $k = (isset($_POST['k'])) ? $_POST['k'] : '';
// $opcion = (isset($_POST['k'])) ? $_POST['k'] : $opcion ;

switch($opcion){
    case 1:
        $consulta = "INSERT INTO clients (nom_utilisateur, nom, email, civilite, telephone) VALUES('$username', '$nom', '$email', '$civilite', '$telephone') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM clients ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE clients SET nom_utilisateur ='$username', nom ='$nom', email ='$email', civilite ='$civilite', telephone ='$telephone' WHERE id ='$id' ";		
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
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;