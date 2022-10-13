<?php include 'php/login_form_handler.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Login | Unused Medicine Donation System</title>
    <?php require 'links.php'; ?>

</head>

<body>
    <script>
        swal({
            title: "Good job!",
            text: "<?php echo $_SESSION['alert']; ?>",
            // text: "Login Creadentials :",
            // text: "Email: " + "<?php echo $_SESSION['reg_email']; ?>",
            // text: "Password: " + "<?php echo $_SESSION['reg_password']; ?>",
            icon: "success",
            button: "Ok",
        });
    </script>
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
                            <a class="btn btn-outline-success m-2"><i class="fa fa-sign-in"></i> Login</a>
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

                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h2 class="mb-4 ms-3 fw-bolder heading">Log In</h2>
                                    <form action="" method="post">



                                        <!-- <div class="form-outline mb-4 ps-3 pt-3">
                                            <label class="form-label" for="type">Login Type</label>
                                            <?php
                                            // require_once 'php/dbconfig.php';

                                            // $query = "SELECT name,id FROM users ORDER BY ID DESC LIMIT  0,6";
                                            // $result = mysqli_query($conn, $query) or die(mysqli_error($conn) . "[" . $query . "]"); 
                                            ?>

                                            <select name="categories">
                                                <?php //while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <option value=" <?php //$row['path']; 
                                                                ?> ">
                                                    <?php //echo $row['name']; 
                                                    ?>
                                                </option>
                                                <?php
                                                //}
                                                ?>
                                            </select>?>
                                            <div class="text-danger">

                                                <?php //if (in_array("Email already in use", $error_array)) echo "Email already in use";
                                                ?>
                                            </div>
                                        </div> -->

                                        <div class="form-outline mb-4 ps-3 pt-3">
                                            <input type="email" id="email" name="log_email" class="form-control form-control-lg" value="<?php if (isset($_SESSION['log_email'])) {
                                                                                                                                            echo $_SESSION['log_email'];
                                                                                                                                        } ?>" required />
                                            <label class="form-label" for="email">Email Id</label>
                                            <div class="alert alert-danger" role="alert">

                                                <?php if (in_array("Email or password was incorrect", $error_array)) echo "Email or password was incorrect";
                                                ?>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4 ps-3 pt-3">
                                            <input type="password" id="password" class="form-control form-control-lg" name="log_password" value="" required />
                                            <label class="form-label" for="password">Password</label>
                                            <div class="alert alert-danger" role="alert">
                                                <?php if (in_array("Email or password was incorrect", $error_array)) echo "Email or password was incorrect"; ?>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="reset" class="btn btn-dark btn-lg capsule-btn">Reset
                                                all</button>
                                            <button type="submit" class="btn btn-primary btn-lg ms-2 capsule-btn" name="log_button">Login Now</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="img/donation.jpeg" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer -->


</body>

</html>