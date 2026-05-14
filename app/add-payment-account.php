<?php include('../server/connection.php');




?>
<!DOCTYPE html><!-- saved from url=(0014)about:internet -->
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head><!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>

    <script src="./assets/js/authentication-main.js"></script> <!-- Bootstrap Css -->
    <link id="style" href="./assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Style Css -->
    <link href="./assets/css/styles.min.css" rel="stylesheet"> <!-- Icons Css -->
    <link href="./assets/css/icons.min.css" rel="stylesheet">
    <script src="./assets/js/main.js"></script>
    <script src="./controllers/sweetalert2.all.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain ?>assets/img/newfavicon.jpeg">

</head>

<body>
    <?php


   $id = $_SESSION['id'];

if(isset($_POST['saveAccount'])){

    $btc = mysqli_real_escape_string($connection, $_POST['btc']);
    $ethereum = mysqli_real_escape_string($connection, $_POST['ethereum']);
    $solana = mysqli_real_escape_string($connection, $_POST['solana']);

    // at least one must be filled
    if(
        !empty($btc) ||
        !empty($ethereum) ||
        !empty($solana)
    ){

        mysqli_query($connection, "
            UPDATE users SET
            btc = '$btc',
            ethereum = '$ethereum',
            solana = '$solana'
            WHERE id = '$id'
        ");

        echo "
        <script>
            Swal.fire(
                'Success',
                'Payment account added successfully',
                'success'
            );

            setTimeout(() => {
                window.location.href = '../app/index.php';
            },1000);
        </script>
        ";

    }else{

        echo "
        <script>
            Swal.fire(
                'Warning',
                'At least one wallet address is required',
                'warning'
            );
        </script>
        ";
    }
}


    ?>
    <!-- NAH HERE WEY SIGN UP DEY OOO NO FORGET -->
    <div class="container">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="my-5 d-flex justify-content-center">
                    <a href="../index.php">

                        <!-- <img style="height:100px" src="<?php echo $domain ?>/assets/RALblack.png" alt="logo" class="desktop-logo"> -->
                        <!-- <img src="./assets/images/brand-logos/Aximtrade Pro logo b.png" alt="logo" class="desktop-dark">  -->

                        <!-- <img src="../content/dam/onexp/global/icons/Coke-company-logo-black.svg" alt="logo" class="desktop-logo">
                        <img src="../content/dam/onexp/global/icons/Coke-company-logo-black.svg" alt="logo" class="desktop-dark"> -->
                    </a>
                </div>
                <div class="card">

                <div class="card-body">

                    <h4 class="mb-4 text-center">
                        Add Withdrawal Account
                    </h4>

                    <form method="POST">

                        <div class="mb-3">
                            <label class="form-label">
                                BTC Wallet
                            </label>

                            <input
                                type="text"
                                name="btc"
                                class="form-control"
                                placeholder="Enter BTC wallet"
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Ethereum Wallet
                            </label>

                            <input
                                type="text"
                                name="ethereum"
                                class="form-control"
                                placeholder="Enter Ethereum wallet"
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Solana Wallet
                            </label>

                            <input
                                type="text"
                                name="solana"
                                class="form-control"
                                placeholder="Enter Solana wallet"
                            >
                        </div>

                        <button
                            class="btn btn-primary w-100"
                            name="saveAccount"
                        >
                            SAVE ACCOUNT
                        </button>

                    </form>

                </div>

            </div>
            </div>
        </div>
    </div>
    <!-- Custom-Switcher JS -->
    <script src="./assets/js/custom-switcher.min.js"></script> <!-- Bootstrap JS -->
    <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- Show Password JS -->
    <script src="./assets/js/show-password.js"></script>
    <script src="//code.jivosite.com/widget/rbZ8FspaA4" async></script>

</body>

</html>