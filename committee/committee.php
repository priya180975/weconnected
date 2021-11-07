<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="icon" type="image/svg" href="../images/logo-dots.svg">
    <link rel="stylesheet" type="text/css" href="../stylesheet/main.css ">
    <link href="../stylesheet/committee.css" type="text/css" rel="stylesheet">
    <title>WeConnected | Committee Page</title>
</head>
<body>
    <div id="container">
        <!--navbar-->
        <?php include_once '../main/navbar.php';
        include_once "../php/committeefunction.php";
        include_once "../php/mainfunctions.php";
        $committee= getCommittee($conn);
        ?>

        <main>

            <div id="right-desk">
                <!--profile-->
                <div id="profile-info-display">
                    <div class="black"></div>
                    <div class="centered">
                        <?php include_once '../main/profiledisplay-content.php'?>
                    </div>
                </div> 
            </div>

            <div id="content-all">
                <!--committee-->
                <div id="committee">
                    <!-- <div class="black"></div>
                    <div class="centered committee-cont">
                        <i class="fas fa-user-friends"></i>
                    </div> -->
                    <div class="all-committee">

                    <?php foreach($committee as $key => $cid)
                    {
                        echo '
                        <div class="committee" value="'.getName($conn,$cid).'">
                            <span class="committee-side"></span>
                            <div class="committee-content">
                                <div class="committee-img"><img src='.getImage($conn,$cid).' alt="committee image"></div>
                                <div class="committee-name-desc">
                                    <div class="committee-name">'.getName($conn,$cid).'</div>
                                    <div class="committee-dept">'.getUserDescription($conn,$cid).'</div>   
                                </div> 
                            </div>
                            <button class="btn committee-add-sub"><i class="far fa-'.getUserCommittee($conn,$_SESSION['uid'],$cid).'-square"></i></button>
                        </div>';
                    }
                    ?>
                    </div>
                </div>
            </div>
        
        </main>
    </div>
    <script src="../javascript/committee.js"></script>
</body>
</html>