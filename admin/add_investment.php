<?php

include('../server/connection.php');

if (!isset($_SESSION['admin_login_']) && $_SESSION['admin_login_'] != true) echo "<script> window.location.href = 'login.php' </script>";





?>









<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title><?php echo $sitename ?> || Add Payment</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />



    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />



    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->
     <script src="<?php echo $domain ?>app/assets/js/jquery-3.6.0.min.js"></script>
     <script src="<?php echo $domain ?>app/assets/js/sweetalert2.all.min.js"></script>

    

</head>

<body>






    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

            <!-- Menu -->
            <?php include('includes/side_bar.php') ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>


                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
                            </div>
                        </div>
                        <!-- /Search -->


                        <ul class="navbar-nav flex-row align-items-center ms-auto">



                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <a class="github-button" href="https://github.com/themeselection/sneat-html-admin-template-free" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                            </li>



                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="auth-login-basic.html">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->


                        </ul>
                    </div>



                </nav>

                <!-- / Navbar -->


                <!-- Content wrapper -->
                
<?php
// ================== CONFIG ==================


$isUpdate = false;
$investment = [];

/* ================= FETCH FOR UPDATE ================= */
if (isset($_GET['update'])) {
    $isUpdate = true;
    $id = intval($_GET['update']);
    $res = mysqli_query($connection, "SELECT * FROM investments WHERE id = $id");
    $investment = mysqli_fetch_assoc($res);
}

/* ================= SAVE ================= */
if (isset($_POST['saveInvestment'])) {

    $user_id = $_POST['user_id'];
    $plan = $_POST['plan'];
    $amount = floatval($_POST['amount']);
    $profit = floatval($_POST['profit']); // daily profit
    $number_of_day = max(0, intval($_POST['number_of_day']));
    $total = max(0, floatval($_POST['total']));
    $date_invested = $_POST['date_invested'];
    $date_to_mature = $_POST['date_to_mature'] ?: null;
    $ends_on = $_POST['ends_on'] ?: null;
    $status = $_POST['status'];

    if ($isUpdate) {
        $id = intval($_GET['update']);
        $sql = "UPDATE investments SET
            user_id='$user_id',
            plan='$plan',
            amount='$amount',
            profit='$profit',
            number_of_day='$number_of_day',
            total='$total',
            date_invested='$date_invested',
            date_to_mature='$date_to_mature',
            ends_on='$ends_on',
            status='$status'
            WHERE id='$id'";
        $msg = "Investment Updated Successfully";
    } else {
        $sql = "INSERT INTO investments
            (user_id, plan, amount, profit, number_of_day, total, date_invested, date_to_mature, ends_on, status)
            VALUES
            ('$user_id','$plan','$amount','$profit','$number_of_day','$total','$date_invested','$date_to_mature','$ends_on','$status')";
        $msg = "Investment Added Successfully";
    }

    if (mysqli_query($connection, $sql)) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: '$msg',
                confirmButtonColor: '#696cff'
            }).then(() => window.location.href='add_investment.php');
        </script>";
    }
}
?>

<!-- ================== HTML ================== -->
<div class="content-wrapper">
<div class="container-xxl flex-grow-1 container-p-y">

<h4 class="fw-bold py-3 mb-4">
<span class="text-muted fw-light">Admin /</span>
<?= $isUpdate ? 'Update Investment' : 'Add Investment' ?>
</h4>

<div class="row">
<div class="col-xl">
<div class="card mb-4">

<div class="card-header">
<h5 class="mb-0"><?= $isUpdate ? 'Update Investment' : 'Add Investment' ?></h5>
</div>

<div class="card-body">
<form method="POST">

<!-- USER -->
<div class="mb-3">
<label class="form-label">Select User</label>
<select name="user_id" class="form-control" required>
<option value="">-- Select User --</option>
<?php
$users = mysqli_query($connection, "SELECT id,email FROM users");
while ($u = mysqli_fetch_assoc($users)) {
    $sel = ($investment['user_id'] ?? '') == $u['id'] ? 'selected' : '';
    echo "<option value='{$u['id']}' $sel>{$u['email']}</option>";
}
?>
</select>
</div>

<!-- PLAN -->
<div class="mb-3">
<label class="form-label">Investment Plan</label>
<select name="plan" id="plan" class="form-control" required>
<option value="">-- Select Plan --</option>
<option value="STARTER" <?= ($investment['plan'] ?? '')=='STARTER'?'selected':'' ?>>STARTER (10%)</option>
<option value="PROFESSIONAL" <?= ($investment['plan'] ?? '')=='PROFESSIONAL'?'selected':'' ?>>PROFESSIONAL (15%)</option>
<option value="EXECUTIVE" <?= ($investment['plan'] ?? '')=='EXECUTIVE'?'selected':'' ?>>EXECUTIVE (40%)</option>
<option value="PLATINUM" <?= ($investment['plan'] ?? '')=='PLATINUM'?'selected':'' ?>>PLATINUM (80%)</option>
</select>
</div>

