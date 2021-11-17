<?php

include_once "../php/config.php";
include_once "../php/messagefunctions.php";


if(!isset($_SESSION)) 
{ 
    session_start(); 
} 


$Allmessage=getAllmessage($conn,$_SESSION['uid'],$_REQUEST['username']);
if($Allmessage=='')
{
    echo "no message";
}
else
{
    foreach($Allmessage as $key => $mid)
    {
        if(fromUid($conn,$mid)==$_SESSION['uid'])
        {
            echo '<div class="message-content send"><span>'.midMessage($conn,$mid).'</span></div>';
        }
        else
        {
            echo '<div class="message-content receive"><span>'.midMessage($conn,$mid).'</span></div>';
        }
    }
}

?>