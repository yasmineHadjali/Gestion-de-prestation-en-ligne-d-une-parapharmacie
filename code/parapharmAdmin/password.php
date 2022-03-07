    <?php    include('security.php'); 
             include('inc/header.php'); 
             include('inc/navbar.php'); 
    ?> 

<?php
    $sql = 'SELECT * FROM register;';
    $result = mysqli_query($conn,$sql);
    $row_admin = mysqli_fetch_assoc($result);
  ?>
  
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

<!---->
    <?php include('inc/topnavbar.php'); ?>        
<div class="container">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Modifier mot de passe</h1>
  </div>
   <h2 id="msgaf" class="">  </h2> 
                            <!-- //  if(isset($_SESSION['email-PC']) && isset($_SESSION['email-PC']) ){
                            //       echo  $_SESSION['status'] ;
                            //       // unset($_SESSION['status']);
                            //       // $_SESSION['pass'] = 'side' ;
                            //       // echo  $_SESSION['pass'] ;
                            //       // session_unset();   echo ' class="bg-danger text-white" '
                            //       session_destroy();

                            //    } -->
                  
                  
<div class="row d-flex justify-content-center">
<!-- <div class="col-md-4 col-xs-12">

    
    
       <div class="col">left col 
              
  
      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail rounded-circle" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload">
        
      </div>
    
  
    
</div> -->



  <div class="col-md-8 col-xs-12">
    <div class="card  shadow h-100 py-2"> 
       <div class="card-body">
         <div class="white-box">
           <form id="form_newpsd" class="form-horizontal form-material" method="post">
            <h4 class="text-center">Anciennes informations</h4>
            <hr>
            <div class="form-group">
                <label for="example-email" class="col-md-12">Email</label>
                <div class="col-md-12">
                    <input type="email" placeholder="Email"
                        class="form-control form-control-line" name="email-PC"
                        id="example-email"> </div>
            </div>
             <div class="form-group mb-4">
                <label class="col-md-12"> Ancien mot de passe</label>
                <div class="col-md-12">
                    <input type="password" placeholder="password" class="form-control form-control-line" name="password-PC">
                </div> 
                </div>
                <h4 class="text-center">Nouvelle information</h4>
                <hr>
                <div class="form-group mb-4">
                    <label class="col-md-12">Nouveau mot de passe</label>
                    <div class="col-md-12">
                        <input type="password" name="newpassword" class="form-control form-control-line" >
                    </div> 
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12">Retaper le mot de passe</label>
                        <div class="col-md-12">
                            <input type="password" name="confirmnewpassword" class="form-control form-control-line" >
                        </div> 
                        </div>
           
            <div class="form-group">
                <div class="col-sm-12">
                    <!-- <button class="btn btn-primary" name="PC-btn">Mettre à jour le profil</button> -->
                    <input type="submit" class="btn btn-primary" name="PC-btn" value="Mettre à jour le profile">
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>


</div>
</div>
      <!-- End of Main Content -->

 
      <?php include('inc/footer.php');?>