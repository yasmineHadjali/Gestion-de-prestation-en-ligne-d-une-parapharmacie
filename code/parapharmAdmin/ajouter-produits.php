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
      <div id="content" > 

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
              <h6 class="m-0 font-weight-bold text-primary">Ajouter un médicament</h6>
    </div>
                          
    <div class="card-body">
    <div class="white-box">
        <form class="form-horizontal form-material" id="form_add_prd" action="" method="post">
          <div class="row">
            <div class="col md 6">
                <div class="form-group">
                    <label class="col-md-12">Code Médicament</label>
                    <div class="col-md-12">
                        <input type="text" value="<?php //echo $row['username']; ?>"
                            class="form-control form-control-line" name="code_med" id="code_med">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Nom Médicament</label>
                    <div class="col-md-12">
                      <input type="text" value="<?php //echo $row['username']; ?>"
                        class="form-control form-control-line" name="nom_med" id="nom_med">
                    </div>
                </div>
                <div class="form-group mb-4">
                  <label class="col-sm-12">Catégorie</label>
                  <div class="col-sm-12">
                  <?php
                    // $sql =  "INSERT INTO cat3 (categorie) VALUES ('$cat')";
                    $sql =  "SELECT * FROM categorie ";
                    $query_run = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_all($query_run,MYSQLI_ASSOC);
                  ?>
                  <select class="form-control form-control-line" name="cat_med" id="cat">
                  <?php foreach($row as $cl) { ?>
                    <option><?php echo $cl['categorie'];; ?></option>
                  <?php }?>
                  </select>
                </div>
                <div class="form-group">
                    <label for="example-email" class="col-md-12">MFG Date</label>
                    <div class="col-md-12">
                      <input type="date" value="" class="form-control form-control-line" id="mfg" name="date_mfg"> 
                    </div>
                </div>
            </div>
            </div>
            <div class="col md 6">
            <div class="form-group mb-4">
                <label class="col-md-12">Date Expiration</label>
                <div class="col-md-12">
                    <input type="date" value=""
                        class="form-control form-control-line" id="exp" name="date_exp"> 
                    </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Quantité (Total Unités)</label>
                <div class="col-md-12">
                    <input type="text" value="<?php //echo $row['username']; ?>"
                        class="form-control form-control-line" id="qt" name="qt_med"> 
                    </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Prix (Unité)</label>
                <div class="col-md-12">
                    <input type="text" value="<?php //echo $row['username']; ?>"
                        class="form-control form-control-line" id="price" name="price_med"> 
                    </div>
            </div>
            <div class="form-group mb-5">
                <label class="col-md-12">Télécharger photo</label>
                <div class="col-md-12">
                <input type="file" class="text-center center-block file-upload " id="img_med"  name="img_med"> 
            </div>
            </div>
          </div>
            </div>
            </div>
            <div class=" form-group">
                <div class="col-sm-12  text-center">
                    <button class="btn btn-dark text-light insert_pd" id="add_pd" name="add_pd" ><i class="fas fa-pills"></i><strong class="ml-1"> Ajouter Médicament</strong></button>
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
     if(isset($_POST['update'])){
       
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

