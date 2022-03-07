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
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Commandes</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des commandes</h6>
        </div>
                    <!-- <div class="container caja">
        <div class="row">
            <div class="col-lg-12"> -->
            <div class="card-body">
            <div class="table-responsive">        
                <table id="table_cmd" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>id</th>
                            <th>Num Commande</th>
                            <th>Email </th>                                
                            <th>Montant Commande</th>
                            <th>Date Commande</th>  
                            <!-- <th>Quantité</th> -->
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>                           
                    </tbody>        
                </table>               
            </div>
            </div>
        </div>  
    
            <!-- </div> -->
            <!-- End Page Content -->
        <!-- </div> -->
        <!-- End Main Content -->
    <!-- </div> -->
    <!-- End Content Wrapper -->
  </div>
  <div class="modal fade" id="modalInfCmd"  role="dialog">
  <div class="modal-dialog" >
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Détails de la commande</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body shw ml-3">
        
      <div class="row mb-2" >
            
            <span id="codeMed_af" ></span>
            </div>
        
        
        
            <div class="row mb-1">
            
            <span id="nom_af" ></span>
        
            </div>
        
        
            <div class="row mb-1">
            <span id="prix_af" ></span>
            </div>
    
    
            <div class="row mb-1">
            
            <span id="cat_af" ></span>
        
            </div>
        
    
            <div class="row mb-1">
            <span id="qte_af" ></span>
        
            </div>
            <div class="row mb-1">
            <span id="mfg_af" ></span>
        
            </div>
            <div class="row mb-3">
            <span id="exp_af" ></span>
            
            </div>
            <div id="img_af" class="row mb-3"></div>
            <div  class="row mb-1">
            <img id="img_info" src="" alt="" width="192" height="192" >
            </div>
      </div>
    <!---->
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div> 

<div class="modal fade" id="modalCRUD_cmd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="form_cmd">    
            <div class="modal-body">
            <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Num Commande </label>
                    <input type="text" class="form-control" id="codeCom">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Email</label>
                    <input type="email" class="form-control" id="emlCom">
                    </div> 
                    </div>    
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    <div class="form-group">
                    <label for="" class="col-form-label">Montant Commande</label>
                    <input type="number" step="any" class="form-control" id="mntCom">
                    </div> 
                    </div>
                        
                </div>
                <!-- <div class="row"> 
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Quantité</label>
                    <input type="number" step="any" class="form-control" id="qteMed">
                    </div>               
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Prix</label>
                    <input type="number" step="any" class="form-control" id="priceMed">
                    </div>
                    </div>   -->
                <!-- </div> -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="form-group">
                        <label for="" class="col-form-label">Date Commande</label>
                        <input type="date" class="form-control" id="dateCom">
                        </div>
                    </div>
                    </div>  
                    <!-- <div class="row">
                    <div class="col-lg-7" >                    
                        <div class="form-group">
                        <label for="" class="col-form-label">Date Expiration</label>
                        <input type="date" id="exp"  class="form-control" value="">
                        </div> 
                    </div>    
                    </div> -->
                   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                <button type="submit" id="btnGuardar" class="btn btn-danger" >Sauvegarder</button>
            </div>
        </form>    
        </div>
        </div>
        </div>
        </div>
        
        
        
        <?php include('inc/footer.php');?>
