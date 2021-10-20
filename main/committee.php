<?php

    include_once "../php/committeefunction.php";
    include_once "../php/mainfunctions.php";
    $committee= getCommittee($conn);
                        
    
    
    echo'
    <div id="committee">
        <div class="black"></div>
        <div class="centered committee-cont">
            <i class="fas fa-user-friends"></i>
        </div>
        <div class="all-committee">';

        foreach($committee as $key => $cid)
        {
            echo '<div class="committee" value="'.getName($conn,$cid).'">
                <span class="committee-side"></span>
                <div class="committee-content">
                    <div class="committee-name">'.getName($conn,$cid).'</div>
                    <div class="committee-dept">'.getUserDescription($conn,$cid).'</div>    
                </div>
                <button class="btn committee-add-sub"><i class="far fa-'.getUserCommittee($conn,$_SESSION['uid'],$cid).'-square"></i></button>
            </div>';
        }

        echo '</div>
    </div>';
    


?>