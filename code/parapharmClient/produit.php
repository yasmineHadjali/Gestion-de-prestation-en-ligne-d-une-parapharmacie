<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "test");    //conexion a la base de donnée

?>


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
	
	
	<!-- liste des produits -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
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

    <!-- menu debut -->
    


		<div class="container" style="" >
			
			<?php
				$query = "SELECT * FROM articles ORDER BY Article_code ASC"; 
			 $result = mysqli_query($connect, $query);
             $turn = 1 ;   
             if(mysqli_num_rows ($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
                        
				?>  
               <!-- <div class="row"> -->

			<div class="col-md-4 mb-5">
				<form method="post" action="index.php?action=add&Article_code=<?php echo $row["Article_code"]; ?>">
					<div style="border:1px solid #333; background-color:white; border-radius:5px; padding:16px;" align="center">
						<img src="../image/produit/<?php echo $row["image"]; ?>" class="img-responsive" /><br />
						<div class="panel panel-default" >
						<div class="panel-heading ">
                            <p style="font-size:20px; font-family:'Gothic A1';">détails du produit:</p>
                        </div>
						  <table class="table table-hover" id="task-table">
						
						  <tr><h4 class="text-info"><td><u><b>nom: </b></u> </td><td><?php echo $row["Article_designation"]; ?></td></h4></tr>
						  <tr><h4 class="text-info"><td><u><b>catégorie:</b></u></td><td> <?php echo $row["categorie"]; ?></td></h4></tr>
						  <tr><h4 class="text-danger"><td><u><b>prix:</b></u></td> <td><?php echo $row["Article_PUHT"]; ?> DA</td></h4>  </tr>
						</table>
					</div>
                    </div>
				</form>
			</div>
            <!-- </div> -->
			<?php
				
                
            	}
				}
			?>
			
			</div>
		</div>
	</div>
	<br /> <br><br>
	 

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



    