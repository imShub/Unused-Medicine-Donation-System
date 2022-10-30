<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Unused Medicine Donation System</title>
    <?php require 'links.php'; ?>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">UMDS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#aboutUs">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Donate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ngo/index.php">Request</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin/index.php">Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ngo/index.php">NGO</a>
                            </li>
                        </ul>
                        <li class="d-flex">
                            <a class="btn btn-outline-danger m-2" href="register.php"><i class="fa fa-user-plus"></i>
                                Register</a>
                            <a class="btn btn-outline-success m-2" href="login.php"><i class="fa fa-sign-in"></i> Login</a>
                        </li>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main -->
    <main>
        <div class="container-fluid p-0">
            <section id="home" class="home">
                <!-- <img class="img-fluid welcome-img" src="img/background.png" alt="" srcset=""> -->
                <div class="row">
                    <div class="col-md-6 col-sm-12 welcome">
                        <h1 class="welcome-text text-white">
                            Get <br />
                            Started
                        </h1>
                        <p class="text-white" style="padding-left: 200px">
                            Lorem ipsum dolor sit amet <br />
                            consectetur adipisicing elit. Natus at magnam dolor!
                        </p>
                        <button class="btn btn-light donate-button">Donate Now</button>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </section>

            <section class="aboutus custom-bg-color" id="aboutUs">
                <div class="container">
                    <h1 class="heading">About Us</h1>

                    <div class="" style="padding-top: 30px">
                        <div class="row row-cols-md-3 row-cols-1 g-4">
                            <div class="col">
                                <div class="card">
                                    <img src="img/medicine.png" class="card-img-top mx-auto img-fluid pt-3" alt="img/medicine.png" style="width: 100px;">
                                    <div class="card-body">
                                        <div class="card-title d-flex justify-content-center">
                                            <h2 style="color: #411489">Why Medicine ?</h2>
                                        </div>
                                        <p class="card-text text-capitalize">
                                            Our Health is Fundamental Part of being human. Without it, We have nothing,
                                            Report Shows, Nearly 2 Billion People Have No access to basic medicines,
                                            causing a Cascade of Preventable Misery And Suffering.
                                        </p>
                                        <a href="" class="btn btn-outline-dark">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="img/our-vision.png" class="card-img-top img-fluid mx-auto pt-1" alt="img/our-vision.png" style="width: 120px;">
                                    <div class="card-body">
                                        <div class="card-title d-flex justify-content-center">
                                            <h2 style="color: #411489">Our Vision</h2>
                                        </div>
                                        <p class="card-text text-capitalize">
                                            We Drives the future of healthcare by connecting people with surplus
                                            medications. Our System is built to ensure compliance and provide full
                                            liability Protection.
                                        </p>
                                        <a href="" class="btn btn-outline-dark">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="img/join-us.png" class="card-img-top img-fluid mx-auto pt-4" alt="img/join-us.png" style="width: 150px;">
                                    <div class="card-body">

                                        <div class="card-title d-flex justify-content-center">
                                            <h2 style="color: #411489">Join Us</h2>
                                        </div>
                                        <p class="card-text text-capitalize">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit. Consequatur voluptatem aut inventore laborum dolor
                                            similique dolore assumenda facere. Voluptates corporis
                                            alias aut architecto asperiores totam rerum in fugiat,
                                            nemo eveniet quae eaque.
                                        </p>
                                        <a href="" class="btn btn-outline-dark">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer -->

</body>

</html>