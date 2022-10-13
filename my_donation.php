<?php require 'php/donate_handeler.php';
require_once 'php/dbconfig.php';
$email = $_SESSION['log_email']; ?>
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
    <title>My Donation | Unused Medicine Donation System</title>
    <?php require 'links.php'; ?>

</head>

<body>

    <script>
        swal({
            title: "Good job <?php echo $_SESSION['fname']; ?> !",
            text: "<?php echo $_SESSION['donate_alert']; ?>",
            icon: "success",
            button: "Ok",
        });
    </script>

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
                                <a class="nav-link" href="donate.php">Donate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">My Donations</a>
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

        <div class="container h-100" style="height: 100vh;">
            <h1 class="mx-auto heading">My Donations</h1>

            <table class="table table-striped table-hover table-bordered  mt-5" id="table" data-filter-control="true" data-show-search-clear-button="false" data-search="true" data-height="460" data-toolbar="#toolbar">
                <thead>
                    <tr>
                        <th scope="col">Sno.</th>
                        <th data-filter-control="input" data-field="bname" scope="col">Brand Name</th>
                        <th data-filter-control="input" data-field="gname" scope="col">Generic Name</th>
                        <th data-filter-control="input" data-field="med_type" scope="col">Medicine Type</th>
                        <th data-filter-control="input" data-field="exp_date" scope="col">Expire Date</th>
                        <th data-filter-control="input" data-field="quantity" scope="col">Quantity</th>
                        <th data-filter-control="input" data-field="donated_dateTime" scope="col">Donated Date & Time</th>

                    </tr>
                </thead>
                <?php $query = "SELECT * from donated_meds WHERE donated_by='$email'";
                $result = mysqli_query($conn, $query);
                if ($result->num_rows > 0) {
                    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $sn = 1;
                    foreach ($row as $data) {

                ?>
                        <tbody>
                            <tr>
                                <td scope="col"><?php echo $sn; ?></td>
                                <td data-filter-control="input" data-field="bname" scope="col"><?php echo $data['brand_name'] ?? ''; ?></td>
                                <td data-filter-control="input" data-field="bname" scope="col"><?php echo $data['generic_name'] ?? ''; ?></td>
                                <td data-filter-control="input" data-field="med_type" scope="col"><?php echo $data['med_type'] ?? ''; ?></td>
                                <td data-filter-control="input" data-field="exp_date" scope="col"><?php echo $data['expire_date'] ?? ''; ?></td>
                                <td data-filter-control="input" data-field="quantity" scope="col"><?php echo $data['quantity'] ?? ''; ?></td>
                                <td data-filter-control="input" data-field="donated_dateTime" scope="col"><?php echo $data['date_time'] ?? ''; ?></td>
                            </tr>
                        </tbody>
                    <?php
                        $sn++;
                    }
                } else { ?>
                    <tr>
                        <td colspan="8" class="text-center">
                            <?php echo "No data found"; ?>
                        </td>
                    <tr>
                    <?php
                } ?>
            </table>
        </div>

    </main>


    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer -->


</body>

</html>