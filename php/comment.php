<?php
session_start();

include_once "config.php";
include_once "commentfunctions.php";
include_once "mainfunctions.php";

$comment=$_POST['comment-content'];

if(!empty($comment))
{
    $date=$_REQUEST['time'];
    $username=$_REQUEST['username'];
    $pid=$username.$date; 
    
    if(postComment($conn,getUsername($conn,$_SESSION['uid']),$_SESSION['uid'],$pid,$comment))
    {   
       echo "success";
    }
    else
    {
        echo "Connection Error";
    }
}
else
{
    echo "Please Enter the Comment";
}

?>