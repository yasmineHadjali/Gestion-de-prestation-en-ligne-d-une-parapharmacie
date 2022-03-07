<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$nom = (isset($_POST['nom'])) ? $_POST['nom'] : '';
$cat = (isset($_POST['categorie'])) ? $_POST['categorie'] : '';
$mfg = (isset($_POST['date_mfg'])) ? $_POST['date_mfg'] : '';
$exp = (isset($_POST['date_exp'])) ? $_POST['date_exp'] : '';
$Quantite = (isset($_POST['Quantite'])) ? $_POST['Quantite'] : '';
$price = (isset($_POST['price'])) ? $_POST['price'] : '';
// $status = (isset($_POST['status'])) ? $_POST['status'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '' ;
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
// $k = (isset($_POST['k'])) ? $_POST['k'] : '';
// $opcion = (isset($_POST['k'])) ? $_POST['k'] : $opcion ;
// $opcion = $_POST['k'] ;

// if(isset($_POST['k'])){$opcion = $_POST['k'] ;}else{$opcion = $_POST['opcion'];}
switch($opcion){
    case 1:
        $consulta = "INSERT INTO produits2 (nom, categorie, date_mfg, date_exp, Quantite ,price) VALUES('$nom', '$cat', '$mfg', '$exp', '$Quantite', '$price') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM produits2 ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE produits2 SET nom ='$nom', categorie ='$cat', date_mfg ='$mfg', date_exp ='$exp', Quantite ='$Quantite', price ='$price' WHERE id ='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM produits2 WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM produits2 WHERE id='$id' LIMIT 1";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM produits2";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
        case 5:    
            $consulta = "SELECT * FROM produits2 WHERE id='$id'";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();        
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;    
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;