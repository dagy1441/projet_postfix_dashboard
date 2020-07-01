<?php
    if (isset($_POST['submit'])) {
        # start the session
        session_start();
        // session params
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);
        $_SESSION['password'] = htmlentities($_POST['password']);

        // go to page 1 after submiting
        header('Location: index.php');
    }
?>

<?php include('inc/header.php')?>
    <!--- Start  -->
<!--- End -->

<div class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Postfix_</b>Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div class="input-group mb-3">
          <input type="name" name="name" id="name" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
     

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

