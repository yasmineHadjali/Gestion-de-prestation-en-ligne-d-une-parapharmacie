<?php
//connection to database
  session_start();
  $connect = mysqli_connect('localhost','root','','test');

    if(isset($_POST["add_to_cart"]))       //lutilisateur ajoute un produit
    {
      if(isset($_SESSION["shopping_cart"]))      //préparation du panier
      {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");   //variable pour stocker les produits
        if(!in_array($_GET["Article_code"], $item_array_id))
        {
          $count = count($_SESSION["shopping_cart"]);
    //recevoir les produits
            $item_array = array(
                      'item_id'       =>   $_GET["Article_code"],
                      'product_img'     =>   $_POST["hidden_image"],
                      'item_name'     =>   $_POST["hidden_name"],
                      'item_price'    =>   $_POST['hidden_price'],
                      'item_quantity' =>   $_POST["quantity"]

            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
          // si le produit est deja ajouter
          echo '<script>alert("produit déja ajouter ")</script>';
          echo '<script>window.location = "principale.php"</script>';
        }
      }
      else
      {
        //panier est vide
         $item_array = array(
                      'item_id'       =>   $_GET["Article_code"],
                      'product_img'     =>   $_POST["hidden_image"],
                      'item_name'     =>   $_POST["hidden_name"],
                      'item_price'    =>   $_POST['hidden_price'],
                      'item_quantity' =>   $_POST["quantity"]

            );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
    }
//supprimer un produit 
    if(isset($_GET["action"]))
    {
      if($_GET["action"] == "delete")
      {
        foreach($_SESSION["shopping_cart"] as $key=>$value)
            {
              if($value["item_id"] == $_GET["Article_code"])
              {
                unset($_SESSION["shopping_cart"][$key]);
                echo '<script>alert("produit supprimer")</script>';
                echo '<script>window.location="indax.php</script>';
              }
            }
      }
    }





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
	<link rel="stylesheet" href="css/styleboutton.css" type="text/css">
	
	<!-- liste des produits -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
		
		
		
	
</head>

<body>
   
<header class="header">
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

   
  
	<div id="all">
        <div id="content">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <!-- breadcrumb-->
                <nav aria-label="breadcrumb" style="height:70%;" >
                  <ol class="breadcrumb" style="height:70%;">
                    <li class="breadcrumb-item" style="margin-top:0.8%;height:50%;"><a href="modifiercompte/modifcompte.php">modifier mon compte</a></li>
                   <li aria-current="page" style="margin-left:10%;margin-right:5%;margin-top:0.8%;">    
				   <?php
			 
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:login.php");
                   }
                }
                else if($_SESSION['email'] !== ""){
                    $user = $_SESSION['email'];
                    // afficher un message
				
                    echo "Bonjour <b>$user,</b> vous êtes connecté";
					
                }
           

		   ?>  <li  ><a href='login.php?deconnexion=true'><button type="submit"  class="boutton" style="width:100%;margin-left:205%;color:red;background-color:#F3F3F3;height:65%; margin-top:-150%;  padding-top:-20%;"><h4 style=" text-align: top; padding-top:-10%;"> Déconnexion</h4></button><br></a></li>
					
                  </ol>
                </nav>
              </div></div></div></div></div>
			
 

			
		
           <div class="container" style="width:700px;">  
		    <div style="clear:both"></div>  
                <br />  
                <h3> Details: <b style="color: red">Mon panier</b></h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr> 
                              <th style="background-color:#E6E3E3;"> image</th> 
                               <th width="40%"style="background-color:#E6E3E3;">Nom du produit</th>  
                               <th width="10%"style="background-color:#E6E3E3;">Quantité</th>  
                               <th width="20%"style="background-color:#E6E3E3;">Prix</th>  
                               <th width="15%"style="background-color:#E6E3E3;">Total</th>  
                               <th width="5%"style="background-color:#E6E3E3;">Action</th>  
                          </tr>  
                             <?php 
                           if(!empty($_SESSION["shopping_cart"]))
                           {
                            $total = 0;
                            foreach($_SESSION["shopping_cart"] as $key => $value)
                           {

                             ?>
                          <tr> 
                               <td><img src="../image/produit/<?php echo $value['product_img'];?>" style="width: 100px;"></td>
                             
                               <td><?php echo $value['item_name'];?></td>  
                               <td><?php echo $value['item_quantity']; ?></td>  
                               <td><?php echo $value['item_price'];?> DA</td>  
                               <td><?php echo number_format($value["item_quantity"] * $value["item_price"],2);?> DA</td>  
                               <td><a href="principale.php?action=delete&Article_code=<?php  echo $value['item_id'];?>"><span class="btn btn-danger">supprimer</span></a></td>  
                          </tr>  
                          <?php $total = $total + ($value["item_quantity"] * $value['item_price']);
                        }
                        ?>
                           
                          <tr>  
                               <td colspan="4" align="right" style="background-color:#4A6AFA;">Total a payer</td>  
							    
                               <td align="right"><?php echo number_format($total);?> DA</td>  
							
                                 <td><form method="post">
							    <input type="submit"method="post" value="valider" id="valider" name="valider" class="btn btn-primary btn-lg" style="background-color:green; height:40px;">
							   </form>
							   </td>  
                          </tr> 
						  
						  
						  
						  
						  
						  
                          <?php } ?> 
                           
                     </table>  
                </div>  
		   
                <h3 align="center">Catalogue de produits </h3><br />  
                  <?php
                    $qury = "SELECT * FROM articles ORDER BY Article_code ASC";
                    $result = mysqli_query($connect,$qury);
                    if(mysqli_num_rows($result) >0)
                    {
                      while($row = mysqli_fetch_array($result))
                      {

                  ?>
</div><center>
                <div class="col-md-4" style="width:40%;"> 
                     <form method="post" action="principale.php?action=add&Article_code=<?php echo $row["Article_code"];?>"   >  
                          <div style="border:1px solid #333; background-color:white; border-radius:5px; padding:16px;width:85%;" align="center">  
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
                               <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="hidden_name" value="<?php echo $row['Article_designation'] ?>" />
                            <input type="hidden" name="hidden_image" value="<?php echo $row['image'];?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row['Article_PUHT'];?>">


                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value=" Ajouter aux panier" />  
                          </div>  
                     </form>  
                </div>  
		
		</div>		
                  <?php } } ?>
				  <br>
				 <br />  
                  <?php
                    $qury = "SELECT * FROM promotion ORDER BY Article_code ASC";
                    $result = mysqli_query($connect,$qury);
                    if(mysqli_num_rows($result) >0)
                    {
                      while($row = mysqli_fetch_array($result))
                      {

                  ?>
</div><center>
                <div class="col-md-4" style="width:40%;"> 
                     <form method="post" action="principale.php?action=add&Article_code=<?php echo $row["Article_code"];?>"   >  
                          <div style="border:1px solid #333; background-color:#E6E3E3; border-radius:5px; padding:16px;width:85%;" align="center">  
                               <img src="../image/produit/<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                              <div class="panel panel-default" >
						<div class="panel-heading ">
                            <p style="font-size:20px; font-family:'Gothic A1';">détails du produit:</p>
                        </div>
						  <table class="table table-hover" id="task-table">
						
						  <tr><h4 class="text-info"><td><u><b>nom: </b></u> </td><td><?php echo $row["Article_designation"]; ?></td></h4></tr>
						  <tr><h4 class="text-info"><td><u><b>catégorie:</b></u></td><td> <?php echo $row["categorie"]; ?></td></h4></tr>
						   <tr><h4 class="text-danger"><td><u><b>ancien prix:</b></u></td> <td><del><?php echo $row["Article_ancp"]; ?></del> DA</td></h4>  </tr>
						  <tr><h4 class="text-danger"><td><u><b>nouveau prix:</b></u></td> <td><?php echo $row["Article_PUHT"]; ?> DA</td></h4>  </tr>
						 
						</table>
					</div> 
                               <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="hidden_name" value="<?php echo $row['Article_designation'] ?>" />
                            <input type="hidden" name="hidden_image" value="<?php echo $row['image'];?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row['Article_PUHT'];?>">


                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value=" Ajouter aux panier" />  
                          </div>  
                     </form>  
                </div>  

				
                  <?php } } ?>
				 
          	  <?php	     
