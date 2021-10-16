<?php
    session_start();
    include_once "config.php";
    include_once "loginfunctions.php";

    $name=$_POST["name"];
    $email=$_POST["email-id"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $type=$_POST["type"];

    //no empty input
    if(!emptySignupInput($name,$email,$username,$password,$cpassword,$type))
    {   
        if($type=="Teacher"||$type=="Committee")
        {
            $chk=$_POST["chkuser-pass"];
            if(!emptychkUserPassword($chk))
            {
                if(!invalidchkUserPassword($chk))
                {
                    validate($conn,$name,$email,$username,$password,$cpassword,$type);
                }
                else
                {
                    echo "Wrong Password for User Type : $type";
                }
            }
            else
            {
                echo "Password required for User Type : $type";
            }
        }
        else
        {
            validate($conn,$name,$email,$username,$password,$cpassword,$type);
        }
    }
    else
    {
        echo "All fields are required";
    }


    function validate($conn,$name,$email,$username,$password,$cpassword,$type)
    {            
        if(!matchPasswordfail($password,$cpassword))
        {
            if(!invalidEmail($email))
            {
                if(!invalidUsername($username))
                {
                    if(!invalidUsernameLength($username))
                    {
                        if(!emailExists($conn,$email))
                        {
                            if(!usernameExists($conn,$username))
                            {
                                if(createUser($conn,$name,$username,$email,$password,$type))
                                {
                                    echo "created";
                                }
                                else
                                {
                                    echo "Something went wrong. Please try again!";
                                }
                            }
                            else
                            {
                                echo "Username Already exists";
                            }
                        }
                        else
                        {
                            echo "Email Id Already exists";
                        }
                    }
                    else
                    {
                        echo "Username length should be between 5 to 15";
                    }
                }
                else
                {
                    echo "Invalid Username : Only letters and numbers allowed";
                }
            }
            else
            {
                echo "Invalid Email";
            }
        }
        else
        {
            echo "Passwords do not match";
        }
    }
  



?>