<?php

session_start();
if(!isset($_SESSION['otpEmail']))
{
    header('location:../login/forget.html');
    exit();
}
else
{
    echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../stylesheet/login.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/svg" href="../images/logo-dots.svg">
    <title>WeConnected | Verify OTP </title>
</head>
<body>
    <div class="container">
        <div id="error">
            
        </div>

        <div id="form">
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off" name="reset-form" id="reset-form">
                <div class="form__input">
                    <label for="otpvalue">OTP</label>
                    <input type="text" name="otpvalue" id="otpvalue" placeholder="Enter 6 digit otp" maxlength="6" >
                </div>
                <div class="form__input" id="btn_verify">
                    <button type="submit" name="verifyotp" id="verifyotp">Verify</button>
                </div>
            </form>
        </div>

        <div id="link">
            Back to Sign In Page<a href="signin.html"> Here</a>
        </div>
    </div>

    <script src="../javascript/verifyotp.js"></script>
    
</body>
</html>
';
}

?>