if(isset($_POST['valider'])){
	 echo"$total";
	 echo"$user";
   $query= "SELECT id FROM clients WHERE email='$user'  ";

//execution de la requete
 $exec_requete = mysqli_query($connect,$query);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['id'];
		
 	 echo"$count";
	 
$date= date("Y-m-d H:i:s");	 

$qu = "INSERT INTO commandes( Com_client,email,Com_montant,com_date ) VALUES( '$count','$user','$total','$date')"; 
$exec_requete = mysqli_query($connect,$qu);

if(!$exec_requete){
    echo '<script language="Javascript">
alert ("erreur!" )
     </script>';}
     else{
        echo '<script language="Javascript">
alert ("votre commande a été  validé" )
     </script>';
echo '<script>window.location="payer.php"</script>';
     }		

}


$query= "SELECT id_com FROM commandes WHERE Com_client='$count'  ";

//execution de la requete
 $exec_requete = mysqli_query($connect,$query);
        $reponse      = mysqli_fetch_array($exec_requete);
        $coun = $reponse['id_com'];
 	 echo"$coun";
	 
if(isset($_POST['enregistrer'])){	 

$modelivraison=$_POST['modelivraison'];  echo"$modelivraison";
$adresse=$_POST['adresse'];
$codepostal=$_POST['codepostal'];	 
$modepaiement=$_POST['modepaiement'];

$q = "INSERT INTO livraison( num_com,modelivraison,adresse,codepostal ) VALUES( '$coun','$modelivraison','$adresse','$codepostal')"; 
$exec_requet = mysqli_query($connect,$q);


 $u= "INSERT INTO paiement( num_com,modepaiement ) VALUES( '$coun','$modepaiement')"; 
$exec_reque = mysqli_query($connect,$u);
 }
 



?>
							   
							   
           </div>  
		   </center>
           <br />  
</div></div></div></div></div></div>
			<br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
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



    



    