<!-- AMOUNT -->
<div class="mb-3">
<label class="form-label">Amount ($)</label>
<input type="number" step="0.01" name="amount" id="amount" class="form-control"
value="<?= $investment['amount'] ?? '' ?>" required>
</div>

<!-- DAILY PROFIT -->
<div class="mb-3">
<label class="form-label">Daily Profit ($)</label>
<input type="number" step="0.01" name="profit" id="profit" class="form-control"
value="<?= $investment['profit'] ?? 0 ?>">
</div>

<!-- DATE INVESTED -->
<div class="mb-3">
<label class="form-label">Date Invested</label>
<input type="date" name="date_invested" id="date_invested" class="form-control"
value="<?= $investment['date_invested'] ?? '' ?>" required>
</div>

<!-- DATE TO MATURE -->
<div class="mb-3">
<label class="form-label">Date To Mature</label>
<input type="date" name="date_to_mature" id="date_to_mature" class="form-control"
value="<?= $investment['date_to_mature'] ?? '' ?>">
</div>

<!-- NUMBER OF DAYS -->
<div class="mb-3">
<label class="form-label">Number of Days</label>
<input type="number" name="number_of_day" id="number_of_day" class="form-control"
value="<?= $investment['number_of_day'] ?? 0 ?>">
</div>

<!-- TOTAL PROFIT -->
<div class="mb-3">
<label class="form-label">Total Profit ($)</label>
<input type="number" step="0.01" name="total" id="total" class="form-control"
value="<?= $investment['total'] ?? 0 ?>">
</div>



<!-- ENDS ON -->
<div class="mb-3">
<label class="form-label">Ends On</label>
<input type="date" name="ends_on" id="ends_on" class="form-control"
value="<?= $investment['ends_on'] ?? '' ?>">
</div>

<!-- STATUS -->
<div class="mb-3">
<label class="form-label">Status</label>
<select name="status" class="form-control">
<option value="0" <?= ($investment['status'] ?? '')==0?'selected':'' ?>>Pending</option>
<option value="1" <?= ($investment['status'] ?? '')==1?'selected':'' ?>>Approved</option>
</select>
</div>

<button type="submit" name="saveInvestment" class="btn btn-primary">
<?= $isUpdate ? 'Update Investment' : 'Add Investment' ?>
</button>

</form>
</div>
</div>
</div>
</div>

</div>
</div>


<!-- ================== JAVASCRIPT ================== -->
<script>
const planPercent = {
    STARTER: 0.10,
    PROFESSIONAL: 0.15,
    EXECUTIVE: 0.40,
    PLATINUM: 0.80
};

function calculateInvestment() {

    const amount = parseFloat(document.getElementById('amount').value) || 0;
    const plan = document.getElementById('plan').value;
    const startDate = document.getElementById('date_invested').value;
    const endDate = document.getElementById('date_to_mature').value;

    const percent = planPercent[plan] || 0;

    // DAILY PROFIT
    const dailyProfit = amount * percent;
    document.getElementById('profit').value = dailyProfit.toFixed(2);

    // DAYS
    let days = 0;
    if (startDate && endDate) {
        const start = new Date(startDate);
        const end = new Date(endDate);
        if (end >= start) {
            days = Math.floor((end - start) / (1000 * 60 * 60 * 24));
        }
    }

    document.getElementById('number_of_day').value = days;

    // TOTAL PROFIT
    document.getElementById('total').value = (dailyProfit * days).toFixed(2);

    // AUTO SET ENDS ON
    document.getElementById('ends_on').value = endDate;
}

// auto calculation
['plan','amount','date_invested','date_to_mature'].forEach(id => {
    document.getElementById(id).addEventListener('input', calculateInvestment);
});

// manual override days
document.getElementById('number_of_day').addEventListener('input', function () {
    let days = parseInt(this.value) || 0;
    if (days < 0) days = 0;
    this.value = days;

    const profit = parseFloat(document.getElementById('profit').value) || 0;
    document.getElementById('total').value = (days * profit).toFixed(2);
});
</script>



                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>



        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


    </div>
    <!-- / Layout wrapper -->




    <!-- <div class="buy-now">
    <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
  </div> -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->



    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->



    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>