<?php
    include_once "config.php";
    include_once "messagefunctions.php";
    include_once "mainfunctions.php";
    
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    $searchTerm=$_POST['searchTerm'];
    if($searchTerm!='')
    {
        $name=getUsers($conn,$_SESSION['uid'],$searchTerm);

        if($name)
        {
        foreach($name as $key => $uid)
            {
                echo '<a href="../php/chatdetails.php?username='.getUsername($conn,$uid).'" value="'.getUsername($conn,$uid).'">
                <div class="search-data">
                        <div class="search-img"><img src="'.getImage($conn,$uid).'" alt="'.getUsername($conn,$uid).'-profile-image"></div>
                        <div class="search-user-type">
                            <div class="search-username">'.getUsername($conn,$uid).'</div>
                            <div class="search-user-type">'.getUserType($conn,$uid).'</div>
                        </div>
                    </div></a>';
            }
        }
        else
        {
            //echo '<div class="search-usernames">no user found</div>';
            echo "no user found";
        }
    }

        

?>