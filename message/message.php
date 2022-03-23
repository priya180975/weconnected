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
                <input type="text" placeholder="search" name="search-bar">
                <div id="search-result">
                    <?php 
                        function chattUsers($conn,$uid)
                        {
                            $sqlMess=mysqli_query($conn,"SELECT DISTINCT to_uid from message WHERE from_uid='{$uid}';");
                            if(mysqli_num_rows($sqlMess)>0)
                            {
                                $resultMess = mysqli_fetch_assoc($sqlMess);
                                return $resultMess;
                            }
                            else
                            {
                                return '';
                            }
                        }

                        $AllCUsers=chattUsers($conn,$_SESSION['uid']);
                        if($AllCUsers=='')
                        {
                            echo "no user selected";
                        }
                        else
                        {
                            foreach($AllCUsers as $key => $uid)
                            {
                                echo getUsername($conn,$AllCUsers);
                            }
                        }
                    ?>
                </div>

            </div>
            
                
                    <?php 
                        if(!isset($_REQUEST['username']))
                        {
                           echo "search a user to message"; 
                        }

                        else
                        {
                            echo '
                            <div id="chat-window">
                            <div class="userheading">
                                <div class="flex-userheading">
                                    <div class="userheading-div1">
                                        <img src="'.getImage($conn,getUid($conn,$_REQUEST['username'])).'">
                                        <span>'.$_REQUEST['username'].'</span> 
                                    </div>
                                <div>
                                ';
                                if(getUserType($conn,getUid($conn,$_REQUEST['username']))=="Committee")
                                {
                                    echo '<span class="icon-userhead" title="committee" >C</span>';
                                }
                                elseif (getUserType($conn,getUid($conn,$_REQUEST['username']))=="Teacher") {
                                    echo '<span class="icon-userhead" title="teacher">T</span>';
                                }
                                else
                                {
                                    echo '<span class="icon-userhead" title="user">U</span>';
                                };
                                
                                echo'
                                    <span style="color:grey;font-size:0.5rem;">&nbsp;&nbsp;'.getName($conn,getUid($conn,$_REQUEST['username'])).'</span>
                            </div>
                            </div>
                            </div>
                                <div id="chat-display">
                                    
                                    <div class="messages">
                                    ';
                                    

                                    echo 
                                    '</div>
                                </div>
                                <form action="#" method="post" enctype="multipart/form-data" autocomplete="off" id="chat-content" name="chat-content">
                                    <input type="text" placeholder="....." name="chat-text" id="chat-text">
                                    <button type="submit" id="posted-content-btn" name="submit" class="btn"><i class="far fa-paper-plane"></i></button>
                                </form> 
                            </div>';
                        }
                    ?>
        </main>
    </div>

    <script src="../javascript/message.js"></script>
</body>
</html>