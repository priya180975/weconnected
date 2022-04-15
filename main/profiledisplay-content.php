<?php 
echo '
<!--profile image-->
<img src="'.getImage($conn,$_SESSION['uid']).'"alt="profile-pic" class="profile-pic">
<div class="profile-info">
    <div class="name">
        <!--username-->
        '.getUsername($conn,$_SESSION['uid']).'
    </div>

    <div class="course-student">
        <!--usertype description-->                         
        <div style="text-align:center;color:grey">'.getUserType($conn,$_SESSION['uid']).'</div>
        <div class="proDesc">'.getUserDescription($conn,$_SESSION['uid']).'</div>
    </div>
</div>';
?>