<?php 
             include('security.php'); 
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

        <?php include('inc/topnavbar.php'); ?>
        
<div class="container" style="margin-bottom : 300px;">
  <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Admin Profile</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div> -->
<div class="row">
  




  <div class="col-lg-12 col-md-8 col-xs-12">
    <div class="card  shadow h-100 py-0"> 
    <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ajouter une catégorie</h6>
    </div>
             
    <div class="card-body">
    <div class="white-box">
        <form class="form-horizontal form-material" id="form_add_cat" name="form_add_cat" action="" method="post">
            <div class="form-group">
                <label class="col-md-12">Nom Catégorie</label>
                <div class="col-md-12" id="">
                    <input type="text" value=""
                        class="form-control form-control-line" name="cat" id="cat" placeholder="Veuillez saisir le nom de la catégorie"> </div>
            </div>
            
            <div class=" form-group">
                <div class="col-sm-12  text-center">
                    <button  class="btn btn-dark insert_cat"  id="insert_cat"  ><i class="fas fa-pills"></i><strong class="ml-1"> Ajouter Catégorie</strong></button>
                </div>
            </div>
        </form>
      </div>
    </div>
      </div>
    </div>
  <!-- </div>
</div> -->


</div>
</div>
      <!-- End of Main Content -->


      <?php

// include('Database/dbconfig.php');
     if(isset($_POST['update-admin'])){
       
       $query1="UPDATE `register` SET username='$_POST[user_up]' , email='$_POST[email_up]' , numero_tel='$_POST[tel_up]' ";
       $query1_run = mysqli_query($conn,$query1);
       if($query1_run){
         echo '<script type ="text/javascript"> alert("Data Updated") </script>';
       }else{
         echo '<script type ="text/javascript"> alert("mamchatch") </script>';
       }

     }

?> 



<?php include('inc/footer.php');?>

