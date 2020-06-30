<?php 
    session_start();
    
    $name = $_SESSION['name']; 
    $email = $_SESSION['email']; 

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