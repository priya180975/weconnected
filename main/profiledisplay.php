<?php
echo '
    <div id="profile-info-display">
        <div class="black"></div>
        <div class="centered">
            
            <!--profile image-->
            <img src="'.getImage($conn,$_SESSION['uid']).'"alt="profile-pic" class="profile-pic">
            
            <div class="profile-info">
                <div class="name">
                    <!--username-->
                    '.getUsername($conn,$_SESSION['uid']).'
                </div>

                <div class="course-student">
                    <!--usertype description-->                         
                    <div style="text-align:center">'.getUserType($conn,$_SESSION['uid']).'</div>
                    <div style="padding:0 1rem">'.getUserDescription($conn,$_SESSION['uid']).'</div>
                </div>
            </div>

            <div id="post-btn-div">
                <button id="post-btn" class="btn"><i class="fas fa-plus"></i>Add a post</button>                           
        </div>
        </div>
    </div>';

?>