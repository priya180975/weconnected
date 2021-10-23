<?php

    function postComment($conn,$username,$uid,$pid,$comment)
    {
        $cid=$username.time();

        $sql=mysqli_query($conn,"INSERT INTO comment(cid,c_pid,c_uid,content) VALUES('{$cid}','{$pid}','{$uid}','{$comment}');");
        if($sql)
        {
           return true;
        }
        else
        {
            return false;
        }
    }


    


?>