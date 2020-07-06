<?php 
    session_start();
    
    $name = $_SESSION['name']; 
    $email = $_SESSION['email']; 

?>

<?php include('inc/header.php')?>
    <!--- Start  -->
<!--- End -->

    <!-- <h1>
        <?php echo 'yaya';?>
    </h1>
    <form action="<?php //echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <input type="text" name="name" id="name" placeholder="enter your name">
        <input type="email" name="email" id="email" placeholder="enter your email">
        <input type="submit" name="submit" value="Submit">
    </form> -->


    <?php include('inc/navbar.php')?>
    <?php require('inc/main-sidebar-container.php')?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header row">
                <div class="col-lg-6">
                  <h5 class="mt-2">All users</h5>
                </div>
                <div class="col-lg-6">
                  <a href="#" class="btn btn-primary m-1 float-right"
                      data-toggle="modal" data-target="#addModal"> 
                    <i class="fas fa-user-plus fa-lg mr-2" aria-hidden="true"></i>
                      Add new user
                  </a>
                  <a href="#" class="btn btn-success m-1 float-right"> 
                    <i class="fas fa-table fa-lg mr-2" aria-hidden="true"></i>
                      Export to excel
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="table-reponsive" id="showUser">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <!-- Add new user Modal  -->
   <?php include('utils/modal.php')?>                          

  
  <?php include('inc/sidebar-control.php')?>


<?php include('inc/footer.php')?>