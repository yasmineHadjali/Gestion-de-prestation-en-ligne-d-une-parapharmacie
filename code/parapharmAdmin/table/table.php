<?php 
              include('../security.php'); 
             include('../inc/header.php'); 
             include('../inc/navbar.php'); 
              
// include "config.php";
?>
    
  <?php
    $sql = 'SELECT * FROM register;';
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
  ?>
 
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <?php include('../inc/topnavbar.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Clients</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Datatable Client</h6>
            </div>
            <div class="card-body">
            <?php
                $sql = 'SELECT * FROM clients;';
                $result = mysqli_query($conn,$sql);
                
            ?>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Username</th>
                      <th>Contact</th>
                      <th>Sexe</th>
                      <th>
                          Action
                      </th>
                      <!-- <th>Salary</th>
                      <th>Salary</th> -->
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Username</th>
                      <th>Contact</th>
                      <th>Sexe</th>
                      <th>
                          Action
                      </th>
                    </tr>
                  </tfoot>

      
                  <tbody>
                      <!-- Button trigger modal -->
<!-- wiw -->
 
                    
                  </tbody>


                            
                </table>
              </div>
            </div>
          </div>
           <?php // foreach($result as $row){
              //echo '<script> alert('.$row.') </script>';aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1"
          ?> 
                    <!-- Modal: modalCart -->
 <div class="modal fade" id="modalCart"  role="dialog">
  <div class="modal-dialog" >
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Your cart</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body shw">

        <!-- <table class="table table-hover row">
              
        <table style="width:100%">
        
        </table>
        </table> -->

      </div>
      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div> 
<!-- Modal: modalCart -->
<div class="modal fade" id="modalDelete"  role="dialog">
  <div class="modal-dialog" >
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Delete Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body dlt">

            <p>Are you sure you want to delete data !!</p>
            

      </div>
      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn1 btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn2 btn btn-primary" data-dismiss="modal">Delete Data</button>
      </div>
    </div>
  </div>
</div> 
<!-- Modal: modalCart -->
<!-- Modal: modalCart -->
<div class="modal fade" id="modalDelete1"  role="dialog">
  <div class="modal-dialog" >
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"> Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body dlt1">

            <p>Are you sure you want to delete data !!</p>
            

      </div>
      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn1 btn btn-primary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div> 
<!-- Modal: modalCart -->
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
     
      <?php include('../inc/footer.php');?>
