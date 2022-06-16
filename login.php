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
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- end navbar -->


    <!-- section login -->

    <form action="" method="post" class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">LOGIN</h1>
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

        <div class="checkbox mb-3 row">
            <label class="text-left col-12 col-sm-6">
                <input type="checkbox" value="show-password"> Show Password
            </label>

            <label class="text-right col-12 col-sm-6">
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; Copyright | Akbarazy 2022</p>
    </form>

    <!-- end login -->

    <script src="static/js/jquery-3.2.1.slim.min.js"></script>
    <script src="static/js/bootstrap.bundle.min.js"></script>
</body>

</html>