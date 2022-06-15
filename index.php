<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akbarazy | Our List</title>

    <link rel="stylesheet" href="static/css/bootstrap.min.css">
</head>

<body>
    <!-- section navbar -->

    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
        <a class="navbar-brand" href="#">Our List</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Section</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="#header">Header</a>
                        <a class="dropdown-item" href="#">Content</a>
                        <a class="dropdown-item" href="#">Pagination</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search">
            </form>
        </div>
    </nav>

    <!-- end navbar -->


    <!-- section header -->

    <div class="jumbotron mt-5" id="header">
        <h1 class="display-4">Our List</h1>
        <p class="lead">Thank you for those of you who have registered and login into our website. Please add yourself to the list if you are interested and enjoy all the features we have provided.</p>
        <hr class="my-4">
        <p>Never interfere with lists that are not about yourself. Because all of this data list has an interest in the purpose of this website.</p>
    </div>

    <!-- end header -->


    <!-- section content -->

    <div class="content" id="content">
        <div class="mx-5">
            <div class="row">

                <!-- make style in media max-width 430px for card -->
                <!-- make style flex 0 0 100% and max-width 100% for card in media max-width 430px -->

                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                    <div class="card mb-4 box-shadow" style="height: calc(100% - 1.5rem);">

                        <!-- make style width 70% for image card -->
                        <!-- make style margin x auto for image card -->
                        <img class="card-img-top" src="images/logo1.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Muhammad Akbar Alfarizy</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                    <div class="card mb-4 box-shadow" style="height: calc(100% - 1.5rem);">
                        <img class="card-img-top" src="images/logo1.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Andrian Setiawan Purnowo Alfahri</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                    <div class="card mb-4 box-shadow" style="height: calc(100% - 1.5rem);">
                        <img class="card-img-top" src="images/logo1.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Salsabila Rizkitai Azzahra</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- end content -->

    <script src="static/js/jquery-3.2.1.slim.min.js"></script>
    <script src="static/js/bootstrap.bundle.min.js"></script>
</body>

</html>