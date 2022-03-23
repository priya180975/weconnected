<?php

include_once "../php/config.php";
include_once "../php/messagefunctions.php";
include_once "../php/mainfunctions.php";


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
            $date=midTimestamp($conn,$mid);

            echo '
            <div class="message-content send">
            <span class="span" style="font-size:0.5rem">'.date('h:i a',strtotime($date)).'</span>
            <div>'.midMessage($conn,$mid).'</div>
            <img src="'.getImage($conn,$_SESSION['uid']).'"></img>
            </div>';
        }
        else
        {
           $date=midTimestamp($conn,$mid);

           echo '
           <div class="message-content receive">
           <img src="'.getImage($conn,getUid($conn,$_REQUEST['username'])).'">
           <div>'.midMessage($conn,$mid).'</div>
           <span class="span" style="font-size:0.5rem">'.date('h:i a',strtotime($date)).'</span>
           </div>';
        }
    }
}

?>