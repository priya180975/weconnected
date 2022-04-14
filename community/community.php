<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="icon" type="image/svg" href="../images/logo-dots.svg">
    <link rel="stylesheet" type="text/css" href="../stylesheet/main.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/community.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/comments.css">
    <title>WeConnected | Community Page</title>
</head>
<body>

    <div id="container">
       
        <!--nav bar-->
        <?php include_once '../main/navbar.php'; ?>
         
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

            <!--main content-->
            <div id="content-all">
                
                <!-- All posts -->
                <?php include_once 'communityposts.php' ?>

            </div>

        </main>
    </div>

    <!--back to top-->
    <div id="back-to-top-div"><button id="back-to-top" class="btn">up</button></div>

    <!--Post template-->
    <?php //include_once '../main/posttemplate.php' ?>
    <?php include_once  "../comments/commenttemplate.php"?>

    <script src="../javascript/displaycomment.js"></script>
    <script src="../javascript/main.js"></script>
    <!-- <script src="../javascript/homepage.js"></script> -->
    <script src="../javascript/saved.js"></script>
    <script src="../javascript/comment.js"></script>
    <script src="../javascript/navbar.js"></script>

</body>
</html>