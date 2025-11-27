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



function calculateProfitAmount($coin_type, $capital)
{
    $coin_type = strtolower($coin_type); // convert to lowercase for comparison

    if ($coin_type == 'btc') {
        // Example profit calculation for BTC
        return $capital * 0.0004; // 0.04% profit per minute
    } elseif ($coin_type == 'gold') {
        // Example profit calculation for ETH/Gold
        return $capital * 0.0012; // 0.12% profit per minute
    } else {
        return 0; // unknown coin type
    }
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

    <script src="<?php echo $domain ?>app/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $domain ?>app/assets/js/sweetalert2.all.min.js"></script>

    <title>DASHBOARD</title>

</head>

<body>

    <style>
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

        .adaptive-text {
            font-weight: 800;
            /* Extra thick text */
            color: #111;
            /* Dark gray ensures visibility on light mode */
        }

        /* Dark mode */
        @media (prefers-color-scheme: dark) {
            .adaptive-text {
                color: #fff;
                /* White text for dark mode */
            }
        }
    </style>







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
                <div class="row py-2">
                    <div class="col-12 col-md-8 flex flex-wrap d-flex gap-3 justify-content-center mb-3">

                        <div class="card custom-card" style="width:300px !important">
                            <div class="card-header justify-content-between">
                                <div class="card-title">BITCOIN Earning</div>

                            </div>
                            <div class="card-body flex flex-col justify-content-center" style="justify-content: center; align-items: center; display: flex; flex-direction: column;">
                                <img src="<?php echo $domain . 'assets/img/btc.png'  ?>" alt="Bitcoin" style="width:70px;height:70px;margin-bottom:5px;" />
                                <div style="font-size:20px;margin-bottom:10px;">Bitcoin</div>
                                <div class="percent-circle" style="border-top-color:#f7931a;border-right-color:#f7931a;border-left-color:#e0e0e0;border-bottom-color:#e0e0e0;">
                                    <span>43%</span>
                                </div>
                                <p style=" margin-top: 10px;">0.00012btc</p>
                            </div>
                        </div>
                        <div class="card custom-card" style="width:300px !important;">
                            <div class="card-header justify-content-between">
                                <div class="card-title">GOLD Earning</div>
                            </div>

                            <div class="card-body flex flex-col justify-content-center" style="justify-content: center; align-items: center; display: flex; flex-direction: column;">
                                <img src="<?php echo $domain . 'assets/img/gold.png'  ?>" alt="GOLD" style="width:70px;height:70px;margin-bottom:5px;" />
                                <div style="font-size:20px;margin-bottom:10px;">GOLD</div>
                                <div class="percent-circle" style="border-top-color:#26a17b;border-right-color:#26a17b;border-left-color:#e0e0e0;border-bottom-color:#e0e0e0;">
                                    <span>95%</span>
                                </div>
                                <p style=" margin-top: 10px;">50kg</p>

                            </div>







                        </div>

                    </div>

                    <!-- Market Order Form -->
                    <?php



                    if (isset($_POST['mining'])) {
                        $coin_type = mysqli_real_escape_string($connection, $_POST['coin_type']);
                        $capital = mysqli_real_escape_string($connection, $_POST['capital']);

                        $user_balance = $userDetails['wallet'];
                        if ($capital > $user_balance) {
                            echo '<script>
                                Swal.fire({
                                    icon: "error",
                                    title: "Insufficient Balance",
                                    text: "You do not have enough balance to start mining.",
                                    confirmButtonText: "OK"
                                });
                                </script>';
                        } else {

                            // Deduct the capital from user wallet
                            $new_balance = $user_balance - $capital;

                            $mining_capital_btc  = $userDetails['mining_capital_btc'];
                            $mining_capital_gold = $userDetails['mining_capital_gold'];
                            $mining_profit_btc = $userDetails['mining_profit_btc'];
                            $mining_profit_gold = $userDetails['mining_profit_gold'];


                            $profit_amount = calculateProfitAmount($coin_type, $capital);

                            if ($coin_type == 'btc') {
                                $mining_capital_btc += $capital;
                                $mining_profit_btc += $profit_amount;

                                $update_mining_stats = mysqli_query($connection, "UPDATE users SET mining_capital_btc = '$mining_capital_btc', mining_profit_btc = '$mining_profit_btc' , wallet = '$new_balance' WHERE id = '$user_identity'");
                                if ($update_mining_stats) {
                                    echo '<script>
                                    Swal.fire({
                                        icon: "success",
                                        title: "Mining Started",
                                        text: "Your mining has been started successfully.",
                                        confirmButtonText: "OK"
                                    });
                                    </script>';
                                } else {
                                    echo '<script>
                                    Swal.fire({
                                        icon: "error",
                                        title: "Error",
                                        text: "There was an error starting your mining. Please try again.",
                                        confirmButtonText: "OK"
                                    });
                                    </script>';
                                }
                            } elseif ($coin_type == 'gold') {
                                $mining_capital_gold += $capital;
                                $mining_profit_gold += $profit_amount;
                                $update_mining_stats = mysqli_query($connection, "UPDATE users SET mining_capital_gold = '$mining_capital_gold', mining_profit_gold = '$mining_profit_gold' , wallet = '$new_balance' WHERE id = '$user_identity'");
                                if ($update_mining_stats) {
                                    echo '<script>
                                    Swal.fire({
                                        icon: "success",
                                        title: "Mining Started",
                                        text: "Your mining has been started successfully.",
                                        confirmButtonText: "OK"
                                    });
                                    </script>';
                                } else {
                                    echo '<script>
                                    Swal.fire({
                                        icon: "error",
                                        title: "Error",
                                        text: "There was an error starting your mining. Please try again.",
                                        confirmButtonText: "OK"
                                    });
                                    </script>';
                                }
                            }
                        }
                    }


                    ?>
                    <form method="POST" class="col-12 col-md-4" id="tradeForm">
                        <div class="card p-3">
                            <h5 class="card-header" style="font-weight: 900; justify-content: center;display: flex;font-size: 20px;">Place Market Order</h5>


                            <!-- Select Trading Pair -->
                            <div class="mb-2">
                                <label for="tradingPair" class="form-label">Mining Coin</label>
                                <select name="coin_type" class="form-select" id="tradingPair">
                                    <option value="gold">Gold</option>
                                    <option value="btc">Btc Coin</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="capital" class="form-label">Amount</label>
                                <input type="number" name="capital" class="form-control" id="capital" placeholder="Enter Entry Price" required>
                            </div>

                            <div class="mb-2">
                                <label for="profit_amount" class="form-label">Profit in minute</label>
                                <input type="number" name="profit_amount" class="form-control" id="profit_amount" placeholder="1minute => 0.004 btc => 0.012 gold">
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" name="mining" class="btn btn-success w-100 me-1">Mining</button>
                            </div>
                        </div>
                    </form>

                </div>


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