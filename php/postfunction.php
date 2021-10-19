<?php
    include_once "mainfunctions.php";

    function emptyInput($conn,$heading,$content)
    {
        if(empty($heading)||empty($content))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    function post($conn,$heading,$content,$topic,$hide_show,$post_ques,$uid)
    {
        $time=time();
        $pid=getUsername($conn,$uid).$time;
        
        $sql=mysqli_query($conn,"INSERT INTO post (pid,p_uid,topic_name,title,content,hide_show,post_ques) values ('{$pid}','{$uid}','{$topic}','{$heading}','{$content}','{$hide_show}','{$post_ques}')");
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