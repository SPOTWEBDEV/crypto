<?php
include('../../server/connection.php');
include('../../mailer/index.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo $domain ?>app/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $domain ?>app/assets/js/sweetalert2.all.min.js"></script>
</head>

<body>
    <?php

    if (isset($_POST['createUser'])) {
        $user = mysqli_real_escape_string($connection, $_POST['user']);
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $phone = mysqli_real_escape_string($connection, $_POST['phone']);
        $country = mysqli_real_escape_string($connection, $_POST['country']);
        $pass = mysqli_real_escape_string($connection, $_POST['pass']);
        $rp_pass = mysqli_real_escape_string($connection, $_POST['rp_pass']);
        $ref = mysqli_real_escape_string($connection, $_POST['ref']);
        $ref_id = rand();
        $registered = date('Y-m-d H:i:s');

        if ($pass !== $rp_pass) {
            echo "<script>Swal.fire('Password Mismatch','Passwords do not match','error')</script>";
            echo "<script>setTimeout( ()=> { window.location.href = '../register.php' }, 1000)</script>";
            exit;
        }

        $checkUserQuery = $connection->prepare("SELECT * FROM `users` WHERE `email` = ?");
        $checkUserQuery->bind_param("s", $email);
        $checkUserQuery->execute();
        $checkUser = $checkUserQuery->get_result();



        if ($checkUser->num_rows == 0) {
            if (!empty($user) && !empty($name) && !empty($email) && !empty($phone) && !empty($country) && !empty($pass)) {

                if ($ref != '') {
                    $check = mysqli_query($connection, "SELECT `id`,`referral_balance` FROM `users` WHERE `ref_id`='$ref'");

                    if (!mysqli_num_rows($check)) {
                        echo "<script>Swal.fire('referral Error', 'The referral link you provided is incorrect. Please check and try again.', 'error');</script>";
                        echo "<script>setTimeout( ()=> { window.location.href = '../register.php' }, 1000)</script>";
                        return;
                    }

                    // GET USER ID
                    $row = mysqli_fetch_assoc($check);
                    $user_id = $row['id'];
                    $referral_balance = $row['referral_balance'];


                    // GETTING THE SUPPOSE REF BAL ASSIGN BY ADMIN TO USER
                    $getref_bal = mysqli_query($connection, "SELECT `ref_bal` FROM `site`");
                    $bal = mysqli_fetch_assoc($getref_bal);
                    $the_bal = $bal['ref_bal'];


                    $referral_balance = $referral_balance + $the_bal;

                    $update = mysqli_query($connection, "UPDATE `users` SET `referral_balance`='$referral_balance' WHERE `id`='$user_id'");
                }




                $createUserQuery = $connection->prepare("INSERT INTO `users`(`user`, `name`, `email`, `phone`, `profile_image`, `password`, `country`, `wallet`, `ref_wallet`, `gain_wallet`, `ref_id`, `referree`, `date_registered`, `paid_ref`, `dn_with`, `status`) VALUES (?, ?, ?, ?, '--', ?, ?, 0, 0, 0, ?, ?, ?, 0, 0, 0)");
                $createUserQuery->bind_param("sssssssss", $user, $name, $email, $phone, $pass, $country, $ref_id, $ref, $registered);
                $createUser = $createUserQuery->execute();

                if ($createUser) {
                    $body = "
<html>
<body style='font-family: Arial, sans-serif; background:#f4f4f4; padding:20px;'>

<div style='max-width:600px; margin:auto; background:#ffffff; padding:30px; border-radius:8px;'>

<h2 style='color:#131722;'>Welcome to $sitename</h2>

<p>Hello $name,</p>

<p>Thank you for creating an account with us.</p>

<p>Your account has been successfully registered and you can now log in to access your dashboard and explore our services.</p>

<p>If you have any questions, feel free to contact our support team at 
<a href='mailto:$siteemail'>$siteemail</a>.
</p>

<p>Best regards,<br>
$sitename Team</p>

<hr>

<p style='font-size:12px; color:#777;'>
© " . date('Y') . " $sitename. All rights reserved.
</p>

</div>

</body>
</html>
";
                    $to = $email;
                    $subj = "Welcome to $sitename  ! ";
                    $result = smtpmailer($to, $siteemail, $sitename, $subj, $body);


                    echo "<script>Swal.fire('Account Created', 'Your account has been created successfully', 'success')</script>";
                    $url = $domain . 'app/login.php';
                    echo "<script>setTimeout(() => { 
                            window.open('$url', '_self');
                        }, 1000)</script>";
                } else {
                    echo "<script>Swal.fire('Account Error', 'Error creating account', 'error')</script>";
                    echo "<script>setTimeout(() => { window.location.href = '../register.php' }, 1000)</script>";
                }
            } else {
                echo "<script>Swal.fire('Input Error','Some of your inputs are empty','error')</script>";
                echo "<script>setTimeout( ()=> { window.location.href = '../register.php' }, 1000)</script>";
            }
        } else {
            echo "<script>Swal.fire('Details Error','The details you provided are already in use','error')</script>";
            echo "<script>setTimeout( ()=> { window.location.href = '../register.php' }, 1000)</script>";
        }
    }
    ?>
</body>

</html>