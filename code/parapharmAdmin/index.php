<?php 
             include('security.php');
             include('inc/header.php'); 
             include('inc/navbar.php'); 
             
    ?> 
     <?php
    $sql = 'SELECT * FROM register;';
    $result = mysqli_query($conn,$sql);
    $row_admin = mysqli_fetch_assoc($result);
    $sql1 = 'SELECT * FROM articles;';
    $result1 = mysqli_query($conn,$sql1);
    $row_art = mysqli_fetch_assoc($result1);
    $sql2 = 'SELECT * FROM clients;';
    $result2 = mysqli_query($conn,$sql2);
    $row_cl = mysqli_fetch_assoc($result2);
    $sql3 = 'SELECT * FROM commandes;';
    $result3 = mysqli_query($conn,$sql3);
    $row_com = mysqli_fetch_assoc($result3);
     ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" >

<!---->        
        <?php include('inc/topnavbar.php'); ?>
        <!-- Begin Page Content -->
        <div class="container-fluid" style="margin-bottom : 300px">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tableau de board</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>
          <div class="row">
            <div class="col-xl-4 col-md-7 mb-4">
              <div class="card border-left-primary  shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-primary  text-uppercase mb-1">Statistique Médicament</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows ($result1); ?></div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-comments fa-2x text-gray-300"></i> -->
                      <i class="fas fa-pills fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-7 mb-4">
              <div class="card border-left-primary  shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-primary  text-uppercase mb-1">Statistique Clients</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows ($result2); ?></div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-comments fa-2x text-gray-300"></i> -->
                      <i class="fas fa-envelope fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-7 mb-4">
              <div class="card border-left-primary  shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-primary  text-uppercase mb-1">Statistique Commandes</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows ($result3); ?></div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-comments fa-2x text-gray-300"></i> -->
                      <i class="fas fa-file-invoice-dollar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
            <div class="row">
            <div class="col-xl-12 col-md-6 mb-4">
    <div class="card border-left-dark shadow h-100 py-2">
      <div class="card-body">
        <div class="row d-flex justify-content-center no-gutters align-items-center">
        <div class=" col-md-offset-1 col-md-4 " style="margin-right : 50px">
                        <a id="ch1" class="btn btn-lg btn-dark btn-blocks col-md-12" href="ajouter-produits.php">
                        <span class="mr-2"><i class="fas fa-plus"></i></span>Ajouter un Produit</a>
                    </div>
                    <div class=" col-md-offset-1 col-md-4">
                        <a id="ch1" class="btn btn-lg btn-dark btn-blocks col-md-12" href="produits.php">
                        <span class="mr-2"><i class="fas fa-table"></i></span>Gérer Produits</a>
                    </div>
        </div>
        
        
        
        <div class="row d-flex justify-content-center no-gutters align-items-center " style="margin-top : 40px;">
        
        <div class=" col-md-offset-1 col-md-4 " >
                        <a id="ch1" class="btn btn-lg btn-dark btn-blocks col-md-12" href="commande.php">
                        <span class="mr-2"><i class="fas fa-table"></i></span>Gérer Commandes</a>
        </div>
        </div>
      </div>
    </div>
  </div>


            </div>
            <!--////////////////////-->
            
          </div>

      <!-- Main Content -->
          
      <!-- End of Main Content -->


      <?php include('inc/footer.php');?>