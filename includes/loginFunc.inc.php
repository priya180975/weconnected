<?php

    //if error returns true

    function emptySignupInput($name,$email,$username,$password,$cpassword)
    {
        if(empty($name)|| empty($email) || empty($username) || empty($password) || empty($cpassword))
        {
            return true;
        }
        else
        {
            return false;    
        }
    }

    function invalidUsername($username)
    {
        if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function invalidEmail($email)
    {
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function passwordMatchFail($password,$cpassword)
    {
        if($password!==$cpassword)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function uidExists($conn,$username,$email)
    {
        $sql="SELECT * FROM users WHERE username = ? OR email = ? ;";
        $stmt=mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("location:../sign-up.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt,"ss",$username,$email);
        mysqli_stmt_execute($stmt);

        $result=mysqli_stmt_get_result($stmt);
        if($row=mysqli_fetch_assoc($result))
        {
            return $row;
        }
        else
        {
            $result=false;
            return $result;
        }

        mysqli_stmt_close($stmt);

    }

    function createUser($conn,$username,$email,$name,$password)
    {
        $sql="INSERT INTO users (username,fullname,email,pwd) values (?,?,?,?);";
        $stmt=mysqli_stmt_init($conn); //creation of prepared statement 

        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("location:../sign-up.php?error=stmtfailed");
            exit();
        }

        $passwordHashed=password_hash($password,PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,"ssss",$username,$name,$email,$passwordHashed);

        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location:../sign-in.php?error=none");
        exit();

    }

?>