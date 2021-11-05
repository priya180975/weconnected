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
    <link rel="stylesheet" type="text/css" href="../stylesheet/message.css">
    <title>WeConnected | Message Page</title>
</head>
<body>
    <?php include_once "../php/messagefunctions.php"?>
    <div id="container">
        <!--nav bar-->
        <?php include_once '../main/navbar.php'; ?>
            
        <main>
            <div id="search-users">
                <input type="text" placeholder="enter username to search" name="search-bar">
                <div id="search-result"></div>
            </div>
            <div id="chat-window">
                <div id="chat-display">
                    <div class="messages" >
                        <?php
                            $Allmessage=getAllmessage($conn,$_SESSION['uid'],$_REQUEST['username']);
                            if($Allmessage=='')
                            {
                                echo "no message";
                            }
                            else
                            {
                                foreach($Allmessage as $key => $mid)
                                {
                                    if(fromUid($conn,$mid)==$_SESSION['uid'])
                                    {
                                        echo '<div class="message-content send"><span>'.midMessage($conn,$mid).'</span></div>';
                                    }
                                    else
                                    {
                                        echo '<div class="message-content receive"><span>'.midMessage($conn,$mid).'</span></div>';
                                    }
                                }
                            }
                        ?>
                    </div>
                </div>
                <form action="#" method="post" enctype="multipart/form-data" autocomplete="off" id="chat-content" name="chat-content">
                    <input type="text" placeholder="....." name="chat-text" id="chat-text">
                    <button type="submit" id="posted-content-btn" name="submit" class="btn"><i class="far fa-paper-plane"></i></button>
                </form> 
            </div>
        </main>
    </div>

    <script src="../javascript/message.js"></script>
</body>
</html>