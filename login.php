<?php


require_once 'db.php';
$db = new Database();


if (isset($_SESSION['user_login'])) {
  header("Location: index.php");
}

if (isset($_REQUEST['login'])) {
  $username = strip_tags($_REQUEST['username']);
  $email    = strip_tags($_REQUEST['email']);
  $password = strip_tags($_REQUEST['password']);

  if (empty($username)) {
    $error_message[] = 'please enter valid username or email';
  }
  if (empty($email)) {
    $error_message[] = 'please enter valid username or email';
  }
  if ( empty($password)){
    $error_message[] = 'please enter valid password';
  }
}else {
  try {
    $req = $db->getDb()->prepare("SELECT name, email FROM user WHERE name=:name OR email=:email");
    $req->execute(
      [
        'name' => $username,
        'email' => $email
      ]
    
    );
    $row = $req->fetch(PDO::FETCH_ASSOC);
    die();
    if ($row->rowCount() > 0) {
      if($username == $row['name'] or $email== $row['email']){
        if (sha1($password) == $row['password']) {
          $_SESSION['user_login'] = $row['id'];
          $login_message = 'Successfully login';
          header("Location: index.php");
        }else{
          $error_message[] = 'wrong password';
        }
      }else{
        $error_message = 'wrong username or email';
      }
      
    }else{
      $error_message = 'wrong username or email';
    }
  } catch (PDOException $e) {
    $e->getMessage();
  }
}

if (isset($error_message)) {
  foreach ($error_message as $error) {
    # code...
    ?>
    <div class="alert alert-danger">
      <strong><?= $error?></strong>
    </div>
    <?php
  }
} 
if (isset($login_message)) {
  # code...
  ?>
  <div class="alert alert-success">
      <strong><?= $login_message?></strong>
    </div>
    <?php

}
  
?>

<?php include 'inc/header.php'?>
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

      <form action="" method="post">
       
        <div class="input-group mb-3">
          <input type="text" name="username" id="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
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
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>





    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

