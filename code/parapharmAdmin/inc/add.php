<?php
// include_once 'conexion.php';
// $nom = (isset($_POST['nom'])) ? $_POST['nom'] : '';
// $cat = (isset($_POST['categorie'])) ? $_POST['categorie'] : '';
// $mfg = (isset($_POST['date_mfg'])) ? $_POST['date_mfg'] : '';
// $exp = (isset($_POST['date_exp'])) ? $_POST['date_exp'] : '';
// $Quantite = (isset($_POST['Quantite'])) ? $_POST['Quantite'] : '';
// $price = (isset($_POST['price'])) ? $_POST['price'] : '';
$cat = (isset($_POST['categorie'])) ? $_POST['categorie'] : '';
// $requete = "INSERT INTO categorie (categorie) VALUES('$cat') ";			
//         $resultat = $conexion->prepare($requete);
//         $resultat->execute(); 
        
echo $cat;

        // print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
        // $conexion=null;