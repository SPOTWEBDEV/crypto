<?php
include('../server/connection.php');
include('controllers/authFy.php');
// PREPARE USERS DETAILS;
include('controllers/userDetails.php');
//  FOR INVESTMENT MATURITY
include('controllers/invMTR_CTR.php');
// Log out the mother force;
include('controllers/logOut.php');


function formatNumber($number, $decimals = 2)
{
    // Check if the input is empty or not numeric
    if (empty($number) || !is_numeric($number)) {
        $number = 0;
    }

    // Use number_format to format the number
    return number_format((float)$number, $decimals, '.', ',');
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
    <title>History</title>
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
   
    <style>
        .trade-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            max-width: 400px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .profit-loss {
            background: #fdecec;
            color: #d9534f;
            border-radius: 8px;
            padding: 5px 10px;
            font-weight: bold;
        }

        .buy-text {
            color: #28a745;
            font-weight: bold;
        }

        .currency {
            font-weight: bold;
            color: #00695c;
        }

        .user-badge {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .user-badge img {
            width: 24px;
            height: 24px;
            border-radius: 50%;
        }

        .icon-badge {
            display: inline-block;
            padding: 3px 6px;
            font-size: 12px;
            font-weight: bold;
            border-radius: 5px;
            color: white;
        }

        .icon-fb {
            background: #28a745;
        }

        .icon-check {
            background: #f39c12;
        }

        .icon-c {
            background: #d9534f;
        }
    </style>

</head>

<body>
    <!-- Start Switcher -->
    <?php include('./includes/switcher.php') ?>
    <!-- End Switcher -->
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 350px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .buy {
            color: #28a745;
            font-weight: bold;
        }
        .price {
            font-size: 14px;
            color: #666;
        }
        .target {
            margin-top: 10px;
            font-size: 16px;
        }
        .pl {
            color: red;
            font-weight: bold;
            background: rgba(255, 0, 0, 0.1);
            padding: 5px 10px;
            border-radius: 5px;
        }
        .footer {
            display: flex;
            align-items: center;
            margin-top: 15px;
        }
        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 18px;
            margin-right: 10px;
        }
        .badges span {
            background: #f4f4f4;
            padding: 5px 8px;
            border-radius: 5px;
            font-size: 12px;
            margin-right: 5px;
        }
    </style> -->
    <div class="page">
        <!-- app-header -->
        <?php include('./includes/header.php') ?>
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <?php include('./includes/sidebar.php') ?>

        <!-- End::app-sidebar -->
        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Live trading</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Live trading
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->
                <!-- Start::row-1 -->


                <div class="container mt-4">
                    <div class="trade-card">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="buy-text">BUY</span> <span class="currency">AUDUSD</span> 0.63036 ↑
                            </div>
                            <div class="profit-loss">P/L -2.6</div>
                        </div>
                        <div class="mt-2 text-muted">
                            Open 0.63062 → Target 0.67997
                        </div>
                        <hr>
                        <div class="user-badge">
                            <img src="https://via.placeholder.com/24" alt="User">
                            <span>Robert Davis</span>
                            <span class="text-muted">#1</span>
                            <span class="icon-badge icon-fb">FB</span>
                            <span class="icon-badge icon-check">✔</span>
                            <span class="icon-badge icon-c">C</span>
                        </div>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>





                <!--End::row-1 -->
            </div>
        </div>
        <?php
        for ($br = 0; $br < 20; $br++) {
            echo "<br>";
        }
        ?>
    </div>
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
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
    <!-- Custom-Switcher JS -->
    <script src="./assets/js/custom-switcher.min.js"></script>
    <!-- Custom JS -->
    <script src="./assets/js/custom.js"></script>
</body>

</html>