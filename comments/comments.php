<?php
    echo 
    '<div class="content-padding">
        <div class="content-profile-info">
            <div class="content-profile-pic-name">
                <div class="content-profile-pic"><img src="'.commentImage($conn,$cid).'" alt="profile-pic"></div>
                <div class="content-profile-name">
                    <span>'.commentName($conn,$cid).'</span>
                    <span style="font-weight:bold">'.commentUsername($conn,$cid).'</span>
                    <span>'.commentTimestamp($conn,$cid).'</span>
                </div>                        
            </div>
        </div>
        <div class="content-text">'.commentContent($conn,$cid).'</div>
    </div>';
?>