<?php
echo '
    <div id="profile-info-display">
        <div class="black"></div>
        <div class="centered">';
        
            include_once "profiledisplay-content.php";

            echo '
            <div id="post-btn-div">
                <button id="post-btn" class="btn"><i class="fas fa-plus"></i>Add a post</button>                           
            </div>
        </div>
    </div>';

?>