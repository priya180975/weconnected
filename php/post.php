<?php
    session_start();

    include_once "postfunction.php";
    include_once "config.php";

    $heading=$_POST['heading'];
    $content=$_POST['content'];
    $postQ=$_POST['post-q'];
    $topic=$_POST['select-tag'];
    $hide_show=$_POST['show-hide'];
    

    if(!emptyInput($conn,$heading,$content))
    {
        if(post($conn,$heading,$content,$topic,$hide_show,$postQ,$_SESSION['uid']))
        {   
            echo "success";
        }
        else
        {
            echo "error";
        }
    }
    else
    {
        echo "Please Enter heading and content";
    }
    



?>