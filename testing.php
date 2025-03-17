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
                            <tbody id="tradeTableBody" class="tradeTableBody">
                               
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


    <script>
    function fetchTradeUpdates() {
        console.log('jjj')
        fetch('../server/api/trade.php')
            .then(response => response.json())
            .then(data => {
                

                
                if (data.error) {
                console.error(`Error: ${data.error}`);
            } else if (data.length === 0) {
                console.log("No pending trades found.");
            } else {
                data.forEach(trade => {
                    if (trade.error) {
                        console.error(`Trade ID: ${trade.trade_id} | Error: ${trade.error}`);
                    } else {
                        console.log(`Trade ID: ${trade.trade_id} | Pair: ${trade.pair} | Current Price: ${trade.current_price} | Profit: ${trade.profit} | Status: ${trade.status}`);
                        console.log(trade.message);
                    }
                });
            }
                
            })
            .catch(error => {
                console.error('Error fetching trade updates:', error);
        });
    }

    // Poll every 5 seconds
    setInterval(fetchTradeUpdates, 1000);
    fetchTradeUpdates(); // Initial fetch



    function fetchTable() {
    fetch('../server/api/getTrade.php')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.getElementById('tradeTableBody');
            tableBody.innerHTML = ''; // Clear previous data

            if (data.length > 0) {
                data.forEach(trade => {
                    const row = document.createElement('tr');

                    row.innerHTML = `
                        <td>${trade.trade_id || 'N/A'}</td>
                        <td>${trade.pair || 'N/A'}</td>
                        <td>${trade.order_type || 'N/A'}</td>
                        <td>${trade.stop_loss || 'N/A'}</td>
                        <td>${trade.take_profit || 'N/A'}</td>
                        <td>${trade.entry_price || ''}</td>
                        <td>${trade.risk_reward || ''}</td>
                        <td>${trade.total_profit || ''}</td>
                        <td>${trade.current_price_made || ''}</td>
                    `;

                    // Highlight rows with errors
                    if (trade.error) {
                        row.style.backgroundColor = '#f8d7da'; // Light red for errors
                    } else if (trade.status === 'takeprofit') {
                        row.style.backgroundColor = '#d4edda'; // Light green for profit
                    } else if (trade.status === 'stoploss') {
                        row.style.backgroundColor = '#f8d7da'; // Light red for loss
                    } else {
                        row.style.backgroundColor = '#fff'; // Default white for pending
                    }

                    tableBody.appendChild(row);
                });
            } else {
                const row = document.createElement('tr');
                row.innerHTML = `<td colspan="7">No pending trades found.</td>`;
                tableBody.appendChild(row);
            }
        })
        .catch(error => {
            console.error('Error fetching trade updates:', error);
        });
}

// Poll every second (1000ms)
setInterval(fetchTable, 1000);
fetchTable(); // Initial fetch

</script>



</body>

</html>