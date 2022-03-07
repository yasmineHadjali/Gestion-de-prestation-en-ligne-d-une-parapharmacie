<?php
//connection to database
  session_start();
  $connect = mysqli_connect('localhost','root','','test');

  
  ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                <!-- les cartes -->
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
			
                     <ul class="nav navbar-nav navbar-right">
                        <li><a href="deco.php"><span><i class="glyphicon glyphicon-log-out"></i></span><font color="black"> Déconnexion</a></li>
                         
                        </li>
                     </ul>
               </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
    </nav> 

<center>
<div class="row">
  <div class="col-75">
    <div class="container" style="width:50%;">
      <form action="principale.php" method="post" style="width:100%;">
      
        <div class="row">
          <div class="col-50">
            <h3>Livraison</h3>
			<label for="fname"><i></i> mode de livraison</label>
			<SELECT for="fname" class="fa fa-user" style="width:100%;height:10%;" id="modelivraison" name="modelivraison" required>

    <OPTION id="modelivraison" name="modelivraison">Livraison à domicile 
    <OPTION>Utilisation de points de relais.
    <OPTION>EMS.
    <OPTION>Poste.
	<OPTION>Utilisation des réseaux de trains, de bus et de taxis.
	<OPTION>Retrait en magasin.

</SELECT><br><br>
           
            <label for="adr"><i class="fa fa-address-card-o"></i> Adresse</label>
            <input type="text" id="adresse" name="adresse" placeholder="village/daira/wilaya" required>
      

            <div class="row">
              <div class="col-50">
                <label for="state"></label>
               
              </div>
              <div class="col-50">
                <label for="zip">code postal</label>
                <input type="text" id="codepostal" name="codepostal" placeholder="10001" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Paiement</h3>
            <label for="fname">les cartes acceptable</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
           <label for="fname"><i></i> Mode de paiement</label>
			<SELECT for="fname" class="fa fa-user" style="width:100%;height:10%;" id="modepaiement" name="modepaiement" required>
<OPTION>	Virement CCP.
<OPTION>	Chèque.
<OPTION>    Cartes bancaires.
<OPTION>	Carte de paiement d’Algérie poste (EDHABIYA).
<OPTION>	Paiement mains propres(à la réception).

</SELECT><br><br>
            
            <div class="row">
              <div class="col-50">
                <label for="expyear"></label>
               
              </div>
              <div class="col-50">
                <label for="cvv"></label>
              
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> 
                 Adresse de livraison identique à celle de facturation
        </label>
        <input type="submit" value="enregistrer" class="btn" name="enregistrer" id="enregistrer" style="width:40%;">
      </form>	
    </div>
  </div>
</div>

</body>
</html>
