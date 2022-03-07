<?php
session_start();
include('../client_visiteur/connexionbase.php');

if(isset($_POST['modifier'])){


    $email=$_POST['email'];
    $newtel=$_POST['newtel'];
    $telephone=$_POST['telephone'];

     if($newtel == $telephone){
        $pres = $base->prepare("UPDATE clients SET telephone='$telephone'    WHERE   email='$email'  ");
          //execution de la requete
         $pres->execute();
        $result=$pres;
        if(!$result){
            echo '<script language="Javascript">
        alert ("Modification non pas été apporter !" )
             </script>';}
             else{
                echo '<script language="Javascript">
        alert ("Modification bien terminer !" )
             </script>';
             }			
	 }else  echo '<script type ="text/javascript"> alert("les 2 numéros sont differents") </script>';  
	 //  }else  echo '<script type ="text/javascript"> alert("mot de passe n"existe pas ") </script>';  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacie en ligne </title>

    
    <link rel="stylesheet" href="dist 3.7/css/bootstrap.min.css"  />
    <script src="dist 3.7/js/bootstrap.min.js"></script>
    <script src="dist 3.7/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="css/ens.css"  />
    <style>
    #footer{
	background: #333333;
	color: #ffffff;
	text-align: center;
	padding: 30px;
	margin-top: 100px;

}

    
    </style>


    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <script>



        $(function () {
            $('.navbar-toggle-sidebar').click(function () {
                $('.navbar-nav').toggleClass('slide-in');
                $('.side-body').toggleClass('body-slide-in');
                $('#search').removeClass('in').addClass('collapse').slideUp(200);
            });

            $('#search-trigger').click(function () {
                $('.navbar-nav').removeClass('slide-in');
                $('.side-body').removeClass('body-slide-in');
                $('.search-input').focus();
            });
        });
    </script>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body >


<nav class="navbar navbar-default navbar-static-top" >
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
             <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
			    MENU
			 </button>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand"  style="margin-top: -12px;">
               <h4 ><font color="black"> modifier <small><font color="black">  compte</small></h4>
               
            </a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >      
			
                     <ul class="nav navbar-nav navbar-right">
                        <li><a href="../deco.php"><span><i class="glyphicon glyphicon-log-out"></i></span><font color="black"> Déconnexion</a></li>
                         
                        </li>
                     </ul>
               </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
    </nav>  	
   
    
    <div class="container-fluid main-container" >
        <div class="col-md-2 sidebar">
                <div class="row">
                        <!-- uncomment code for absolute positioning tweek see top comment in css -->
                        <div class="absolute-wrapper"> </div>
                            <!-- Menu -->
                            <div class="side-menu" style="background-color:#97C6FB">
                                <nav class="navbar navbar-default" role="navigation" style="background-color:#97C6FB">
                                    <!-- Main Menu -->
                                    <div class="side-menu-container">
                                        <ul class="nav navbar-nav">
                                            <!-- ajouter 1 -->
                                            <li ><a href="modifmdp.php"><span><i class="glyphicon glyphicon-cog"></i></span> Modifier le mot de passe</a></li>
                                            <li><a href="modifnom.php"><span><i class="glyphicon glyphicon-cog"></i></span> Modifier le nom</a></li>
                                            <li><a href="modifprenom.php"><span><i class="glyphicon glyphicon-cog"></i></span> Modifier prénom</a></li>
											<li class="active"><a href="modiftel.php"><span><i class="glyphicon glyphicon-cog"></i></span> Modifier le numéro téléphone</a></li>
                                        </ul>
                                    </div><!-- /.navbar-collapse -->
                                </nav>
                            </div>
                        </div>  		
                </div>
          
        <div class="col-md-10 content">
            <div class="panel panel-default" >
                <div class="panel-heading ">
                <p style="font-size:20px; font-family:'Gothic A1';"> Modifier le numéro de téléphone</p>
                </div>
                <div class="panel-body" >
                    <div class="row">  
                    <div class="col-md-6 col-md-offset-3">
                            <form class="well form-horizontal" action="" method="post" style="background-color:#F5F5F5;" >
                                
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class=" control-label" for="telephone">email</label>
                                        <input id="email" name="email" type="text" class="form-control" required>  
                                    </div>
                                </div>
								

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class=" control-label" for="telephone">nouveau numéro</label>
                                        <input id="newtel" name="newtel" class="form-control" type="text" required>
                                       
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class=" control-label" for="telephone">confirmer le nouveau numéro</label>
                                        <input id="telephone" name="telephone" type="text" class="form-control" >  
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class=" col-md-12">
                                        <input type="submit" value="Modifier" id="singlebutton" name="modifier" class="btn btn-primary btn-lg" style="background-color:green;">
                                    </div>
                                </div>
                        </form> 
                        </div>
                    </div>
                </div>
            </div>
        
            </div>
    </div>
	 
	 
	 
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
