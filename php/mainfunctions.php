<?php
    
    function getImage($conn,$uid)
    {
        $sql=mysqli_query($conn,"SELECT profile_img FROM profile WHERE uid='{$uid}'");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return "../images/profile/".$result['profile_img'];
        }
        else
        {
            return "../images/mobile-login-background.png";
        }
    }

    function getUsername($conn,$uid)
    {
        $sql=mysqli_query($conn,"SELECT username FROM users WHERE uid='{$uid}'");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['username'];
        }
        else
        {
            return "invalid";
        }
    }

    function getName($conn,$uid)
    {
        $sql=mysqli_query($conn,"SELECT name FROM users WHERE uid='{$uid}'");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['name'];
        }
        else
        {
            return "invalid";
        }
    }

    function getUserType($conn,$uid)
    {
        $sql=mysqli_query($conn,"SELECT type FROM profile WHERE uid='{$uid}'");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['type'];
        }
        else
        {
            return "invalid";
        }
    }

    function getUserDescription($conn,$uid)
    {
        $sql=mysqli_query($conn,"SELECT description FROM profile WHERE uid='{$uid}'");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['description'];
        }
        else
        {
            return "invalid";
        }
    }

    function getUserEmail($conn,$uid)
    {
        $sql=mysqli_query($conn,"SELECT email FROM users WHERE uid='{$uid}'");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['email'];
        }
        else
        {
            return "invalid";
        }
    }

    //username from email
    function getUsernameEmail($conn,$email)
    {
        $sql=mysqli_query($conn,"SELECT username FROM users WHERE email='{$email}'");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['username'];
        }
        else
        {
            return "invalid";
        }
    }


    //filter topic tags
    function getTopicTags($conn)
    {
        $sql=mysqli_query($conn,"SELECT DISTINCT topic_name FROM post");
        if(mysqli_num_rows($sql)>0)
        {
            $solution = array();
            $result=mysqli_num_rows($sql);
      
            while ($row = mysqli_fetch_assoc($sql))
            {
                $solution[]=$row['topic_name'];
            }

            return $solution;
        }
        else
        {
            return "invalid";
        }
    }

?>