  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="comptes.view.php" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 4 Comptes created
          </a>
          
          <div class="dropdown-divider"></div>
          <a href="domaines.view.php" class="dropdown-item">
            <i class="fas fa-envelope  mr-2"></i> 3 Domaines created
          </a>

          <div class="dropdown-divider"></div>
          <a href="alias.view.php" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 8 Alias created
          </a> 

          <div class="dropdown-divider"></div>
          <a href="users.view.php" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> 8 Alias created
          </a> 

          <div class="dropdown-divider"></div>
          <a href="index.php" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>

      <!-- Authentification Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="users.view.php">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- Message Start -->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <div class="dropdown-divider"></div>
                <a href="login.php" class="dropdown-item">
                  <i class="fas fa-login"></i> Login
                </a>
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">
                  <i class="fas fa-login"></i> Logout
                </a>
              </li>
            </ul>
            <!-- Message End -->
         
          <div class="dropdown-divider"></div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->