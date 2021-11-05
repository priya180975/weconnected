<?php

    function getUsers($conn,$uid,$searchTerm)
    {
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT uid= '{$uid}' AND (username LIKE '%{$searchTerm}%') ");
        if(mysqli_num_rows($sql)>0)
        {
            $solution = array();
            $result=mysqli_num_rows($sql);
      
            while ($row = mysqli_fetch_assoc($sql))
            {
                $solution[]=$row['uid'];
            }
            return $solution;
        }
        else
        {
            return '';
        }
    }

    function getUid($conn,$username)
    {
        $sql=mysqli_query($conn,"SELECT uid FROM users WHERE username='{$username}'");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['uid'];
        }
        else
        {
            return "invalid";
        }
    }

    function postMessage($conn,$from_uid,$to_uid,$text)
    {
        //from is session uid 
        $mid=$from_uid.$to_uid.time();
        // echo $mid;
        // $mid="demo";

        $sql=mysqli_query($conn,"INSERT INTO message (mid,from_uid,to_uid,message) values ('{$mid}','{$from_uid}','{$to_uid}','{$text}')");
        
        if($sql)
        {
            $select_sql= mysqli_query($conn, "SELECT * FROM message WHERE mid = '{$mid}'");
            if(mysqli_num_rows($select_sql) > 0)
            {
                $result = mysqli_fetch_assoc($select_sql);
                return true;
            }
            else
            {
                return false;
            }
        }
        else{
            return false;
        }
    }

    function getAllmessage($conn,$uid,$fromusername)
    {
        $fromuid=getUid($conn,$fromusername);
        $sql = mysqli_query($conn, "SELECT * FROM message WHERE (to_uid= '{$uid}' OR to_uid= '{$fromuid}') AND (from_uid='{$uid}' OR from_uid='{$fromuid}') ORDER BY timestamp ASC");
        if(mysqli_num_rows($sql)>0)
        {
            $solution = array();
            $result=mysqli_num_rows($sql);
      
            while ($row = mysqli_fetch_assoc($sql))
            {
                $solution[]=$row['mid'];
            }
            return $solution;
        }
        else
        {
            return null;
        }
    }

    //from uid of mid
    function fromUid($conn,$mid)
    {
        $sql = mysqli_query($conn, "SELECT from_uid FROM message WHERE mid='{$mid}'");
        $row = mysqli_fetch_assoc($sql);
        return $row['from_uid'];
    }

    function midMessage($conn,$mid)
    {
        $sql = mysqli_query($conn, "SELECT message FROM message WHERE mid='{$mid}'");
        $row = mysqli_fetch_assoc($sql);
        return $row['message'];
    }
?>