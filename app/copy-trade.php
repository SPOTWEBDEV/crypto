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
</head>

<body>
    <!-- Start Switcher -->
    <?php include('./includes/switcher.php') ?>
    <!-- End Switcher -->
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
                    <h1 class="page-title fw-semibold fs-18 mb-0">Experts</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Expert Traders
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="table-responsive">
                    <table class="table text-nowrap table-borderless">
    <thead>
        <tr>
            <th scope="col">S/N</th>
            <th scope="col">EXPERT ACCOUNT</th>
            <th scope="col">TOTAL RETURN</th>
            <th scope="col">TOTAL AMOUNT</th>
            <th scope="col">MAX. DRAWDOWN</th>
            <th scope="col">WIN RATE PER TRADE</th>
            <th scope="col">TOTAL TRADES</th>
            <th scope="col">AVERAGE RISE TO REWARD</th>
        </tr>
    </thead>
    <tbody>

        <?php

        $statment = "SELECT * FROM `expert`";
        $query = mysqli_query($connection, $statment);

        if (mysqli_num_rows($query)) {
            while ($details = mysqli_fetch_assoc($query)) {

                // Fetching values from the database
                $win_rate = floatval($details['win_rates']); // Win rate in percentage
                $trades = intval($details['trades']); // Total number of trades
                $total_amount = floatval($details['amount']); // Total capital
                $ratio_str = $details['ratio']; // Risk-reward ratio as a string (e.g., "1:3")

                // Extract the first (risk percentage) and second (gain multiplier) parts of the ratio
                $ratio_parts = explode(":", $ratio_str);
                $risk_percentage = isset($ratio_parts[0]) ? floatval($ratio_parts[0]) : 1; // Default risk 1%
                $gain_multiplier = isset($ratio_parts[1]) ? floatval($ratio_parts[1]) : 2; // Default gain 2x

                // Calculate amount risked per trade (risk percentage of total amount)
                $amount_per_trade = ($risk_percentage / 100) * $total_amount;

                // Calculate total return using the formula
                $total_return = (($win_rate / 100 * $gain_multiplier) - ((1 - $win_rate / 100))) * $trades * $amount_per_trade;

        ?>

                <tr>
                    <td>1</td>
                    <td>
                        <span class="online" style="color:black; display:flex; align-items:center; gap:10px">
                            <img style="width:100px;height:100px;border-radius:10px; object-fit:cover;object-position:center;border-radius:50%" src="<?php echo $domain ?>uploads/expert/2.jpg" alt="img">
                            <p style="font-size:17px"><?php echo $details['expert_name'] ?></p>
                        </span>
                    </td>
                    <!-- Change color to red if total return is negative -->
                    <td style="color: <?php echo ($total_return < 0) ? 'red' : 'green'; ?>">
                        <?php echo number_format($total_return, 2) ?> USD
                    </td>
                    <td >
                        <?php echo number_format($total_amount, 2) ?> USD
                    </td>
                    <td><?php echo $details['max_drawdown'] ?>%</td>
                    <td style="color: <?php echo ($win_rate >= 50) ? 'green' : 'red'  ?>">
                        <?php echo $win_rate ?>%
                    </td>
                    <td><?php echo $trades ?></td>
                    <td><?php echo $details['ratio'] ?>%</td>
                    

                    <td><span class="btn btn-sm text-white bg-primary ms-2 px-4 py-2">Join</span></td>
                </tr>

        <?php }
        }

        ?>

    </tbody>
</table>

                    </div>
                </div>
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