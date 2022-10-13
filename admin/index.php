<?php include '../php/admin_login_form_handeler.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin Login | Unused Medicine Donation System</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- <link rel="stylesheet" href="css/fontawesome.min.css" /> -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.18.1/extensions/filter-control/bootstrap-table-filter-control.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

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
                    <a class="navbar-brand" href="../index.php">UMDS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
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
                    <div class="card card-registration my-2 w-50 mx-auto">
                        <div class="row g-0">

                            <div class="card-body p-md-5 text-black">
                                <h2 class="mb-4 ms-3 fw-bolder heading">Admin Log In</h2>
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
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Footer -->
    <?php include '../footer.php'; ?>
    <!-- Footer -->


</body>

</html>