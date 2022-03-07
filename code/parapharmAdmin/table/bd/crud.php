<?php
include_once '../bd/conexion.php';
$objet = new Conexion();
$conexion = $objet->Relier();

$nom_utilisateur = (isset($_POST['nom_utilisateur'])) ? $_POST['nom_utilisateur'] : '';
$nom = (isset($_POST['nom'])) ? $_POST['nom'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$civilite = (isset($_POST['civilite'])) ? $_POST['civilite'] : '';
$telephone = (isset($_POST['telephone'])) ? $_POST['telephone'] : '';
// $status = (isset($_POST['status'])) ? $_POST['status'] : '';


$option = (isset($_POST['option'])) ? $_POST['option'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($option){
    case 1:
        $requete = "INSERT INTO clients (nom_utilisateur, nom, email, civilite, telephone, status) VALUES('$nom_utilisateur', '$nom', '$email', '$civilite', '$telephone', '$status') ";			
        $resultat = $conexion->prepare($requete);
        $resultat->execute(); 
        
        $requete = "SELECT * FROM clients ORDER BY id DESC LIMIT 1";
        $resultat = $conexion->prepare($requete);
        $resultat->execute();
        $data=$resultat->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $requete = "UPDATE clients SET nom_utilisateur='$nom_utilisateur', nom='$nom', email='$email', civilite='$civilite', telephone='$telephone', status='$status' WHERE id='$id' ";		
        $resultat = $conexion->prepare($requete);
        $resultat->execute();        
        
        $requete = "SELECT * FROM clients WHERE id='$id' ";       
        $resultat = $conexion->prepare($requete);
        $resultat->execute();
        $data=$resultat->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $requete = "DELETE FROM clients WHERE id='$id' ";		
        $resultat = $conexion->prepare($requete);
        $resultat->execute();                           
        break;
    case 4:    
        $requete = "SELECT * FROM clients";
        $resultat = $conexion->prepare($requete);
        $resultat->execute();        
        $data=$resultat->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//J'envoie le tableau final au format json à AJAX
$conexion=null;

