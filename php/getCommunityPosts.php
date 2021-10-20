<?php
    include_once 'mainfunctions.php';

    function getCommunityPosts($conn,$uid)
    {
        //select cid of committee user joined
        //select pid of posts cid has made
        //cid p_uid and uid are same 
        $usertype=getUserType($conn,$uid);

        if($usertype=="Teacher")
        {
            $sql=mysqli_query($conn,"SELECT committee.cid,post.p_uid,post.pid
            FROM committee 
            INNER JOIN post
            ON committee.cid = post.p_uid 
            WHERE committee.uid='{$uid}'  AND post.hide_show='show'
            ORDER BY post.timestamp desc");
        }
        else
        {
            $sql=mysqli_query($conn,"SELECT committee.cid,post.p_uid,post.pid
            FROM committee 
            INNER JOIN post
            ON committee.cid = post.p_uid 
            WHERE committee.uid='{$uid}'
            ORDER BY post.timestamp desc");
        }


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
            return false;
        }
    }

?>