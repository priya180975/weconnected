<?php
    session_start();
    include_once "config.php";
    include_once "loginfunctions.php";
    include_once "messagefunctions.php";

    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmpwd=$_POST['confpassword'];


    if(empty($password)||empty($confirmpwd))
    {
        echo "Password should not be empty";
    }
    else
    {
        if(!matchPasswordfail($password,$confirmpwd))
        {
            $passwordHashed=password_hash($password,PASSWORD_DEFAULT);

            $sql = mysqli_query($conn, "UPDATE users SET password='{$passwordHashed}' WHERE username='{$username}'");
            if($sql)
            {
                echo "password updated";
    
                unset($_SESSION['otpEmail']);
                unset($_SESSION['otpverfied']);
                $_SESSION['uid'] = getUid($conn,$username);
            }
            else
            {
                echo "updation failed";
            }
        }
        else
        {
            echo "Passwords do not match";
        }
    }

?>