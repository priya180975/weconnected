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

        //$url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if($name)
        {
        foreach($name as $key => $uid)
            {
                echo '<div class="search-data" value="'.getUsername($conn,$uid).'">
                        <div class="search-img"><img src="'.getImage($conn,$uid).'" alt="'.getUsername($conn,$uid).'-profile-image"></div>
                        <div class="search-user-type">
                            <div class="search-username">'.getUsername($conn,$uid).'</div>
                            <div class="search-user-type font-small">'.getUserType($conn,$uid).'</div>
                        </div>
                    </div>';
            }
        }
        else
        {
            echo "no user found";
        }
    }

        

?>