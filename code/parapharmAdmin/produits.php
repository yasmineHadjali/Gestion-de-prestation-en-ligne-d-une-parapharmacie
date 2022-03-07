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
                <h1 class="h3 mb-2 text-gray-800">Produits</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des produits</h6>
        </div>
                    <!-- <div class="container caja">
        <div class="row">
            <div class="col-lg-12"> -->
            <div class="card-body">
            <div class="table-responsive">        
                <table id="tabla" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>id</th>
                            <th>Code</th>
                            <th>Nom Médicament</th>                                
                            <th>Prix</th>
                            <th>Catégorie</th>  
                            <th>Quantité</th>
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
  <div class="" id=""  role="">
  
</div> 


<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD_prd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="form_Prd">    
            <div class="modal-body">
            <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Code Médicament </label>
                    <input type="text" class="form-control" id="codeMed">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Nom Médicament</label>
                    <input type="text" class="form-control" id="nomMed">
                    </div> 
                    </div>    
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    <div class="form-group">
                    <label for="" class="col-form-label">Catégorie</label>
                    <input type="text" class="form-control" id="cat">
                    </div> 
                    </div>
                        
                </div>
                <div class="row"> 
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
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="form-group">
                        <label for="" class="col-form-label">Date MFG</label>
                        <input type="date" class="form-control" id="mfg">
                        </div>
                    </div>
                    </div>  
                    <div class="row">
                    <div class="col-lg-7" >                    
                        <div class="form-group">
                        <label for="" class="col-form-label">Date Expiration</label>
                        <input type="date" id="exp"  class="form-control" value="">
                        </div> 
                    </div>    
                    </div>
                    <div class="row">
                    <div class="col-lg-6" >
                    <div class="form-group">
                    <label for="" class="col-form-label">Choisissez une Image</label>
                    <input type="file" name="aff_pd" id="aff_pd">
                    </div>
                    </div>
                    </div>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <button type="submit" id="btnGuardar" class="btn btn-warning" >Sauvegarder</button>
            </div>
        </form>    
        </div>
        </div>
        </div>
        </div>
        
        
        
        <?php include('inc/footer.php');?>
