<?php 
             include('../security.php'); 
             include('header.php'); 
             include('navbar.php'); 
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
        <?php include('topnavbar.php'); ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Clients</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Datatable Client</h6>
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
                            <th>Nom Médicament</th>
                            <th>Catégorie</th>                                
                            <th>Quantité</th>  
                            <th>Prix</th>
                            <th>Date MFG</th>
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
  <div class="modal fade" id="modalCart"  role="dialog">
  <div class="modal-dialog" >
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!-- Body -->
      <div class="modal-body shw ml-3">
        
      <div class="row">
            
            <span id="nomMed_af"></span>
            </div>
        
        
        
            <div class="row">
            
            <span id="cat_af"></span>
        
            </div>
        
        
            <div class="row">
            <span id="qnt_af"></span>
            </div>
    
    
            <div class="row">
            
        <span id="price_af"></span>
        
        </div>
        
    
        <div class="row">
            <span id="mfg_af"></span>
        
            </div>
            <div class="row">
            <span id="exp_af"></span>
        
            </div>
      </div>
    <!---->
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div> 
<!-- Modal: modalCart -->
    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>    
            </div>    
        </div>    
    </div>    
    <br>   -->

    <!-- <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablaUsuarios" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>id</th>
                            <th>username</th>
                            <th>nom</th>                                
                            <th>email</th>  
                            <th>civilite</th>
                            <th>telephone</th>
                             <th>Acciones</th> 
                        </tr>
                    </thead>
                    <tbody>                           
                    </tbody>        
                </table>               
            </div>
            </div>
        </div>  
    </div>    -->

<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formUsuarios">    
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Nom Médicament </label>
                    <input type="text" class="form-control" id="nomMed">
                    </div>
                    </div>
                    <div class="col-lg-6">
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
                    <input type="number" class="form-control" id="qnt">
                    </div>               
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Prix</label>
                    <input type="number" class="form-control" id="price">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark" >Guardar</button>
            </div>
        </form>    
        </div>
        </div>
        </div>
        </div>
        
        
        
        <?php include('footer.php');?>
