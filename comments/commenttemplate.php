<?php

echo'   
<form action="#" method="POST" enctype="multipart/form-data" autocomplete="off" name="comment-data" id="comment-data" class="comment-content temp all">
<div class="content-padding">
<!--remove error div-->
    <div id="comment-error">
    </div>
    <div class="content-profile-info">
        <div class="content-profile-pic-name">
            <div class="content-profile-pic">
                <!--profile image-->
                <img src="'.getImage($conn,$_SESSION['uid']).'" alt="profile-pic">
            </div>
            <div class="content-profile-name">
                <span style="font-weight:bold;font-size:0.8rem">
                <!--username-->    
                '.getUsername($conn,$_SESSION['uid']).'
                </span>
            </div>                        
        </div>
    </div>
    <div class="content-text">
        <textarea placeholder="Add a comment" id="content" name="comment-content"></textarea>
    </div>
</div>
<div class="content-interact">
    <button class="btn" id="cancel-comment">cancel</button>
    <div class="send post">
        <button type="submit" id="comment-content" name="submit" class="btn"><i class="far fa-paper-plane"></i></button>
    </div>
</div>
</form>
';

?>