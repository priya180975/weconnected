<?php
    session_start();
    include_once "config.php";
    include_once "profilefunction.php";
    include_once "mainfunctions.php";
    
    $name=$_POST['name'];
    $course=$_POST['course'];
    $year=$_POST['year'];
    $description=$_POST['desc'];

    if(updateProfile($conn,$name,$course,$year,$description,$_SESSION['uid']))
    {
        echo "";
    }
    else
    {
        echo "update failed";
    }

    //profile image
    if($_FILES['image']['name']!=='')
    {
        if(updateImage($conn,$_FILES['image'],$_SESSION['uid']))
        {
            echo "";
        }
        else
        {
            echo "failed";
        }
    }



?>
