<?php

    function emptyPost($heading,$content)
    {
        if(empty($heading) || empty($content))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    function postContent($conn,$heading,$content,$selectTag,$uid)
    {
        $sql="INSERT INTO post(uid,heading,content,Topic) VALUES (?,?,?,?);";
        $stmt=mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("location:../main.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt,"ssss",$uid,$heading,$content,$selectTag);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location : ../main.php?error=none");
        exit();
    }
?>