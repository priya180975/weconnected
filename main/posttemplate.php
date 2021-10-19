<?php

echo'   
<form action="#" method="POST" enctype="multipart/form-data" autocomplete="off" name="post-data" id="post-data" class="post-content temp all">
<div class="content-padding">
<!--remove error div-->
    <div id="error">
    </div>
    <div class="content-heading">
        <input type="text" id="heading" placeholder="Enter heading" name="heading">
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
        <div class="content-tag">
            <select name="post-q">
                <option value="post">post</option>
                <option value="question">question</option>
            </select>
            <select id="select-tag" name="select-tag">';

                //topics
                    $topics=getTopicTags($conn);
                        
                    foreach($topics as $key => $topicname)
                    {
                       echo "<option>".$topicname."</option>";
                    }
                
            echo '</select>
        </div>
    </div>
    <div class="content-text">
        <textarea placeholder="Enter content" id="content" name="content"></textarea>
    </div>
</div>
<div class="content-interact">
    <button class="btn" id="cancel">cancel</button>
    <div class="send post">
    <!-- <input type="checkbox" class="btn show" id="post-show-btn" name="show">
    <input type="checkbox" name="chk1">   -->
        <button type="submit" id="posted-content" name="submit" class="btn"><i class="far fa-paper-plane"></i></button>
        <input class="btn show"  id="post-show-btn" name="show-hide" value="show">
        <!-- <input class="btn ques" name="ques" value="0"> -->
    </div>
</div>
</form>
';

?>