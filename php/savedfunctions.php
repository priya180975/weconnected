<?php

    function savePost($conn,$uid,$pid)
    {
        $sql=mysqli_query($conn,"INSERT INTO saved(uid,pid) VALUES('{$uid}','{$pid}');");
        if($sql)
        {
            echo  "done";
        }
        else
        {
            echo "invalid";
        }
    }

    function removeSaved($conn,$uid,$pid)
    {
        $sql=mysqli_query($conn,"DELETE FROM saved WHERE uid='{$uid}' AND pid='{$pid}'");
        if($sql)
        {
            echo  "done";
        }
        else
        {
            echo "invalid";
        }
    }

    //post saved or not
    function saved_Not($conn,$uid,$pid)
    {
        $sql=mysqli_query($conn,"SELECT uid FROM saved WHERE uid='{$uid}' AND pid='{$pid}'");
        if(mysqli_num_rows($sql)>0)
        {
            return "fas";
        }
        else
        {
            return "";
        }
    }

    function allSavedPosts($conn,$uid)
    {
        $sql=mysqli_query($conn,"SELECT pid FROM saved WHERE uid='{$uid}';");

        if(mysqli_num_rows($sql)>0)
        {
            $solution = array();
            $result=mysqli_num_rows($sql);
      
            while ($row = mysqli_fetch_assoc($sql))
            {
                $solution[]=$row['pid'];
            }

            return $solution;
        }
        else
        {
            return "";
        }
    }


?>