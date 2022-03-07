<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$code = (isset($_POST['Article_code'])) ? $_POST['Article_code'] : '';
$nom = (isset($_POST['Article_designation'])) ? $_POST['Article_designation'] : '';
$cat = (isset($_POST['categorie'])) ? $_POST['categorie'] : '';
$mfg = (isset($_POST['date_mfg'])) ? $_POST['date_mfg'] : '';
$exp = (isset($_POST['date_exp'])) ? $_POST['date_exp'] : '';
$Quantite = (isset($_POST['Article_Qte'])) ? $_POST['Article_Qte'] : '';
$price = (isset($_POST['Article_PUHT'])) ? $_POST['Article_PUHT'] : '';
$ancp = (isset($_POST['Article_ancp'])) ? $_POST['Article_ancp'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '' ;

$id = (isset($_POST['id_Articles'])) ? $_POST['id_Articles'] : '';

switch($opcion){
    case 1:
        $consulta = "INSERT INTO promotion (Article_code,Article_designation, categorie, date_mfg, date_exp, Article_Qte ,Article_PUHT,Article_ancp) VALUES('$code','$nom', '$cat', '$mfg', '$exp', '$Quantite', '$price', '$ancp') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM promotion ORDER BY id_Articles DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE promotion SET Article_code ='$code', Article_designation ='$nom', Article_PUHT ='$price', date_mfg ='$mfg', date_exp ='$exp' , Article_Qte ='$Quantite', categorie ='$cat' , Article_ancp = '$ancp'
         WHERE id_Articles ='$id' ";		//, Article_designation ='$nom', Articles_PUHT ='$price', date_mfg ='$mfg', date_exp ='$exp', Articles_Qte ='$Quantite', categorie ='$cat'
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        echo $consulta;        
        
        $consulta = "SELECT * FROM promotion WHERE id_Articles='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM promotion WHERE id_Articles='$id' LIMIT 1";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM promotion";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 5:    
    $consulta = "SELECT * FROM promotion WHERE id_Articles='$id'";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();        
    $data=$resultado->fetchAll(PDO::FETCH_ASSOC);

     
break;    
}
print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;