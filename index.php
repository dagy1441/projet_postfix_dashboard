<?php
    if (isset($_POST['submit'])) {
        # start the session
        session_start();
        // session params
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        // go to page 1 after submiting
        header('Location: page1.php');
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
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

    <h1>
        <?php echo 'yaya';?>
    </h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <input type="text" name="name" id="name" placeholder="enter your name">
        <input type="email" name="email" id="email" placeholder="enter your email">
        <input type="submit" name="submit" value="Submit">
    </form>

    <script src="lib/bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/sweet-alert/sweetalert.min.js"></script>
    <script src="lib/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="dist/js/script.js"></script>
</body>
