<?php require 'php/donate_handeler.php'; ?>
<?php if (!isset($_SESSION['is_login']) && $_SESSION['is_login'] != true) {
    echo 'not logged in';
    header("Location: login.php");
    exit;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donate | Unused Medicine Donation System</title>
    <?php require 'links.php'; ?>

</head>

<body>

    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="userdash.php">UMDS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#aboutUs">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="donate.php">Donate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="my_donation.php">My Donations</a>
                            </li>
                        </ul>
                        <li class="d-flex">
                            <!-- <p class="nav-link m-2" href="logout.php"><i class="fa fa-user"></i>
                                <?php //echo $_SESSION['fname'] . " " . $_SESSION['lname']; 
                                ?>
                            </p> -->
                            <a class="btn btn-outline-success m-2" href="logout.php"><i class="fa fa-sign-out"></i>
                                Logout</a>
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
                                    <h2 class="mb-4 ms-3 fw-bolder heading">Donate Medicines</h2>
                                    <form action="" method="post" class="mt-5 mx-auto">
                                        <div class="row ps-3">
                                            <div class="col-md-12 mb-4">
                                                <div class="form-outline">
                                                    <div class="row my-1">
                                                        <div class="col-4 text-end h5 mt-auto">
                                                            <label class="form-label" for="bname">Brand Name</label>

                                                        </div>
                                                        <div class="col-8">
                                                            <input type="text" id="bname" class="form-control form-control-lg" name="brandName" value="<?php if (isset($_SESSION['brandName'])) {
                                                                                                                                                            echo $_SESSION['brandName'];
                                                                                                                                                        } ?>" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ps-3">
                                            <div class="col-md-12 mb-4">
                                                <div class="form-outline">
                                                    <div class="row my-1">
                                                        <div class="col-4 text-end h5 mt-auto">
                                                            <label class="form-label" for="gname">Generic Name</label>

                                                        </div>
                                                        <div class="col-8">
                                                            <input type="text" id="gname" class="form-control form-control-lg" name="GenName" value="<?php if (isset($_SESSION['GenName'])) {
                                                                                                                                                            echo $_SESSION['GenName'];
                                                                                                                                                        } ?>" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ps-3">
                                            <div class="col-md-12 mb-4">
                                                <div class="form-outline">
                                                    <div class="row my-1">
                                                        <div class="col-4 text-end h5 mt-auto">
                                                            <label class="form-label" for="gname">Type</label>
                                                        </div>
                                                        <div class="col-8">
                                                            <select id="med_type" class="form-control form-control-lg" name="med_type" required>
                                                                <option value="Tablet">Tablet (pcs)</option>
                                                                <option value="Capsule">Capsule (pcs)</option>
                                                                <option value="Syrup">Syrup (ml)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ps-3">
                                            <div class="col-md-12 mb-4">
                                                <div class="form-outline">
                                                    <div class="row my-1">
                                                        <div class="col-4 text-end h5 mt-auto">
                                                            <label class="form-label" for="exp_date">Expiry
                                                                Date</label>

                                                        </div>
                                                        <div class="col-8">
                                                            <input type="date" id="exp_date" class="form-control form-control-lg" name="ExpDate" value="<?php if (isset($_SESSION['ExpDate'])) {
                                                                                                                                                            echo $_SESSION['ExpDate'];
                                                                                                                                                        } ?>" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ps-3">
                                            <div class="col-md-12 mb-4">
                                                <div class="form-outline">
                                                    <div class="row my-1">
                                                        <div class="col-4 text-end h5 mt-auto">
                                                            <label class="form-label" for="quantity">Quantity</label>

                                                        </div>
                                                        <div class="col-8">
                                                            <input type="text" id="quantity" class="form-control form-control-lg" name="quantity" value="<?php if (isset($_SESSION['quantity'])) {
                                                                                                                                                                echo $_SESSION['quantity'];
                                                                                                                                                            } ?>" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>





                                </div>

                                <div class="d-flex justify-content-end pt-1 pe-5">
                                    <button type="reset" class="btn btn-dark btn-lg capsule-btn">Reset
                                        all</button>
                                    <button type="submit" class="btn btn-primary btn-lg ms-2 capsule-btn" name="donate_btn">Donate</button>
                                </div>
                                </form>

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