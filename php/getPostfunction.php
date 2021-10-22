<?php

    function getPostUid($conn,$pid)
    {
        $sql=mysqli_query($conn,"SELECT p_uid FROM post WHERE pid='{$pid}';");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['p_uid'];
        }
        else
        {
            return "invalid";
        }
    }
    
    function getallPosts($conn,$uid)
    {
        if(getUserType($conn,$uid)=="Teacher")
        {
            $sql=mysqli_query($conn,"SELECT * FROM post WHERE hide_show='show' ORDER BY timestamp DESC;");
        }
        else
        {
            $sql=mysqli_query($conn,"SELECT * FROM post ORDER BY timestamp DESC;");
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
            return "invalid";
        }
    }

    function getPostTitle($conn,$pid)
    {
        $sql=mysqli_query($conn,"SELECT title FROM post WHERE pid='{$pid}';");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['title'];
        }
        else
        {
            return "invalid";
        }
    }

    function getPostContent($conn,$pid)
    {
        $sql=mysqli_query($conn,"SELECT content FROM post WHERE pid='{$pid}';");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['content'];
        }
        else
        {
            return "invalid";
        }
    }

    function getPostTopic($conn,$pid)
    {
        $sql=mysqli_query($conn,"SELECT topic_name FROM post WHERE pid='{$pid}';");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['topic_name'];
        }
        else
        {
            return "invalid";
        }
    }

    function getTimeStamp($conn,$pid)
    {
        $sql=mysqli_query($conn,"SELECT timestamp FROM post WHERE pid='{$pid}';");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['timestamp'];
        }
        else
        {
            return "invalid";
        }
    }

    function getPostQues($conn,$pid)
    {
        $sql=mysqli_query($conn,"SELECT post_ques FROM post WHERE pid='{$pid}';");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            if($result['post_ques']=="post")
            {
                return 'P';
            }
            else
            {
                return 'Q';
            }
        }
        else
        {
            return "invalid";
        }
    }

    function getPostHideShow($conn,$pid)
    {
        $sql=mysqli_query($conn,"SELECT hide_show FROM post WHERE pid='{$pid}';");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            if($result['hide_show']=="show")
            {
               return '';
            }
            else
            {
                return 'show-no';
            }
        }
        else
        {
            return "invalid";
        }
    }

    function getPostImage($conn,$pid)
    {
        return getImage($conn,getPostUid($conn,$pid));
    }
    
    function getPostName($conn,$pid)
    {
        return getName($conn,getPostUid($conn,$pid));
    }

    function getPostUsername($conn,$pid)
    {
        $p_uid=getPostUid($conn,$pid);
        $sql=mysqli_query($conn,"SELECT username FROM users WHERE uid='{$p_uid}';");
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
?>