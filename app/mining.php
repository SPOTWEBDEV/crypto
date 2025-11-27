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
$user_balance = $userDetails['wallet'];


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
    <link rel="icon" href="./assets/images/brand-logos/favicon.ico" type="image/x-icon" />
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

    <script src="<?php echo $domain ?>app/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $domain ?>app/assets/js/sweetalert2.all.min.js"></script>
    <title>Crypto Boxes</title>

    <style>
        body {


            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            gap: 20px;
        }

        .box {
            /* background: #ffffff; */
            width: 150px;
            height: 150px;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            font-size: 18px;
            font-weight: bold;
            padding-top: 10px;
        }

        .box img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .percent-circle {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 10px solid #e0e0e0;
            position: relative;
            margin-top: 15px;
        }

        .percent-circle span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
            font-weight: bold;
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

                <div class="container" style="width: 100%; justify-content: center; gap: 40px;">




                    <div class="card custom-card" style="width:300px !important">
                        <div class="card-header justify-content-between">
                            <div class="card-title">BITCOIN Earning</div>

                        </div>
                        <div class="card-body flex flex-col justify-content-center" style="justify-content: center; align-items: center; display: flex; flex-direction: column;">
                            <img src="https://cryptologos.cc/logos/bitcoin-btc-logo.png" alt="Bitcoin" style="width:70px;height:70px;margin-bottom:5px;" />
                            <div style="font-size:20px;margin-bottom:10px;">Bitcoin</div>
                            <div class="percent-circle" style="border-top-color:#f7931a;border-right-color:#f7931a;border-left-color:#e0e0e0;border-bottom-color:#e0e0e0;">
                                <span>43%</span>
                            </div>
                            <p style="margin-top:15px;font-size:17px;font-weight:bold;">5605172333 BTC</p>

                        </div>
                    </div>

                    <div class="card custom-card" style="width:300px !important">
                        <div class="card-header justify-content-between">
                            <div class="card-title">GOLD Earning</div>

                        </div>
                        <div class="card-body flex flex-col justify-content-center" style="justify-content: center; align-items: center; display: flex; flex-direction: column;">

                            <img src="https://cdn-icons-png.flaticon.com/512/217/217425.png" alt="Gold" style="width:70px;height:70px;margin-bottom:5px;" />
                            <div style="font-size:20px;margin-bottom:10px;">Gold</div>
                            <div class="percent-circle" style="border-top-color:#d4af37;border-right-color:#d4af37;border-left-color:#e0e0e0;border-bottom-color:#e0e0e0;">
                                <span>70%</span>
                            </div>
                            <p style="margin-top:15px;font-size:17px;font-weight:bold;">120 KG</p>

                        </div>
                    </div>
                    
                    <div class="card custom-card" style="width:300px !important">
                        <div class="card-header justify-content-between">
                            <div class="card-title">USDT Earning</div>

                        </div>
                        <div class="card-body flex flex-col justify-content-center" style="justify-content: center; align-items: center; display: flex; flex-direction: column;">

                            <img src="https://cryptologos.cc/logos/tether-usdt-logo.png" alt="USDT" style="width:70px;height:70px;margin-bottom:5px;" />
                            <div style="font-size:20px;margin-bottom:10px;">USDT</div>
                            <div class="percent-circle" style="border-top-color:#26a17b;border-right-color:#26a17b;border-left-color:#e0e0e0;border-bottom-color:#e0e0e0;">
                                <span>95%</span>
                            </div>
                            <p style="margin-top:15px;font-size:17px;font-weight:bold;">250,000 USDT</p>

                        </div>
                    </div>
                </div>

                <!--End::row-1 -->


            </div>
            <!-- End::app-content -->

            <?php
            include('./includes/hoverfooter.php')
            ?>

        </div>



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