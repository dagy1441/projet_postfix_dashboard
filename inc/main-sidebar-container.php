<?php 
    session_start();
    // $name = $_SESSION['name']; 
    $email = $_SESSION['email']; 

?>
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/client1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $email;?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="../index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PostFix Dashbord
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../comptes.view.php" class="nav-link active">
                  <i class="fas fa-envelope nav-icon"></i>
                  <p>Comptes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../domaines.view.php" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Domaines</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../alias.view.php" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Alias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../users.view.php" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>