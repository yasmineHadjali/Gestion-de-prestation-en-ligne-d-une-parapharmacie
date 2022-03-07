<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>DataTables</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <!-- <link rel="stylesheet" href="main.css">   -->
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">    
      
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">  
        <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
   <link href="../css/sb-admin-2.css" rel="stylesheet"> 

    <!-- Custom styles for this page -->
   <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> 
  </head>
    
  <body id="page-top"> 
  <div id="wrapper">  
      <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" style="text-transform: none;" href="index.html">
  <img id="logo" src="../Logo41.png" alt="">
 
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Action
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-users"></i>
    <span>Clients</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      
      <a class="collapse-item" href="buttons.html">ajouter client</a>
      <a class="collapse-item" href="cards.html">gérer client</a>
      
    </div>
  </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-shopping-bag"></i>
    <span>Produits</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      
      <a class="collapse-item" href="utilities-color.html">ajouter Produit</a>
      <a class="collapse-item" href="utilities-border.html">gérer Produit</a>
     
    </div>
  </div>
</li>



<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-industry"></i>
    <span>compagnie</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="utilities-color.html">ajouter compagnie</a>
      <a class="collapse-item" href="utilities-border.html">gérer compagnie</a>

    </div>
  </div>
</li>

<!-- Nav Item - fournisseur -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
    <!-- <i class="fas fa-fw fa-chart-area"></i> -->
    <i class="fas fa-box"></i>
    <span>fournisseur</span></a>
    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="utilities-color.html">ajouter fournisseur</a>
        <a class="collapse-item" href="utilities-border.html">gérer fournisseur</a>

      </div>
    </div>
</li>
<!-- Nav Item - catégorie -->
<li class="nav-item">
  
    <div id="collapsecat" class="collapse" aria-labelledby="headingcat" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="utilities-color.html">ajouter catégorie</a>
        <a class="collapse-item" href="utilities-border.html">gérer catégorie</a>

      </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <!-- <a class="btn btn-primary" href="login.html">Logout</a> -->
          <form action="logout.php" method="get">
            <button class="btn btn-primary" name="logout-btn">se deconnecter</button>
          </form>
        </div>
      </div>
    </div>
  </div>

   
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
        <div id="content">
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
                <table id="tablaUsuarios" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>id</th>
                            <th>username</th>
                            <th>nom</th>                                
                            <th>email</th>  
                            <th>civilite</th>
                            <th>telephone</th>
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>                           
                    </tbody>        
                </table>               
            </div>
            </div>
        </div>  
    <!-- </div>   
    </div>  
    </div> -->
            </div>
            <!-- End Page Content -->
        </div>
        <!-- End Main Content -->
    </div>
    <!-- End Content Wrapper -->
  </div>
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
      <div class="modal-body shw d-flex justify-content-center">
        
      <tr class="row" >
            <th class="col-6">Username</th>
            <td class="col-6"><span id="username1"></span></td>
            
        </tr>
        
        <div class="row">
        <tr  >
            <th>Nom</th>
            <td ><span id="nom1"></span></td>
        </tr>
        </div>
        <div class="row">
        <tr>
            <th>Email</th>
            <td ><span id="email1"></span></td>
        </tr>
        </div>
        <div class="row">
        <tr>
            <th>Gender</th>
            <td ><span id="civilite1"></span></td>
        </tr>
        </div>
        <div class="row">
        <tr>
            <th>Télephone</th>
            <td ><span id="telephone1"></span></td>
        </tr>
        </div>

      </div>
      <!-- Footer -->
      <div class="modal-footer">
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
                    <label for="" class="col-form-label">User Name:</label>
                    <input type="text" class="form-control" id="username">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">First Name</label>
                    <input type="text" class="form-control" id="nom">
                    </div> 
                    </div>    
                </div>
                <div class="row"> 
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Last Name</label>
                    <input type="text" class="form-control" id="email">
                    </div>               
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Gender</label>
                    <input type="text" class="form-control" id="civilite">
                    </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="form-group">
                        <label for="" class="col-form-label">Password</label>
                        <input type="text" class="form-control" id="telephone">
                        </div>
                    </div>    
                     <!-- <div class="col-lg-3">    
                        <div class="form-group">
                        <label for="" class="col-form-label">Status</label>
                        <input type="number" class="form-control" id="status">
                        </div>            
                    </div>      -->
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
      
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>
     <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script> 
      
    <!-- datatables JS -->
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>  
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.js"></script>

  <!-- Page level plugins -->
   <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script> 
   <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
  <!-- Page level custom scripts --> 
  <script src="../js/demo/datatables-demo.js"></script> 
  
   
  </body>
</html>
