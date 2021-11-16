<?php

    session_start();

    include_once "../php/mainfunctions.php";
    include_once "../php/config.php";

    if(!isset($_SESSION['uid']) && empty($_SESSION['uid'])) 
    {
        header("location: ../login/signin.html");
        exit();
    }

    echo 
    '
    <nav>
    <div id="logo-div">
        <a href="../main/main.php"><img src="../images/logo.svg" id="logo" alt="logo-weconnected"></a>
    </div>
    <div id="nav-icons">
        <div id="home-page-icon">
            <a href="../main/main.php"><i class="fas fa-home"></i>
                <span>Home</span>
            </a>
        </div>
        <div id="drop-down-menu-div">
            <button id="drop-down-menu-btn" class="btn"><i class="fas fa-ellipsis-h"></i></button>
        </div>
        <div class="drop-down-menu-items all">
            <div class="drop-down-menu-item">
                <a href="../community/community.php">
                    <i class="far fa-heart"></i>
                    <span>Community</span>
                </a>  
            </div>
            <div class="drop-down-menu-item">
                <a href="../message/message.php">
                    <i class="far fa-envelope"></i>
                    <span>Message</span>
                </a>  
            </div>
            <div class="drop-down-menu-item">
                <a href="../profile/profile.php">
                    <i class="far fa-user"></i>
                    <span>Profile</span>
                </a>  
            </div>
            <div class="drop-down-menu-item" id="committee-link-div">
                <a href="../committee/committee.php" id="committee-link">
                    <i class="fas fa-user-friends"></i>
                    <span>Committee</span>
                </a>  
            </div>
            <div class="drop-down-menu-item">
                <a href="../saved/saved.php">
                    <i class="far fa-bookmark"></i>
                    <span>Saved</span>
                </a>  
            </div>
            <div class="drop-down-menu-item" id="filter-div">
                <button id="filter" class="btn">
                    <i class="fas fa-list-ul"></i>
                    Filter
                </button>
            </div>
            <div class="all filter-options drop-down-menu-item">
                <div><input type="radio" name="filter-opt" value="post">post </div>
                <div><input type="radio" name="filter-opt" value="question">question</div>
                <div><input type="radio" name="filter-opt" value="jc">jc</div>
                <div><input type="radio" name="filter-opt" value="jobs">jobs </div>
                <div><input type="radio" name="filter-opt" value="all">all</div>
                <div><input type="radio" name="filter-opt" value="it-css">it/css</div> 
                <div><input type="radio" name="filter-opt" value="committee">committee</div> 
            </div>
        </div>
        <div id="profile-pic-nav-div">
            <img src="'.getImage($conn,$_SESSION['uid']).'" alt="profile pic" id="profile-pic-nav">
            <span>Me</span>
        </div>
    </div>
    </nav>
    ';


?>