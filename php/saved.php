<?php
include_once "savedfunctions.php";
include_once "config.php";

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if(!empty($_REQUEST['post'])) 
{
    if($_REQUEST['post']=="save")
    {
        $date=$_REQUEST['time'];
        $username=$_REQUEST['username'];
        
        $pid=$username.$date;
        //username from name 
        echo savePost($conn,$_SESSION['uid'],$pid);
               
    }
    else if($_REQUEST['post']=="remove")
    {
        $date=$_REQUEST['time'];
        $username=$_REQUEST['username'];
        
        $pid=$username.$date;
        
        echo removeSaved($conn,$_SESSION['uid'],$pid);
        echo "remove";
    }
    else
    {
        echo "nothing";
    }
}


?>