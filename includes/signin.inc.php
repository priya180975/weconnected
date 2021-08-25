<?php
    if(isset($_POST["submit"]))
    {
        $username=$_POST["user"];
        $password=$_POST["password"];

        // echo $username,$password;

        require_once 'dbh.inc.php';
        require_once 'loginFunc.inc.php';

        if(emptySignInInput($username,$password)!==false)
        {
            header("location:../sign-in.php?error=emptyInput");
            exit();
        }

        loginUser($conn,$username,$password);

    }
    else
    {
        header("location : ../sign-in.php");
        exit();
    }

?>