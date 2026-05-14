<?php
include('../server/connection.php');
include('controllers/authFy.php');
// PREPARE USERS DETAILS;
include('controllers/userDetails.php');

// Log out the mother force;
include('controllers/logOut.php');





?>

<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>APPLICATION</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template" />
    <meta name="Author" content="Spruko Technologies Private Limited" />
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit." />
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
    <script src="<?php echo $domain ?>app/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $domain ?>app/assets/js/sweetalert2.all.min.js"></script>
</head>

<body>
    <!-- Start Switcher -->
    <?php include('./includes/switcher.php') ?>
    <!-- End Switcher -->
    <div class="page">

        <!-- app-header -->
        <?php include('./includes/header.php') ?>

        <!-- app-sidebar -->
        <?php include('./includes/sidebar.php') ?>

        <?php

        if (isset($_POST['apply_loan'])) {

            $amount = mysqli_real_escape_string($connection, $_POST['amount']);
            $reason = mysqli_real_escape_string($connection, $_POST['reason']);
            $duration = mysqli_real_escape_string($connection, $_POST['duration']);

            // Interest Rate
            if ($duration == "30") {
                $interest = 0.10;
            } elseif ($duration == "60") {
                $interest = 0.20;
            } elseif ($duration == "90") {
                $interest = 0.30;
            } else {
                $interest = 0;
            }

            // Amount To Pay Back
            $payback_amount = $amount + ($amount * $interest);

            if (!empty($amount) && !empty($reason) && !empty($duration)) {

                $insert_loan = mysqli_query($connection, "

                INSERT INTO loans
                (
                    user_id,
                    amount,
                    reason,
                    duration,
                    payback_amount
                )

                VALUES
                (
                    '$id',
                    '$amount',
                    '$reason',
                    '$duration',
                    '$payback_amount'
                )

            ");

                if ($insert_loan) {

                    echo "
                    <script>

                        Swal.fire(
                            'Success',
                            'Loan Application Submitted Successfully',
                            'success'
                        )

                    </script>
                ";

                    echo "
                    <script>

                        setTimeout(() => {

                            window.location.href='./loan.php'

                        },3000)

                    </script>
                ";
                } else {

                    echo "
                    <script>

                        Swal.fire(
                            'Error',
                            'Something Went Wrong',
                            'error'
                        )

                    </script>
                ";
                }
            } else {

                echo "
                <script>

                    Swal.fire(
                        'Error',
                        'All Fields Are Required',
                        'error'
                    )

                </script>
            ";
            }
        }

        ?>

        <!-- Start::app-content -->
        <div class="main-content app-content">

            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">

                    <h1 class="page-title fw-semibold fs-18 mb-0">
                        APPLY FOR LOAN
                    </h1>

                    <div class="ms-md-1 ms-0">

                        <nav>

                            <ol class="breadcrumb mb-0">

                                <li class="breadcrumb-item">
                                    <a href="#">Dashboard</a>
                                </li>

                                <li class="breadcrumb-item active">
                                    Loan Application
                                </li>

                            </ol>

                        </nav>

                    </div>

                </div>

                <!-- Loan Form -->
                <div class="row">

                    <div class="col-xl-6">

                        <div class="card custom-card">

                            <div class="card-header justify-content-between">

                                <div class="card-title">
                                    Loan Application Form
                                </div>

                            </div>

                            <form method="POST" class="card-body">

                                <!-- Loan Amount -->
                                <div class="form-floating mb-3">

                                    <input
                                        type="number"
                                        name="amount"
                                        id="loan_amount"
                                        class="form-control"
                                        placeholder="Loan Amount"
                                        required>

                                    <label>
                                        Loan Amount ($)
                                    </label>

                                </div>

                                <!-- Reason -->
                                <div class="form-floating mb-3">

                                    <textarea
                                        name="reason"
                                        class="form-control"
                                        placeholder="Reason"
                                        style="height:120px;"
                                        required></textarea>

                                    <label>
                                        Reason For Loan
                                    </label>

                                </div>

                                <!-- Duration -->
                                <div class="mb-3">

                                    <label class="form-label">
                                        Loan Duration
                                    </label>

                                    <select
                                        name="duration"
                                        id="loan_duration"
                                        class="form-select"
                                        required>

                                        <option value="">
                                            Select Duration
                                        </option>

                                        <option value="30">
                                            30 Days
                                        </option>

                                        <option value="60">
                                            60 Days
                                        </option>

                                        <option value="90">
                                            90 Days
                                        </option>

                                    </select>

                                </div>

                                <!-- Amount To Pay Back -->
                                <div class="form-floating mt-3">

                                    <input
                                        type="text"
                                        id="payback_amount"
                                        class="form-control"
                                        placeholder="Amount To Pay Back"
                                        readonly>

                                    <label>
                                        Amount To Pay Back
                                    </label>

                                </div>

                                <!-- Submit -->
                                <div class="mt-4">

                                    <button
                                        class="btn btn-primary"
                                        name="apply_loan"
                                        type="submit">
                                        APPLY FOR LOAN
                                    </button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Loan Calculator -->
    <script>
        const loanAmount = document.getElementById('loan_amount');
        const loanDuration = document.getElementById('loan_duration');
        const paybackAmount = document.getElementById('payback_amount');

        function calculateLoan() {

            let amount = parseFloat(loanAmount.value) || 0;

            let duration = loanDuration.value;

            let interest = 0;

            if (duration == "30") {

                interest = 0.10;

            } else if (duration == "60") {

                interest = 0.20;

            } else if (duration == "90") {

                interest = 0.30;

            }

            let total = amount + (amount * interest);

            paybackAmount.value = "$" + total.toFixed(2);

        }

        loanAmount.addEventListener('input', calculateLoan);

        loanDuration.addEventListener('change', calculateLoan);
    </script>
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