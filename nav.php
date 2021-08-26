<?php

    session_start();

    echo 
    '<nav>
        <div id="logo-div">
            <img src="images/logo.svg" id="logo" alt="logo-we-connect">
        </div>
        <div id="nav-icons">
            <div id="home-page-icon">
                <a href="main.php"><i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </div>
            <div id="drop-down-menu-div">
                <button id="drop-down-menu-btn" class="btn"><i class="fas fa-ellipsis-h"></i></button>
            </div>
            <div class="drop-down-menu-items all">
                <div class="drop-down-menu-item">
                    <a href="community.php">
                        <i class="far fa-heart"></i>
                        <span>Community</span>
                    </a>  
                </div>
                <div class="drop-down-menu-item">
                    <a href="#">
                        <i class="far fa-envelope"></i>
                        <span>Message</span>
                    </a>  
                </div>
                <div class="drop-down-menu-item">
                    <a href="#">
                        <i class="far fa-user"></i>
                        <span>Profile</span>
                    </a>  
                </div>
                <div class="drop-down-menu-item" id="committee-link-div">
                    <a href="#" id="committee-link">
                        <i class="fas fa-user-friends"></i>
                        <span>Committee</span>
                    </a>  
                </div>
                <div class="drop-down-menu-item">
                    <a href="#">
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
                <img src="images/profile-pic.jpg" alt="profile pic" id="profile-pic-nav">
                <span>Me</span>
            </div>
        </div>
    </nav>';
?>