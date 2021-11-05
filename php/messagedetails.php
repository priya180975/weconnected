<?php

    include_once "messagefunctions.php";
    include_once "config.php";
 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    if($_REQUEST['username'])
    {
        $username=$_REQUEST['username'];
        $to_uid=getUid($conn,$username);
        
        $text=$_POST['chat-text'];
        
        if(postMessage($conn,$_SESSION['uid'],$to_uid,$text))
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
        echo "nooo";
    }

?>