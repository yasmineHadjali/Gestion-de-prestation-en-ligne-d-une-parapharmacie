<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" style="text-transform: none;" href="index.html">
  <img id="logo" src="Logo41.png" alt="">
 
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
  <a class="nav-link " href="clients.php">
    <i class="fas fa-users"></i>
    <span>Clients</span>
  </a>
  
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-shopping-bag"></i>
    <span>Produits</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      
      <a class="collapse-item" href="ajouter-produits.php">ajouter Produit</a>
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
        <a class="collapse-item" href="ajouter-categorie.php">ajouter catégorie</a>
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
            <button class="btn btn-primary" name="logout-btn">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>

   