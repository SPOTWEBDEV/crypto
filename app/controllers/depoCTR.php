<?php
include('../../server/connection.php');
include('../../mailer/index.php');
include('userDetails.php');

$user_identity = $userDetails['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./jquery-3.6.0.min.js"></script>
    <script src="<?php echo $domain ?>app/assets/js/sweetalert2.all.min.js"></script>
</head>

<body>

    <?php
    if (isset($_POST['make_depo'])) {
        $user = mysqli_real_escape_string($connection, $_POST['user']);
        $method = mysqli_real_escape_string($connection, $_POST['method']);
        $amount = mysqli_real_escape_string($connection, $_POST['amount']);

      

        $url = $domain . 'app/deposit.php';

       

        $date = date('Y-m-d H:i:s');
        $query = "INSERT INTO deposits (user_id, method, amount, date_deposited, status) 
              VALUES ('$user', '$method', '$amount', '$date', '0')";
        if (mysqli_query($connection, $query)) {
            $url = $domain . 'app/deposits.php';
            echo "<script>
                Swal.fire('Deposit Recorded', 'Your deposit has been successfully recorded.', 'success');
                setTimeout(() => { 
                    window.open('$url', '_self');
                }, 2000);
            </script>";
        } else {
            echo "<script>
                Swal.fire('Error', 'An error occurred: " . mysqli_real_escape_string($connection, mysqli_error($connection)) . "', 'error');
                setTimeout(() => { 
                    window.open('$url', '_self');
                }, 2000);
            </script>";
        }
    }
    ?>

</body>

</html>