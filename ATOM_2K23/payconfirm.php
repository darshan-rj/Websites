<?php
@ob_start();
session_start();

if (isset($_GET['data'])) {

    include_once 'includes/dbh.inc.php';

    $response = $_GET['data'];

    function decryptData($data)
    {
        $cipher = "aes-256-cbc";
        $iv = hex2bin("4690ed68f7b720fcbe2b820d8307cb67");
        $encryption_key = "31a4135318fb765bb037aa53ee1ed3ed";
        $decryptedText = openssl_decrypt($data, $cipher, $encryption_key, 0, $iv);
        return $decryptedText;
    }

    $decryptedresponse = decryptData($response);
    $arr_response = explode("&", $decryptedresponse);

    // echo $arr_response[0];
    // echo '<br>';
    // echo $arr_response[1];
    // echo '<br>';
    // echo $arr_response[2];
    // echo '<br>';
    // echo $arr_response[3];
    // echo '<br>';
    // echo (int)$arr_response[3];
    // echo '<br>';
    // echo substr($arr_response[3],0,1);
    // echo '<br>';
    // echo 0;
    // $id1 = $arr_response[0];
    $id = substr($arr_response[0], 6);
    $category = $arr_response[1];
    $transaction_id = $arr_response[2];
    // $status = (int)substr($arr_response[3],0,1);
    $status = (int)substr($arr_response[3], 0, 1);

    if ($id == 0) {
        echo '<h2>contact support</h2>';
        echo '<h2>SASHANK - 6383405138 </h2>';
    } else {

        if ($status == 1) {
            $sql = "SELECT * FROM payment WHERE transaction_id='$transaction_id'";
            $req = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            $row1 = mysqli_fetch_array($req);
            $pay_status = $row1['payment_status'];
            if ($pay_status != "success") {

                $query = "UPDATE payment SET payment_status='success' WHERE transaction_id='$transaction_id'";
                $update = mysqli_query($conn, $query) or die(mysqli_error($conn));
                $equery = "SELECT * FROM members WHERE id='$id'";
                $result1 = mysqli_query($conn, $equery) or die(mysqli_error($conn));
                $row = mysqli_fetch_array($result1);
                $email = $row['email'];
                $name = $row['fname'];
                $hero = "Payment Successful!";
                $type = explode("_", $decryptedresponse)[1];
                switch ($type) {
                    case "CLO":
                        $wsname = "CLOUD COMPUTING";
                        break;
                    case "SMA":
                        $wsname = "SMART ROVER USING IOT";
                        break;
                    default:
                        echo $type;
                        break;
                }
                if (isset($wsname)) {

                    $query = "UPDATE workshops SET `$wsname`='paid' WHERE email='$email'";
                    $update = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    $sql1 = "UPDATE members SET workshops=concat('$wsname' , ', ' , workshops) WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                    $subject = "ATOM - Workshop Registration Confirmation";
                    $message = "Dear " . $name . ",<br/>

                Greetings from IEEE SC 12951! Thank you for being a part of ATOM 2K23. You have successfully
                registered for " . $wsname . " workshop. Please adhere to the timings. 
                <br/><br><br/>
                ATOM ID: ATOM23" . $id . "
                <br/>
                Participate in our exclusive events and take back priceless skills along with fun-filled memories!!!
                <br/>
                For more details and queries :<br/>
                Contact:<br/>
                SASHANK TM - 6383405138 <br/>
                KRISHNA RS - 9500288886 <br/>
                SHUBIKSHA M - 8110815874 <br/>


                E-mail \t - \t teamatom2k23@gmail.com <br/>
                <br/>
                With Warm Regards,<br/>
                Team ATOM 2K23.";
                }

                require 'phpmailer/PHPMailerAutoload.php';
                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'teamatom2k23@gmail.com';
                $mail->Password = 'jdrpktcdfoctenpn';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->AddReplyTo("teamatom2k23@gmail.com");
                $mail->From = "teamatom2k23@gmail.com";
                $mail->FromName = "Team ATOM2k23";
                $mail->AddAddress($email);
                //$mail->addAddress('', 'Admin');     // Add a recipient

                $mail->isHTML(true);

                $mail->Subject = $subject;
                $mail->Body = $message;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
            } else {
                header("location:./index.php ");
            }
        } else {
            $hero = "Payment Failed";
        }


?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">

            <title>ATOM 2k23 </title>
            <meta content="" name="description">
            <meta content="" name="keywords">

            <!-- Favicons -->
            <link href="assets/img/favicon.ico" rel="icon">
            <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

            <!-- Google Font -->
            <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

            <!-- Vendor CSS Files -->
            <link href="assets/vendor/aos/aos.css" rel="stylesheet">
            <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
            <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
            <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
            <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>

            <link href="assets/css/payconfirm.css" rel="stylesheet">





        </head>

        <body>

            <div class="thankyou-page">
                <div class="_header">
                    <div class="logo">
                        <!-- <img src="" alt=""> -->
                    </div>
                    <h1><?php echo $hero; ?></h1>
                </div>
                <div class="_body">
                    <div class="_box">
                        <?php if ($status >= 1) { ?>
                            <h2>
                                <strong>Thank You!</strong> Your payment was successful.
                            </h2>
                            <p>
                                Further details will be sent through mail. Happy to have you here with us soon!
                            </p>
                        <?php } else { ?>
                            <h2>
                                <strong>Unfortunately, your payment was not successful.</strong>We apologize for the inconvenience.
                            </h2>
                            <p>
                                We apologize for the inconvenience.Try the following steps:
                            </p>
                            <ul>
                                <li>Retry after a few minutes.</li>
                                <li>Clear the browser cache and try again.</li>
                                <li>If the above-mentioned steps do not work, contact us for further assistance.</li>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
                <div class="_foot">
                    <p class="tec">Having trouble? <a href="tel:+916383405138">Contact us</a> </p>
                    <a class="btn" href="index.php">Back to home</a>
                </div>
            </div>

            <!-- Vendor JS Files -->
            <script src="assets/vendor/aos/aos.js"></script>
            <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="assets/vendor/typed.js/typed.min.js"></script>

            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>


        </body>

        </html>


<?php
    }
} else {
    header("location:index.php ");
}
?>