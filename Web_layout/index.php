<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Example MVC</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Logo -->

    <!-- End Logo -->
    <!-- Menu -->
    <header>
        <div class="container-fluid bg-dark text-white">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container-fluid">
                    <!-- logo php svg -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/711px-PHP-logo.svg.png?20180502235434" alt="php" width="40" height="24" class="d-inline-block align-text-top me-2">
                    <a class="navbar-brand" href="#">PHP MVC</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" href="#">Home</a>
                        </div>
                        <!--Search-->
                        <!-- <form class="d-flex ms-auto">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> -->
                        <!--End Search-->
                        <div class="d-flex ms-auto">
                            <a class="nav-link me-2" href="login">Login</a>
                            <a class="nav-link me-2" href="register">Register</a>
                            <a class="nav-link me-2" href="logout">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- End Menu -->
    <!-- Sidebar -->
    <!-- <aside style="height: 100vh; overflow: auto; position: fixed;" class=" bg-dark text-white border-end border-10 border-dark">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active"><i class="fas fa-user"></i> Profile</a>
                        <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-cog"></i> Settings</a>
                        <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </aside> -->
    <!-- End Sidebar -->

    <!-- Contend -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="container-fluid mt-2">
                    <div class="row">
                        <div class="col-12">
                            <table class=" table table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>
                                            <a href="#"><i class="fas fa-edit me-2"></i></a>
                                            <a href="#"><i class="fas fa-trash-alt me-2"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contend -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <!-- Grid container -->
            <div class="container">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between fixed-bottom p-1 border-top bg-dark text-white">
                    <!-- Left -->
                    <div class="me-5 d-none d-lg-block text-white">
                        All rights reserved. © <?= date('Y') ?> Example MVC
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-github"></i>
                            RMalanco
                        </a>
                    </div>
                    <!-- Right -->
                </section>
            </div>
    </footer>
    <!-- End Footer -->
</body>

<!--font awesome-->
<script src="https://kit.fontawesome.com/3615ff79f2.js" crossorigin="anonymous"></script>
<!--Jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<!--Popper JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha512-6UofPqm0QupIL0kzS/UIzekR73/luZdC6i/kXDbWnLOJoqwklBK6519iUnShaYceJ0y4FaiPtX/hRnV/X/xlUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--Bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>