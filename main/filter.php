<?php

    //display filter tags
    
    echo '
    <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off" name="filter-data" id="filter-data" class="filter-options drop-down-menu-item">
        <div class="black"></div>
        <div class="centered">
            <i class="fas fa-list-ul"></i>
        </div>
        <div class="filter-desk-data">
            <div><input type="radio" name="filterOpt" value="all">all</div>
            <div><input type="radio" name="filterOpt" value="post">post</div>
            <div><input type="radio" name="filterOpt" value="question">question</div>';
            //topics
            $topics=getTopicTags($conn);      
            foreach($topics as $key => $topicname)
            {
                echo '<div><input type="radio" name="filterOpt" value="'.$topicname.'">'.$topicname.'</div>';
            }
                
    echo ' </div>
    </form>';
    
?>