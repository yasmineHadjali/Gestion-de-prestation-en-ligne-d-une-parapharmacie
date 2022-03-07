<?php
//connexion à la base de données:
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "root";
$BDD['pass'] = "";
$BDD['db'] = "test";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
if(!$mysqli) {
    echo "Connexion non établie.";
    exit;
}
    
//par défaut, on affiche le formulaire (quand il validera le formulaire sans erreur avec l'inscription validée, on l'affichera plus)
$AfficherFormulaire=1;
//traitement du formulaire:
if(isset($_POST['Client_nom'],$_POST['Client_prenom'],$_POST['email'],$_POST['mot_de_passe'],$_POST['confirmpassword'],$_POST['Client_civilite'],$_POST['telephone'])){//l'clients à cliqué sur "S'inscrire", on demande donc si les champs sont défini avec "isset"
    if(empty($_POST['Client_nom'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
                echo '<script>alert("le champ nom est vide")</script>';
                echo '<script>window.location="login.php"</script>';
				
    } elseif(!preg_match("#^[a-z0-9]+$#",$_POST['Client_nom'])){//le nom du client est renseigné mais ne convient pas au format qu'on souhaite qu'il soit, soit: que des lettres minuscule + des chiffres 
                echo '<script>alert("Le Pseudo doit être renseigné en lettres minuscules sans accents, sans caractères spéciaux")</script>';
                echo '<script>window.location="login.php"</script>';
				
    } elseif(strlen($_POST['Client_nom'])>15){//le nom du client est trop long, il dépasse 15 caractères
		        echo '<script>alert("lLe pseudo est trop long, il dépasse 15 caractères")</script>';
                echo '<script>window.location="login.php"</script>';
				
    } elseif(empty($_POST['mot_de_passe'])){//le champ mot de passe est vide
                echo '<script>alert("le champ mot de passe est vide")</script>';
                echo '<script>window.location="login.php"</script>';
	
} elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM clients WHERE email='".$_POST['email']."'"))==1){//on vérifie que l'email  n'est pas déjà utilisé par un autre membre
        echo "Ce pseudo est déjà utilisé.";
                echo '<script>window.location="login.php"</script>';

	} elseif($_POST['mot_de_passe'] != $_POST['confirmpassword']){// confirmer le mot de passe
                echo '<script>alert("le mot de passe nest pas valide")</script>';
                echo '<script>window.location="login.php"</script>';
				
    } else {
        //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
        
        if(!mysqli_query($mysqli,"INSERT INTO clients SET Client_nom='".$_POST['Client_nom']."',Client_prenom='".$_POST['Client_prenom']."',email='".$_POST['email']."',mot_de_passe='".$_POST['mot_de_passe']."',Client_civilite='".$_POST['Client_civilite']."',telephone='".$_POST['telephone']."'")){
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);// afficher une erreur
        } else {
      
			 echo '<script>alert("Vous êtes inscrit avec succès")</script>';
                echo '<script>window.location="principale.php"</script>';
            //on affiche plus le formulaire
            $AfficherFormulaire=0;
        }
    }
}
if($AfficherFormulaire==1){
   
}
?>





