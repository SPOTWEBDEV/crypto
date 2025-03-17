<?php
include('../server/connection.php');
include('controllers/authFy.php');
// PREPARE USERS DETAILS;
include('controllers/userDetails.php');
//  FOR INVESTMENT MATURITY
include('controllers/invMTR_CTR.php');
// Log out the mother force;
include('controllers/logOut.php');


// server/operations/trade.php


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
    <title>EMPTY PAGE BRUH</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template" />
    <meta name="Author" content="Spruko Technologies Private Limited" />
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit." />
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
                    <h1 class="page-title fw-semibold fs-18 mb-0">Trading History</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Trading History
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
                                    <th>S/N</th>

                                    <th>Pair</th>
                                    <th>Order Type</th>
                                    <th>Stop Loss</th>
                                    <th>Take Profit</th>
                                    <th>Entry Price</th>
                                    <th>Risk Reward</th>
                                    <th>Total Profit</th>
                                    <th>Profit</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = mysqli_query($connection, "SELECT trade.*,users.name,users.email FROM trade,users WHERE trade.type='self_trade' and trade.user_id = users.id");
                                if (mysqli_num_rows($sql)) {
                                    $count = 1;
                                    while ($details = mysqli_fetch_assoc($sql)) {

                                        $modified_string = str_replace("-", "", $details['pair']);
                                ?>
                                        <tr>
                                            <td><?php echo $count ?></td>
                                         
                                            <td><?php echo $modified_string ?></td>
                                            <td style="text-transform: capitalize; font-size:20px">
                                                <?php
                                                if ($details['status'] == 1) { ?>
                                                    <span class="badge bg-success-transparent ms-2 "><?php echo $details['order_type'] ?></span>
                                                <?php } else { ?>
                                                    <span class="badge bg-warning-transparent ms-2 "><?php echo $details['order_type'] ?></span>
                                                <?php }
                                                ?>
                                            </td>
                                            <td><?php echo $details['stop_loss'] ?></td>
                                            <td><?php echo $details['take_profit'] ?></td>
                                            <td><?php echo $details['entry_price'] ?></td>
                                            <td><?php echo $details['risk_reward'] ?></td>
                                            <td><span class="badge bg-success-transparent">$<?php echo number_format($details['total_profit'],2) ?></span></td>
                                            <td><span class="badge bg-success-transparent">$<?php echo number_format($details['current_price_made'],2) ?></span></td>
                                            <td>
                                                <?php
                                                if ($details['status'] == 'completed' ||  $details['status'] == 'takeprofit') { ?>
                                                  <span class="badge bg-success-transparent ms-2"><?php echo $details['status'] ?></span>
                                               <?php } else if ($details['status'] == 'running') { ?>
                                                <span class="badge bg-warning-transparent ms-2"><?php echo $details['status'] ?></span>
                                                <?php } else { ?>
                                                   <span class="badge bg-danger-transparent ms-2"><?php echo $details['status'] ?></span>
                                            <?php }
                                                ?>
                                            </td>
                                        </tr>
                                <?php
                                        $count++;
                                    }
                                } else {
                                    echo "<tr> 
                                    <td colspan='7'> 
                                    <span class='badge bg-danger-transparent'> NO DATA </span>
                                    </td>
                                    </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--End::row-1 -->
            </div>
        </div>

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