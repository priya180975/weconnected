<?php

    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        $email=$_POST["email-id"];
        $username=$_POST["username"];
        $password=$_POST["password"];
        $confirmPass=$_POST["cpassword"];

        require_once 'dbh.inc.php';
        require_once 'loginFunc.inc.php';

        if(emptySignupInput($name,$email,$username,$password,$confirmPass)!==false)
        {
            header("location:../sign-up.php?error=emptyInput");
            exit();
        }

        if(invalidUsername($username)!==false)
        {
            header("location:../sign-up.php?error=invalidUsername");
            exit();
        }

        if(invalidEmail($email)!==false)
        {
            header("location:../sign-up.php?error=invalidEmail");
            exit();
        }

        if(passwordMatchFail($password,$confirmPass)!==false)
        {
            header("location:../sign-up.php?error=passwordMatchFail");
            exit();
        }

        if(uidExists($conn,$username,$email)!==false)
        {
            header("location:../sign-up.php?error=usernametaken");
            exit();
        }

        createUser($conn,$username,$email,$name,$password);
    }
    else
    {
        header("location : ../sign-up.php");
    }

?>