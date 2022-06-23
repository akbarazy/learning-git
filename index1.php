<?php
session_start();

// logic for session login
if (isset($_SESSION['login'])) {
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
    <link rel="stylesheet" href="static/css/carousel.css">
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body class="pb-0">

    <!-- section navbar -->

    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
        <a class="navbar-brand">Our List</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index1.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- end navbar -->


    <!-- section header -->

    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption first-carousel-caption text-left">
                            <h1>Welcome To My Website</h1>
                            <p>This is a simple website made by us.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption second-carousel-caption">
                            <h1>Welcome To My Website</h1>
                            <p>This is a website to display your list.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption third-carousel-caption text-right">
                            <h1>Welcome To My Website</h1>
                            <p>You can see the list yourself if you have registered later.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container marketing">

            <div class="row">
                <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
                    <img class="rounded-circle" src="images/logo1.jpeg" alt="My Logo Developer" width="140" height="140">
                    <h2>Hello All</h2>
                    <p>This official website is made by myself. I have provided all the features you need. Please register and login now.</p>
                    <p><a class="btn btn-lg btn-primary" href="register.php" role="button">Register</a></p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Your List Will Be <span class="text-muted">In The Form Of a Card.</span></h2>
                    <p class="lead">So all registered user lists will be in the form of cards, Not a tables.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="images/first-content-image.svg" alt="First Content Image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Ease For Users When <span class="text-muted">Registering.</span></h2>
                    <p class="lead">You do not need to enter your email. Just create a name and password that you like.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="images/second-content-image.png" alt="Second Content Image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Convenience Of User Login <span class="text-muted">After Registering.</span></h2>
                    <p class="lead">What should be entered in the login page? You only need to fill in the login form with your register data.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="images/third-content-image.svg" alt="Third Content Image">
                </div>
            </div>
        </div>

    </main>

    <!-- end header -->


    <!-- section footer -->

    <footer class="page-footer bg-dark mt-5">
        <div class="bg-dark">
            <div class="container">

                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-12 text-center footer-icons">

                        <a href=""><i class="fa fa-youtube-play fa-lg mr-4" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-google fa-lg mr-4" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-whatsapp fa-lg mr-4" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-facebook-official fa-lg mr-4" aria-hidden="true"></i></a>

                    </div>
                </div>

            </div>
        </div>

        <div class="bg-darkblack">
            <div class="container pt-5">
                <div class="row">

                    <div class="col-sm-4 col-md-4 mb-5 footer1">
                        <h6 class="text-uppercase font-weight-bold text-white">Developer</h6>
                        <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width:87px; height: 2px;">
                        <p class="mt-2 text-white">Don't forget to visit our social media. if there is an error on our website, you can visit us <a class="font-weight-bold" href="">Here</a></p>
                    </div>

                    <div class="col-sm-4 col-md-4 mb-5 footer2">
                        <h6 class="text-uppercase font-weight-bold text-white">My Skills</h6>
                        <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width:87px; height: 2px;">
                        <ul class="list-unstyled">
                            <li class="my-2 text-white">HTML</li>
                            <li class="my-2 text-white">CSS</li>
                            <li class="my-2 text-white">Javascript</li>
                            <li class="my-2 text-white">PHP</li>
                        </ul>
                    </div>

                    <div class="col-sm-4 col-md-4 mb-5 footer3">
                        <h6 class="text-uppercase font-weight-bold text-white">About Me</h6>
                        <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width:87px; height: 2px;">
                        <p class="mt-2 text-white">I am a developer of this website. I come from Indonesia. I am 15 years old and still a high school student</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-dark">
            <div class="container pt-3">
                <div class="row d-flex justify-content-center">

                    <div class="col-md-4">
                        <p class="text-grey text-center mb-0">&copy; Copyright | Akbarazy 2022</p>
                        <p class="text-grey text-center">Design by Akbarazy</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- end footer -->

    <!-- <script src="static/js/jquery-3.2.1.slim.min.js"></script> -->
    <script src="static/js/jquery-3.6.0.min.js"></script>
    <script src="static/js/bootstrap.bundle.min.js"></script>
    <script src="static/js/holder.min.js"></script>
</body>

</html>