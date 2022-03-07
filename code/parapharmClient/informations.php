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
                            <ul>
                                <li><i class="fa fa-envelope"></i> ph_en_ligne@gmail.com</li>
                                <li>site de vente de médicement en ligne</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                          
							
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

    <!-- menu debut -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>catégories</span>
                        </div>
                        <ul>
			 <li><a href="catégorie/senté.php">santé</a></li>
                   
						 <li><a href="catégorie/beauté.php">beauté</a></li>
                            <li><a href="catégorie/bien-etre.php">bien-etre</a></li>
							<li><a href="catégorie/hygiéne.php">hygiéne</a></li>
							<li><a href="catégorie/bébé.php">bébé</a></li>
							<li><a href="catégorie/bio.php">bio</a></li>
							<li><a href="catégorie/matmedical.php">matériel médical</a>
							<li><a href="catégorie/vetrinaire.php">vetrinaire</a></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="rech.php" method="post">
                                <div class="hero__search__categories">
                                    toutes catégories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="recherche d'un produit"  name="search">
                                <button type="submit"  name="submit" class="site-btn" <?php echo @$_GET['search']; ?>>rechercher</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0550260304</h5>
                                <span>disponible 24/7 </span>
                            </div>
                        </div>
                    </div>
					<nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">informations</a></li>
                    <li aria-current="page" class="breadcrumb-item active">pour quoi une  pharmacie en ligne ?</li>
                  </ol>
                </nav>
                    
                </div>
            </div>
        </div>
    </section>
  <!-- menu fin-->

    <div id="all">
        <div id="content">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">

<p><h2><u>pharmacie en ligne</u></h2><br><br>
<< Près de la moitié de la population mondiale qui utilise Internet devrait acheter en ligne en 2020.  D’après l’article ‘Chiffres & Tendances Du Web 2020 :<br> 
SEO, E-Commerce, Marketing, Réseaux Sociaux’ du site Alioze>>.<br><br>
<h3>Un site de vente de produits pharmaceutiques en ligne ?</h3>
<h3>Pourquoi ?</h3>
La gestion manuelle dite traditionnelle d’une pharmacie peut être handicapant :<br>
	1. L’utilisation de papier pour enregistrer des informations peut causer une mauvaise organisation ainsi qu’une profusion de documents ce qui 
peut mener au ralentissement des services et au désordre (mélanger les documents), ce qui peut s’avérer fatale pour une petite entreprise.<br>
	2. Imprécision des chiffres (Erreurs de calculs (Bon, facture,…)).<br>
    3. Stockage limité.<br>
	4. Une perte de temps.<br>
          	Côté client : Déplacement inutile en cas de rupture de stock du produit désiré ou pas satisfait ?<br>
         	Côté vendeur : Trouver du mal à chercher les produits à l’approche de leur date de péremption ou ceux en rupture de stock.<br><br>

<b>Un magasin en ligne (une pharmacie dans ce cas-là) est un magasin virtuel qui permet aux utilisateurs de s’informer et/ou de choisir un produit et
 de l’ajouter au panier d’achat et ensuite commander ce produit en remplissant un formulaire et en payant par carte ou par un autre moyen de paiement.
 La commande sera ainsi livrée en fonction du choix de mode de livraison du client.</b><br><br>
<h3>Services offerts :</h3>
1. Recherche de produits.<br>
2.	Consultation de catalogues de produits.<br>
3.	Commande de produits.<br>
4.	Demande de conseils.<br>
Interface client : Est accessible à n’importe quel internaute cherchant à s’informer ou cherchant des produitset voulant effectuer des commandes.<br><br>
<h3>Objectif :</h3>
1.	Une pharmacie en ligne qui permet d’assurer un service rapide (plus besoin de se déplacer et de faire la queue (s’impatienter/être pressé), la commande se fait en quelque clics) etdisponible 24h/24 et 7j/7.<br>
2.	Permettre aux clients de magasiner en tout lieu et en tout temps, le client n’est donc pas obliger de se rendre jusqu’en magasin à une heure précise pour faire ses achats.<br>
3.	Etendre sa portée géographique et donc élargir la clientèle (cibler une clientèle pas forcément locale) qui permet donc d’augmenter le chiffre d’affaires.<br>
4.	Etablir une meilleure communication avec le client en ayant une relation plus personnelle avec le client pour que ce dernier se sente plus à l’aise et moins intimidé pour demander des conseils.<br>
5.	Proposer plus de produits qu’en magasin grâce au stockage moins limité.<br>
6.	Faire jouer la concurrence (question qualité/prix).<br>
7.	La facilité et la rapidité d’ajout au panier de produits et de la commande donne d’avantage envie aux clients d’acheter.<br>
8.	Par les temps de pandémie, se rendre dans des endroits considérés comme à risque tels que les pharmacies est de préférence à bannir, alors pourquoi ne pas éviter ce genre de situations?<br>
9.	(Permettre aux clients de choisir le produit qui lui convient le mieux au plus bas prix.)<br>
10.	Améliorer la précision des chiffres grâce à Google Analytics.<br>
<br>
<h3>A qui ?</h3>
1.	Personnes en manque de temps.<br>
2.	Personnes qui ne peuvent pas se déplacer (handicapés, manque de moyens de transports, pas de pharmacie à leur portée).<br>
3.	Personnes ‘timides’ (Nombreuses sont les personnes qui en cas d’affection ont honte de demander des conseils, parler à un écran permet de les mettre plus en confiance).<br>
4.	Personnes hésitantes ou qui ne veulent que s’informer.<br>
5.	Ou simplement toutes celles qui ne veulent pas se rendre en magasin.<br><br>
<h3>Avec/sans ordonnance :</h3>
1.	Pour la commande de médicaments en vente libre cela ne change pas de la commande de produits tiers.<br>

2.  Si un client veut un produit qui se vend qu’avec ordonnance alors celui-ci devra en fournir une, en l’envoyant sur le site. A présent, les Smartphones sont, à leur conception, dotés d’applications pour scanner des fichiers ( que ce soit sur Android ou Ios ), ce qui permet aux utilisateurs de cellulaires de scanner et numériser leur ordonnances afin de les exporter sur le site, ou alors il existe tout simplement sur les magasins d’applications Google Play et App storeplusieurs applications téléchargeables pour cela. Dans le cas où le client utiliserait un ordinateur celui-ci doit être muni d’un scanner.Dans le cas contraire, la majorité des médecins de nos jours conservent les informations de leur patients sur ordinateur par conséquent leur ordonnances aussi, il suffirait donc de demander au médecin d’avoir une version numérique de celle-ci. 
<br><br>
	 </div></div></div></div></div>		
			

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
                        <div class="footer__copyright__text"><p> Parapharmacie en ligne 2020-2021 "-</p></div>
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



    