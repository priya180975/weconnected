<?php
    include_once "mainfunctions.php";

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

    function allComments($conn,$pid)
    {
        $sql=mysqli_query($conn,"SELECT * FROM comment WHERE c_pid='{$pid}';");

        if(mysqli_num_rows($sql)>0)
        {
            $solution = array();
            $result=mysqli_num_rows($sql);
      
            while ($row = mysqli_fetch_assoc($sql))
            {
                $solution[]=$row['cid'];
            }
            return $solution;
        }
        else
        {
            return "";
        }
    }

    function countComments($conn,$pid)
    {
        $sql=mysqli_query($conn,"SELECT * FROM comment WHERE c_pid='{$pid}';");
        if(mysqli_num_rows($sql)>0)
        {
            $result=mysqli_num_rows($sql);
            return $result;
        }
        else
        {
            return 0;
        }
    }

    function commentContent($conn,$cid)
    {
        $sql=mysqli_query($conn,"SELECT content FROM comment WHERE cid='{$cid}';");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['content'];
        }
        else
        {
            return "";
        }
    }

    function commentName($conn,$cid)
    {
        $sql=mysqli_query($conn,"SELECT c_uid FROM comment WHERE cid='{$cid}';");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return getName($conn,$result['c_uid']);
        }
        else
        {
            return "";
        }
    }

    function commentUsername($conn,$cid)
    {
        $sql=mysqli_query($conn,"SELECT c_uid FROM comment WHERE cid='{$cid}';");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return getUsername($conn,$result['c_uid']);
        }
        else
        {
            return "";
        }
    }

    function commentTimestamp($conn,$cid)
    {
        $sql=mysqli_query($conn,"SELECT timestamp FROM comment WHERE cid='{$cid}';");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['timestamp'];
        }
        else
        {
            return "";
        }
    }

    function commentImage($conn,$cid)
    {
        $sql=mysqli_query($conn,"SELECT c_uid FROM comment WHERE cid='{$cid}';");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return getImage($conn,$result['c_uid']);
        }
        else
        {
            return "";
        }
    }

?>