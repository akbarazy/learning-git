<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akbarazy | Our List</title>

    <link rel="stylesheet" href="static/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/style-form.css">
</head>

<body class="text-center">

    <!-- section navbar -->

    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
        <a class="navbar-brand">Our List</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-left" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- end navbar -->


    <!-- section content -->

    <form action="" method="post" class="form-signin login">
        <h1 class="h3 mb-3 font-weight-normal">CREATE LIST</h1>

        <?php echo $result; ?>

        <div class="input-group mb-0">
            <div class="input-group-prepend">
                <div class="input-group-text icon-username">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </div>
            </div>
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter your name" required autocomplete="off" autofocus>
        </div>

        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <div class="input-group-text icon-password">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </div>
            </div>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required autocomplete="off">
        </div>

        <button class="btn btn-lg btn-primary btn-block mt-5" name="submit" type="submit">Submit</button>
    </form>

    <!-- end content -->

    <script src="static/js/jquery-3.2.1.slim.min.js"></script>
    <script src="static/js/bootstrap.bundle.min.js"></script>
</body>

</html>