  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" style="text-transform: none;" href="index.php">
  <img id="logo" class="img-fluid" src="Logo41.png" alt="">
  
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Tableau de bord</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Menu
</div>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-shopping-bag"></i>
    <span>Produits</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      
      <a class="collapse-item" href="ajouter-produits.php">Ajouter Produit</a>
      <a class="collapse-item" href="produits.php">Gérer Produit</a>
     
    </div>
  </div>
</li>




<!-- Nav Item - catégorie -->
<li class="nav-item">
  
    <div id="collapsecat" class="collapse" aria-labelledby="headingcat" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="ajouter-categorie.php">Ajouter catégorie</a>
        <a class="collapse-item" href="categorie.php">Gérer catégorie</a>

      </div>
    </div>
</li>

<li class="nav-item">
  <a class="nav-link" href="commande.php">
  <i class="fas fa-file-invoice-dollar"></i>
      <span>Commandes</span></a>
   
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
          <h5 class="modal-title" id="exampleModalLabel">êtes vous sûr de vouloir quitter ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selectionner " OUI " pour quitter la session ou " NON " pour annuler.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">NON</button>
          <!-- <a class="btn btn-primary" href="login.html">Logout</a> -->
          <form action="logout.php" method="get">
            <button class="btn btn-primary" name="logout-btn">OUI</button>
          </form>
        </div>
      </div>
    </div>
  </div>

   