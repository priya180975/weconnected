<?php

include_once "config.php";
include_once "loginfunctions.php";

session_start();

if(isset($_POST['email']))
{       
    $email=$_POST['email'];

    if(invalidEmail($email)) 
    {
        echo "invalid email";
    }
    else
    {
        if(emailExists($conn,$email))
        {
            $rand= rand(100000,999999);
            $_SESSION['otp']=$rand;
            $_SESSION['otpEmail']=$email;
            $text='Request for change of Password OTP : '. $rand;
            

            mail($email,'WeConnected Password Reset',$text,'From: priya_weconnected@yahoo.com');
            echo "otp sent";
        }
        else
        {
            echo "no account with this email exists";
        }
    }
}


if(isset($_POST['otpvalue']))
{
    $otp=$_POST['otpvalue'];

    if($otp==$_SESSION['otp'])
    {
        echo "done";
        unset($_SESSION['otp']);
        $_SESSION['otpverfied']=true;
    }
    else
    {
        echo "invalid";
    }
}





?>