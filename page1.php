<?php 
    session_start();
    
    $name = $_SESSION['name']; 
    $email = $_SESSION['email']; 


    if(isset($_POST["login"]))  
    {  
         if(empty($_POST["username"]) || empty($_POST["password"]))  
         {  
              $message = 'All fields are required';  
         }  
         else  
         {  
              $query = "SELECT * FROM user WHERE name = :name AND password = :password";  
             
              $statement = $connect->prepare($query);  
              $statement->execute(  
                   array(  
                        'name'      =>     $_POST["name"],  
                        'password'  =>     $_POST["password"]  
                   )  
              );  
              $count = $statement->rowCount();  
              if($count > 0)  
              {  
                   $_SESSION["name"] = $_POST["name"];  
                   header("location:index.php");  
              }  
              else  
              {  
                   $message = 'Wrong Data';  
              }  
         }  
    }  


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link href="lib/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="lib/sweet-alert/sweetalert.css" rel="stylesheet">
    <link href="lib/datatables/media/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>
    <!--- Start  -->
<!--- End -->

    <h5>
        thanks you <?php echo $name;?> you have subscribe with the email <?php echo $email;?>
    </h5>

    <script src="lib/bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/sweet-alert/sweetalert.min.js"></script>
    <script src="lib/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="dist/js/script.js"></script>
</body>
</html>