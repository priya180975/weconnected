<?php
include_once "../php/getCommunityPosts.php";
include_once "../php/getPostfunction.php";
include_once "../php/savedfunctions.php";
include_once "../php/commentfunctions.php";

    $posts=getCommunityPosts($conn,$_SESSION['uid']);     

    if($posts)
    {
    foreach($posts as $key => $pid)
    {
        echo'
        <div class="content temp">
            <div class="content-padding">
                <div class="content-heading">'.getPostTitle($conn,$pid).'</div>
                <div class="content-profile-info">
                    <div class="content-profile-pic-name">
                        <div class="content-profile-pic"><img src="'.getPostImage($conn,$pid).'" alt="profile-pic"></div>
                        <div class="content-profile-name">
                            <span>'.getPostName($conn,$pid).'</span>
                            <span style="font-weight:bold">'.getPostUsername($conn,$pid).'</span>
                            <span>'.getTimeStamp($conn,$pid).'</span>
                        </div>                        
                    </div>
                    <div class="content-tag">'.getPostTopic($conn,$pid).'</div>
                </div>
                <div class="content-text">'.getPostContent($conn,$pid).'</div>
            </div>
            <div class="content-interact">
                <div class="content-interact-save">
                    <button class="btn save-btn" ><i class="far '.saved_Not($conn,$_SESSION['uid'],$pid).' fa-bookmark"></i></button>
                </div>
                <div class="content-interact-comment">
                    <div class="comment" >
                    <button class="btn"><i class="far fa-comment-alt comment-btn"></i></button>
                    <span>'.countComments($conn,$pid).'</span>
                    </div>
                    <div class="show '.getPostHideShow($conn,$pid).'"></div>
                    <div class="post_q">'.getPostQues($conn,$pid).'</div>
                </div>
            </div>
            <div class="comments-display comments-hide">';
                $comments= allComments($conn,$pid);   
                // print_r($comments);  
                if($comments)
                {
                    foreach($comments as $key=>$cid)
                    {
                        include "../comments/comments.php"; 
                    }
                }
                else
                {
                    echo '<div class="content-text">No comments yet</div>';
                }
            echo'</div>
        </div>
        ';
    }
}
else
{
    echo "No posts yet Join a committee";
}


?>