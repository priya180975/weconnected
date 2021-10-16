<?php
    session_start();
    include_once "config.php";
    include_once "loginfunctions.php";

    $user=$_POST["user"];
    $password=$_POST["password"];

    if(!emptySigninInput($user,$password))
    {
        //if username/email is not in db 
        if(!signinUser($conn,$user,$password))
        {
            echo "User does not exists";
        }
    }
    else
    {
        echo "All fields are required";
    }

?>