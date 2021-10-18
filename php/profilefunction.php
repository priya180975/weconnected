<?php

    function updateProfile($conn,$name,$course,$year,$desc,$uid)
    {
        $sql=mysqli_query($conn,"UPDATE profile SET course='{$course}', year='{$year}' , description = '{$desc}' WHERE uid='{$uid}'");
        $sql1=mysqli_query($conn,"UPDATE users SET name='{$name}' WHERE uid='{$uid}'");
        
        if($sql&&$sql1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function getCourse($conn,$uid)
    {
        $sql=mysqli_query($conn,"SELECT course FROM profile WHERE uid='{$uid}'");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['course'];
        }
        else
        {
            return "invalid";
        }
    }

    function getYear($conn,$uid)
    {
        $sql=mysqli_query($conn,"SELECT year FROM profile WHERE uid='{$uid}'");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['year'];
        }
        else
        {
            return "invalid";
        }
    }

    function setDefaultProfile($conn,$uid)
    {
        $type= getUserType($conn,$uid);

        if($type=="Teacher")
        {
            $profile_img="teacher-default.jpg";
        }
        else if($type=="Committee")
        {
            $profile_img="community-default.jpg";
        }
        else
        {
            $profile_img="user-default.jpg";
        }
    
        $sql=mysqli_query($conn,"UPDATE profile SET profile_img='{$profile_img}' WHERE uid='{$uid}'");
        if($sql)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function updateImage($conn,$files,$uid)
    {
        $img_name = $files['name'];
        $img_type = $files['type'];
        $tmp_name = $files['tmp_name'];
        
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);

        //chk extensions
        $extensions = ["jpeg", "png", "jpg"];

        if(in_array($img_ext, $extensions) === true)
        {
            $types = ["image/jpeg", "image/jpg", "image/png"];
            if(in_array($img_type, $types) === true)
            {
                $new_img_name = getUsername($conn,$_SESSION['uid']).'-profile.'.$img_ext;

                if(move_uploaded_file($tmp_name,"../images/profile/".$new_img_name))
                {
                    $sql = mysqli_query($conn, "UPDATE profile SET profile_img='{$new_img_name}' WHERE uid='".$_SESSION['uid']."'");
                    if($sql)
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
            }
        }
    }
?>