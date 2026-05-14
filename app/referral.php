<?php

include('../server/connection.php');
include('controllers/authFy.php');
// PREPARE USERS DETAILS;
include('controllers/userDetails.php');
//  FOR INVESTMENT MATURITY
include('controllers/invMTR_CTR.php');
// Log out the mother force;
include('controllers/logOut.php');

$user_identity = $userDetails['id'];
?>

<?php

$sql = mysqli_query($connection, "SELECT sum(amount) AS trading_balance FROM investments where user_id = '$user_identity'");

while ($row = mysqli_fetch_array($sql)) {
    $trading_balance = $row['trading_balance'];
}


?>

<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain ?>assets/img/newfavicon.jpeg">
    <!-- Choices JS -->
    <script src="./assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Main Theme Js -->
    <script src="./assets/js/main.js"></script>
    <!-- Bootstrap Css -->
    <link id="style" href="./assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Style Css -->
    <link href="./assets/css/styles.min.css" rel="stylesheet" />
    <!-- Icons Css -->
    <link href="./assets/css/icons.css" rel="stylesheet" />
    <!-- Node Waves Css -->
    <link href="./assets/libs/node-waves/waves.min.css" rel="stylesheet" />
    <!-- Simplebar Css -->
    <link href="./assets/libs/simplebar/simplebar.min.css" rel="stylesheet" />
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="./assets/libs/flatpickr/flatpickr.min.css" />
    <link rel="stylesheet" href="./assets/libs/@simonwep/pickr/themes/nano.min.css" />
    <!-- Choices Css -->
    <link rel="stylesheet" href="./assets/libs/choices.js/public/assets/styles/choices.min.css" />
    <!-- <meta name="theme-color" content="#e7ecef" /> -->
     <script src="./controllers/sweetalert2.all.min.js"></script>

    <title>DASHBOARD</title>

    <style>
        .custom-card {
            min-height: 260px !important;
            /* make the box longer */
            padding: 25px !important;
            /* more internal spacing */
            font-size: 1.1rem;
            /* bigger text (optional) */
        }
    </style>


</head>

<body>
    <!-- Switcher -->
    <?php include('./includes/switcher.php') ?>
    <!-- End Switcher -->

    <div class="page">
        <!-- app-header -->
        <?php include('./includes/header.php') ?>
        <!-- /app-header -->

        <!-- Nah the app sidebar be this -->
        <!-- Start::app-sidebar -->
        <?php include('./includes/sidebar.php') ?>
        <!-- Start::app-sidebar -->
        <!-- OMOR NAH HERE WHERE SIDEBAR ENDED OOO -->
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">DAHSBOARD</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Home
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->
                <!-- Start::row-1 -->
                <?php if ($userDetails['account_warning'] == 'yes') { ?>
                    <div class="alert alert-danger text-center"><span class="spinner-grow text-danger spinner-grow-sm"></span> Account warning, please contact support</div>
                <?php } ?>
                <div class="row justify-content-center">

    <div class="col-xl-8 col-lg-10">

        <div class="card custom-card shadow-sm border-0">

            <div class="card-body p-4">

                <div class="text-center mb-4">

                    <div class="mb-3">
                        <span class="avatar avatar-lg bg-primary-transparent">
                            <i class="ri-user-add-line fs-24"></i>
                        </span>
                    </div>

                    <h4 class="fw-bold mb-1">
                        Invite & Earn
                    </h4>

                    <p class="text-muted mb-0">
                        Share your referral link with friends and earn referral bonuses when they register.
                    </p>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Your Referral Link
                    </label>

                    <div class="input-group">

                        <input
                            type="text"
                            id="copyText"
                            class="form-control"
                            value="<?php echo $domain ?>app/register.php?ref=<?php echo $userDetails['ref_id'] ?>"
                            readonly
                        >

                        <button
                            class="btn btn-primary"
                            type="button"
                            onclick="copyReferralLink()"
                        >
                            <i class="ri-file-copy-line me-1"></i>
                            Copy
                        </button>

                    </div>

                </div>

                <div class="alert alert-primary-transparent mb-0">

                    <i class="ri-information-line me-1"></i>

                    Earn rewards whenever someone signs up using your referral link.

                </div>

            </div>

        </div>

    </div>

</div>

<script>

function copyReferralLink() {

    var copyText = document.getElementById("copyText");

    copyText.select();
    copyText.setSelectionRange(0, 99999);

    navigator.clipboard.writeText(copyText.value);

    Swal.fire({
        icon: 'success',
        title: 'Copied',
        text: 'Referral link copied successfully',
        timer: 1500,
        showConfirmButton: false
    });
}

</script>

                <!--End::row-1 -->


            </div>
            <!-- End::app-content -->

            <?php
            include('./includes/hoverfooter.php')
            ?>
            <!-- Footer Start -->
            <!-- <footer class="footer mt-auto py-3 bg-white text-center">
                <div class="container">
                    <span class="text-muted">
                        Copyright © <span id="year"></span>
                        <a href="javascript:void(0);">
                            <span class="fw-semibold text-primary text-decoration-underline">Wealthsomething go enter here remember ooo werey</span>
                        </a>
                        All rights reserved
                    </span>
                </div>
            </footer> -->
            <!-- Footer End -->
        </div>
        <?php include('./includes/popin_with.php') ?>
        <!-- <div class="scrollToTop">
            <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
        </div> -->
        <div id="responsive-overlay"></div>
        <!-- Popper JS -->
        <script src="./assets/libs/@popperjs/core/umd/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Defaultmenu JS -->
        <script src="./assets/js/defaultmenu.min.js"></script>
        <!-- Node Waves JS-->
        <script src="./assets/libs/node-waves/waves.min.js"></script>
        <!-- Sticky JS -->
        <script src="./assets/js/sticky.js"></script>
        <!-- Simplebar JS -->
        <script src="./assets/libs/simplebar/simplebar.min.js"></script>
        <script src="./assets/js/simplebar.js"></script>
        <!-- Color Picker JS -->
        <script src="./assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>
        <!-- Apex Charts JS -->
        <script src="./assets/libs/apexcharts/apexcharts.min.js"></script>
        <!-- Crypto-Dashboard JS -->
        <script src="./assets/js/crypto-dashboard.js"></script>
        <!-- Custom-Switcher JS -->
        <script src="./assets/js/custom-switcher.min.js"></script>
        <!-- Custom JS -->
        <script src="./assets/js/custom.js"></script>
</body>

</html>