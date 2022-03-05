<?php 
session_start();
include_once "../php/config.php";
include_once "../php/loginfunctions.php";
include_once "../php/mainfunctions.php";

if(!isset($_SESSION['otpverfied']))
{
    header('location:../login/signin.html');
    exit();
}
else
{
    echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../stylesheet/login.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/svg" href="../images/logo-dots.svg">
    <title>WeConnected | Change Password </title>
</head>
<body>
    <div class="container">
        <div id="error">
            
        </div>

        <div id="form">
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off" name="changepwd-form" id="changepwd-form">
                <div class="form__input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="'.$_SESSION['otpEmail'].'"  readonly>
                </div>
                <div class="form__input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="'.getUsernameEmail($conn,$_SESSION['otpEmail']).'" readonly>
                </div>
                <div class="form__input">
                    <label for="password">New Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="form__input">
                    <label for="confpassword">Confirm Password</label>
                    <input type="text" name="confpassword" id="confpassword" required>
                </div>
                <div class="form__input" id="btn">
                    <button type="submit" name="reset" id="reset">Reset</button>
                </div>
            </form>
        </div>

        <div id="link">
            Back to Sign In Page<a href="signin.html"> Here</a>
        </div>
    </div>

    <script src="../javascript/changepassword.js"></script>
    
</body>
</html>
';
}

?>