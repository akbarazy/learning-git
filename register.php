<?php
session_start();
require "functions.php";

$result = regist();
if ($result === true) {
    $_SESSION['regist'] = true;

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
    <link rel="stylesheet" href="static/css/style-login.css">
</head>

<body class="text-center">

    <!-- section navbar -->

    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
        <a class="navbar-brand" href="#">Our List</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-left" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-left" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- end navbar -->


    <!-- section login -->

    <form action="" method="post" class="form-signin mt-5 pt-2 regist">
        <h1 class="h3 mb-3 font-weight-normal">REGISTER</h1>

        <?php echo $result; ?>

        <div class="input-group username">
            <div class="input-group-prepend">
                <div class="input-group-text icon-username">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </div>
            </div>
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter your name" required autocomplete="off" autofocus>
        </div>

        <div class="input-group password">
            <div class="input-group-prepend">
                <div class="input-group-text no-radius icon-password">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </div>
            </div>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required autocomplete="off">
        </div>

        <div class="input-group mb-2 confirm-password">
            <div class="input-group-prepend">
                <div class="input-group-text icon-confirm-password">
                    <i class="fa fa-repeat" aria-hidden="true"></i>
                </div>
            </div>
            <input type="password" name="confirm-password" class="form-control" id="confirm-password" placeholder="Confirm your password" required autocomplete="off">
        </div>

        <div class="checkbox mb-3 row">
            <label class="text-center col-12">
                <input type="checkbox" name="show-password" value="show-password"> Show Password
            </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
        <p class="mt-5">If you already have an account, Please login.</p>
        <p class="mb-3 text-muted">&copy; Copyright | Akbarazy 2022</p>
    </form>

    <!-- end login -->

    <script src="static/js/jquery-3.2.1.slim.min.js"></script>
    <script src="static/js/bootstrap.bundle.min.js"></script>
    <script src="static/js/show-password.js"></script>
</body>

</html>