     <?php 
             include('security.php'); 
             include('inc/header.php'); 
             include('inc/navbar.php'); 
    ?> 
  <?php
    $sql = 'SELECT * FROM register;';
    $result = mysqli_query($conn,$sql);
    $row_admin = mysqli_fetch_assoc($result);

    $userPicture = !empty($row_admin['picture'])?$row_admin['picture']:'avatar_2x.png';
$userPictureURL = 'uploads/'.$userPicture;

  ?>
 
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content"> 

        <?php include('inc/topnavbar.php'); ?>
          
<div class="container">
  <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Admin Profile</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div> -->
  
<div class="row">
  
  <div class="col-md-4 col-xs-12">

    <div class="card  shadow shadow h-100 py-2"> 
      <div class="card-body">
    
      <!-- <div class="col">left col -->
              
      <form class="form-horizontal form-material" id="form_admin" action="" method="post" enctype="multipart/form-data" target="uploadTarget">
  
      <div class="text-center">
        <img id="img" src="<?php echo $userPictureURL;?>" width="192px" height="192px" class="avatar img-circle img-thumbnail rounded-circle mb-4" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload" id="img_insert"  name="img_insert">
        
      </div>
    </div>
  </div>
    
  
    
</div>



  <div class="col-md-8 col-xs-12">
    <div class="card  shadow h-100 py-2"> 
      <div class="card-body">
    <div class="white-box">
            <div class="form-group">
                <label class="col-md-12">Nom complet</label>
                <div class="col-md-12">
                    <input type="text" value="<?php echo $row_admin['username']; ?>"
                        class="form-control form-control-line" id="user" name="user_up"> </div>
            </div>
            <div class="form-group">
                <label for="example-email" class="col-md-12">Email</label>
                <div class="col-md-12">
                    <input type="email" value="<?php echo $row_admin['email']; ?>"
                        class="form-control form-control-line" 
                        id="example-email"  name="email_up"> </div>
            </div>
            <!-- <div class="form-group">
                <label class="col-md-12">Mot de passe</label>
                <div class="col-md-12">
                    <input type="password" value="password" class="form-control form-control-line">
                </div> -->
            </div>
            <div class="form-group mb-4">
                <label class="col-md-12">Numero de téléphone</label>
                <div class="col-md-12">
                    <input type="text" value="<?php echo $row_admin['numero_tel']; ?>"
                        class="form-control form-control-line" id="tel" name="tel_up"> </div>
            </div>
            <!-- <div class="form-group mb-4">
                <label class="col-sm-12">Choisissez le pays</label>
                <div class="col-sm-12">
                    <select class="form-control form-control-line">
                        <option>London</option>
                        <option>India</option>
                        <option>Usa</option>
                        <option>Canada</option>
                        <option>Thailand</option>
                    </select>
                </div>
            </div> -->
            <div class="form-group">
                <div class="col-sm-12">
                    <button class="btn btn-primary submitBtn" name="update-admin">Mettre à jour le profil</button>
                    
                </div>
            </div>
        </form>
        <iframe id="uploadTarget" name="uploadTarget" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>

      </div>
    </div>
      </div>
    </div>
  <!-- </div>
</div> -->


</div>
</div>
      <!-- End of Main Content -->


   


<?php include('inc/footer.php');?>

