<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="pharmacie">
    <meta name="keywords" content=" html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Pharmacie en ligne </title>

<!--poser des qst-->
<script type="text/javascript" src="source/qst/poserqstn.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="source/qst/poserqstn.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	
</head>

<body >
   
    <!-- en tete debut  -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
        
							 <div class="header__top__right__language">
                                
                            <a href="formulaire/form2.html"><i class="fa fa-user" style="color:white" ></i><font color="white"> Se connecter</font></a>
                               
                               
                            </div>
							
                            <div class="header__top__right__auth">
                                <a href="login.php"><i class="fa fa-user"></i> s'enregistrer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="index.php"><img src="image/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    
                </div>
               
            </div>
            
        </div>
    </header>
    <!-- en tete fin -->











 <div id="all">
        <div id="content">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <!-- breadcrumb-->
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                    <li aria-current="page" class="breadcrumb-item active">Nouveau compte / Connexion</li>
                  </ol>
                </nav>
              </div>
              <div class="col-lg-6">
                <div class="box">
                  <h1>Nouveau compte</h1>
                  <p class="lead">Pas encore enregistré ?</p>
                  <p>Avec l'inscription chez nous, un nouveau monde, des réductions fantastiques et bien plus s'ouvrent à vous! L'ensemble du processus ne vous prendra pas plus d'une minute!</p>
                  <p class="text-muted">Si vous avez des questions, n'hésitez pas à nous envoyer un mail a l'adresse suivante : parapharmacie_en_ligne@gmail.com, notre centre de service client travaille pour vous 24h / 24 et 7j / 7.</p>
                  <hr>
                  <form method="post" action="inscription.php">
				    
					
                    <div class="form-group ">
                      <label for="text">Nom</label>
                      <div class="d-flex">
                      <input id="text" type="text" placeholder="votre nom" class="form-control" name="Client_nom" required>
                      <span class="inputRequirement">*</span>
                    </div>
				    </div>
                    <div class="form-group">
                      <label for="text">prenom</label>
                      <div class="d-flex">
                      <input id="text" type="text" placeholder="votre prénom" class="form-control" name="Client_prenom" required>
                      <span class="inputRequirement">*</span>
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <div class="d-flex">
                      <input id="email" type="email" placeholder="nom@exemple.com" class="form-control" name="email" required >
                        <span class="inputRequirement">*</span>
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="password">Mot de passe</label> 
                      <div class="d-flex">
                      <input id="password" type="password" placeholder="votre mot de passe" class="form-control" name="mot_de_passe" required>
                        <span class="inputRequirement">*</span>
                    </div>
                    </div>
					  <div class="form-group">
                      <label for="password">confirmer mot de passe</label> 
                      <div class="d-flex">
                      <input id="password" type="password" placeholder="votre mot de passe" class="form-control" name="confirmpassword" required>
                        <span class="inputRequirement">*</span>
                    </div>
                    </div>
                   <div class="form-group ">
                    <label for="text">numéro de téléphone </label>
                    <div class="d-flex">
                      <input class="form-control" type="tel" placeholder="numéro de téléphone" id="example-tel-input" name="telephone" required>
                      <span class="inputRequirement">*</span>
                    </div>
                    </div>
					
                    <div class="d-flex">
                      <label for="rd" style="margin-right: 22px;">Civilité</label>
                    <div class="form-check">
                     <label class="form-check-label" for="radio1 rd" style="margin-right: 25px;">
                        M</label> <input type="radio" class="form-check-input" id="radio1" name="Client_civilite" value="Monsieur" checked >
                      
                    </div>
                    <div class="form-check ">
                      <label class="form-check-label" for="radio2 rd" style="margin-right: 25px;">
                        Mme</label> <input type="radio" class="form-check-input" id="radio2" name="Client_civilite" value="Madame">
                      
                    </div>
                    <span style="padding: 0px ;">*</span>
                  </div>
                
                  
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" style="margin-top: 1rem;"><i class="fa fa-user-md"></i>  S'inscrire</button>
                    </div>
					
                    <p class="small mt-3">En vous inscrivant, vous indiquez que vous avez lu et accepté les conditions d'utilisationet la politique de confidentialité </p>.
                  </form>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="box">
                  <h1>S'identifier</h1>
                  <p class="lead">Déjà notre client?</p>
                  <hr>
                  <form action="verification.php" method="POST">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input id="email" type="text" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                      <label for="password">Mot de passe</label>
                      <input id="password" type="password" class="form-control" name="password" required>
                    </div>
                    <div class="text-center">
                      <button type="submit"  id='submit' class="btn btn-primary"><i class="fa fa-sign-in" value='LOGIN'></i>  S'identifier</button>
                   <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
				    </div>
                    <div class="col-md-12 ">
                      <div class="login-or">
                         <hr class="hr-or">
                      </div>
                   </div>
                  
                  </form>
                  
                
                  
                </div>
              </div>
			 </div></div></div> 
			

 <!-- bas de page debut -->
    <footer class="footer spad">
        <div class="container">
            <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>telephone</h4>
                        <p>0550260304</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Adresse</h4>
                        <p>krim belkacem - tizi ouzou</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>disponibilité </h4>
                        <p>24/24 7/7</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>Parapharmacie_en_ligne@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>Parapharmacie en ligne 2020-2021</p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- bas de page fin -->


    <!-- Js  -->
    <script src="source/js/jquery-3.3.1.min.js"></script>
    <script src="source/js/bootstrap.min.js"></script>
    <script src="source/js/jquery.nice-select.min.js"></script>
    <script src="source/js/jquery-ui.min.js"></script>
    <script src="source/js/jquery.slicknav.js"></script>
    <script src="source/js/mixitup.min.js"></script>
    <script src="source/js/owl.carousel.min.js"></script>
    <script src="source/js/main.js"></script>
</body>
</html>



    