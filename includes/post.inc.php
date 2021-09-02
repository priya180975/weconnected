<?php
session_start();
    if(isset($_POST["submit"])) 
    {
        $heading=$_POST["heading"];
        $content=$_POST["content"];
        $selectTag=$_POST["select-tag"];
        // $hide=$_POST["show"]
        // $hide2=$_POST["show-no"];
        // $hide1=$_POST["chk1"];
       
        // echo "hide ".$hide1."\n";
        // echo $selectTag;
        // echo $hide.$hide2;
        
        $uid=$_SESSION["userid"];
          
        require_once 'dbh.inc.php';
        require_once 'mainFunct.inc.php';

        if(emptyPost($heading,$content)!==false)
        {
            header("location:../main.php?error=emptyInput");
            exit();
        }

        postContent($conn,$heading,$content,$selectTag,$uid);
    }
    else{
        header("location:../main.php");
        exit();
    }
?>