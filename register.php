<?php include 'php/reg_form_handler.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register | Unused Medicine Donation System</title>
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
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#aboutUs">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Donate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Request</a>
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
        <div class="container py-3 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-2">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="img/donation.jpeg" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h2 class="mb-4 ms-3 fw-bolder heading">Sign Up Now</h2>
                                    <form action="" method="post">
                                        <div class="row ps-3">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="fname" class="form-control form-control-lg" name="reg_fname" value="<?php if (isset($_SESSION['reg_fname'])) {
                                                                                                                                                    echo $_SESSION['reg_fname'];
                                                                                                                                                } ?>" required />
                                                    <label class="form-label" for="fname">First
                                                        name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="lname" class="form-control form-control-lg" name="reg_lname" value="<?php if (isset($_SESSION['reg_lname'])) {
                                                                                                                                                    echo $_SESSION['reg_lname'];
                                                                                                                                                } ?>" required />
                                                    <label class="form-label" for="lname">Last
                                                        name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row ps-3">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="date" id="dob" class="form-control form-control-lg" name="dob" value="<?php if (isset($_SESSION['dob'])) {
                                                                                                                                            echo $_SESSION['dob'];
                                                                                                                                        } ?>" required />
                                                    <label class="form-label" for="dob">DOB</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-outline pt-2">

                                                    <tr>
                                                        <td>Gender : <input type="radio" name="gender" id="" value="Male" required> Male &nbsp;<input type="radio" value="Female" name="gender" id="" required>Female</td>
                                                    </tr>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4 ps-3">
                                            <input type="email" id="email" name="reg_email" class="form-control form-control-lg" value="<?php if (isset($_SESSION['reg_email'])) {
                                                                                                                                            echo $_SESSION['reg_email'];
                                                                                                                                        } ?>" required />
                                            <label class="form-label" onfocus="this.value=''" for="email">Email Id</label>
                                            <?php if ($error_array != NULL) { ?>
                                                <div class="alert alert-danger" role="alert">

                                                    <?php if (in_array("Email already in use", $error_array)) echo "Email already in use";
                                                    ?>
                                                </div>
                                            <?php } ?>
                                        </div>

                                        <div class="form-outline mb-4 ps-3">
                                            <input type="address" id="address" name="reg_address" class="form-control form-control-lg" value="<?php if (isset($_SESSION['reg_address'])) {
                                                                                                                                                    echo $_SESSION['reg_address'];
                                                                                                                                                } ?>" required />
                                            <label class="form-label" for="address">Address</label>
                                        </div>

                                        <div class="form-outline mb-4 ps-3">
                                            <input type="password" id="password" class="form-control form-control-lg" name="reg_password" value="" required />
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                        <div class="form-outline mb-4 ps-3">
                                            <input type="password" id="cpassword" class="form-control form-control-lg" name="reg_cpassword" value="" required />
                                            <label class="form-label" for="cpassword">Confirm Password</label>
                                            <?php if ($error_array != NULL) { ?>
                                                <div class="alert alert-danger" role="alert">

                                                    <?php if (in_array("Your password doesn't match", $error_array)) echo "Your password doesn't match";
                                                    else if (in_array("Your password can only contain english characters or numbers.", $error_array)) echo "Your password can only contain english characters or numbers.";
                                                    else if (in_array("Your password must be betweeen 5 and 30 characters or numbers", $error_array)) echo "Your password must be betweeen 5 and 30 characters or numbers"; ?>
                                                </div>
                                            <?php } ?>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="reset" class="btn btn-dark btn-lg capsule-btn">Reset
                                                all</button>
                                            <button type="submit" class="btn btn-primary btn-lg ms-2 capsule-btn" name="reg_user">Sign
                                                Up</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4" style="background-color: #532B9F">
            <!-- Left -->
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="text-white me-4">
                    <i class="fa fa-facebook-f"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fa fa-google"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fa fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Company name</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            Here you can use rows and columns to organize your footer
                            content. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Products</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">First</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Second</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Third</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Fourth</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">Your Account</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Become an Donator</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">About Us</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #532B9F; height: 2px" />
                        <p><i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                        <p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
                        <p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #411489">
            © 2022 Copyright:
            <a class="text-white" href="#">UMDS.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>

</html>