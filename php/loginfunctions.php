
<?php

    //if empty input then true
    function emptySignupInput($name,$email,$username,$password,$cpassword,$type)
    {
        if(empty($name)||empty($email)||empty($username)||empty($password)||empty($cpassword)||empty($type))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //email validation
    function invalidEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return true;    
        }
        else
        {
            return false;
        }
    }

    function emailExists($conn,$email)
    {
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //only alphabets and numbers
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

    function invalidUsernameLength($username)
    {
        if(strlen($username)<5||strlen($username)>15)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    function usernameExists($conn,$username)
    {
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '{$username}'");
        if(mysqli_num_rows($sql) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function emptychkUserPassword($chk)
    {
        if(empty($chk))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function invalidchkUserPassword($chk)
    {
        if($chk!=="123")
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function matchPasswordfail($password,$cpassword)
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

    function createUser($conn,$name,$username,$email,$password,$type)
    {
        //hashed password
        $passwordHashed=password_hash($password,PASSWORD_DEFAULT);

        //uid
        $random_id = rand(time(), 100000000);
        if($type=="Teacher")
        {
            $uid="T".$random_id;
            //profile image 
            $profile_img="teacher-default.jpg";
        }
        else if($type=="Committee")
        {
            $uid="C".$random_id;
            $profile_img="community-default.jpg";
        }
        else
        {
            $uid="U".$random_id;
            $profile_img="user-default.jpg";
        }

        //create user query
        $sql=mysqli_query($conn,"INSERT INTO users (uid,name,username,email,password) values ('{$uid}','{$name}','{$username}','{$email}','{$passwordHashed}')");
        
        //profile query
        $sql_profile=mysqli_query($conn,"INSERT INTO profile (uid,type,profile_img) values ('{$uid}','{$type}','{$profile_img}')");
        
        //check if insert success
        if($sql&&$sql_profile)
        {
            $select_sql= mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($select_sql) > 0)
            {
                $result = mysqli_fetch_assoc($select_sql);
                $_SESSION['uid'] = $result['uid'];
                return true;
            }
            else
            {
                echo "This email address not Exist!";
                return false;
            }
        }
        else{
            return false;
        }

    }


?>