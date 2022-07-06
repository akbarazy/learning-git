<?php
session_start();
require 'functions.php';

if (!isset($_SESSION['login'])) {
    header('location: login.php');
    exit;
}

$resultAlert = create();
if ($resultAlert === '') {
    header('location: index.php');
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
    <link rel="stylesheet" href="static/css/style-fitur.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <link rel="apple-touch-icon" href="images/favicon-apple.png" sizes="180x180" />
    <link rel="icon" href="images/favicon.png" sizes="32x32" />
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

    <form action="" method="post" enctype="multipart/form-data" class="form-signin create-list pt-0">
        <h1 class="h3 mb-3 font-weight-normal">CREATE LIST</h1>

        <?php echo $resultAlert; ?>

        <div class="input-group mb-0">
            <div class="input-group-prepend">
                <label class="input-group-text icon-username" for="username">
                    <div>
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </div>
                </label>
            </div>
            <input type="text" name="name" class="form-control" id="username" placeholder="Enter your name" required autocomplete="off" autofocus>
        </div>

        <div class="input-group mb-0">
            <div class="input-group-prepend">
                <span class="input-group-text icon-upload">
                    <i class="fa fa-upload" aria-hidden="true"></i>
                </span>
                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" required>
                <label class="label-upload" for="inputGroupFile01" style="text-overflow: ellipsis; overflow: hidden; padding-right: 7.5px;">Choose your image</label>
            </div>

        </div>

        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">SUBMIT</button>
        <p class="mt-3 pt-1 text-muted">&copy; Copyright | Akbarazy 2022</p>
    </form>

    <!-- end content -->

    <script src="static/js/jquery-3.2.1.slim.min.js"></script>
    <script src="static/js/bootstrap.bundle.min.js"></script>
    <script>
        // script inputImage
        const inputImage = document.querySelector('input[name="image"]');
        const labelImage = document.querySelector('label[for="inputGroupFile01"]');

        inputImage.addEventListener("change", function() {
            const labelImageTextNode = labelImage.childNodes[0];
            const inputNameImage = document.querySelector("input[type=file]").files[0];

            labelImageTextNode.nodeValue = inputNameImage.name;
            labelImage.style.color = "#50575e";
        });
    </script>
</body>

</html>