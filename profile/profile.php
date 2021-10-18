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
    <link href="../stylesheet/profile.css" type="text/css" rel="stylesheet">
    <title>WeConnected | Profile Page</title>
</head>
<body>
    <div id="container">
        <!--navbar-->
        <?php include_once '../main/navbar.php';
        include_once "../php/profilefunction.php";?>

        <main>

            <div id="right-desk">
                <!--profile display-->
                <?php include_once '../main/profiledisplay.php' ?>
            </div>

            <div id="content-all">
            <div class="black"></div>
                <form action="#" method="post" enctype="multipart/form-data" autocomplete="off" id="form-data" name="form-data" class="centered">
                <img src="<?php echo getImage($conn,$_SESSION['uid'])?>" id="profile-img" alt="profile-image">
                    
                    <div class="form__input img_change">
                        <input type="button" name="default" value="default-image" id="default" class="btn img_btn" onclick=<?php setDefaultProfile($conn,$_SESSION['uid']); ?>>    
                        <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg,image/jpg"  class="btn img_btn">
                    </div>
                
                    <div id="error" class="form__input error">
                    
                    </div>
                    
                    <div class="form__input">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="<?php echo getName($conn,$_SESSION['uid']);?>">
                    </div>
                    <div class="form__input">
                        <label for="email-id">Email address</label>
                        <input type="text" name="email-id" value="<?php echo getUserEmail($conn,$_SESSION['uid']);?>" readonly>
                    </div>
                    <div class="form__input">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?php echo getUsername($conn,$_SESSION['uid']);?>" readonly>
                    </div>

                    <div class="form__input">
                        <label for="type">Type</label>
                        <input type="text" name="type" id="type" value="<?php echo getUserType($conn,$_SESSION['uid']);?>" readonly>
                    </div>

                    <div class="form__input none course_div">
                        <label for="course">Current Course</label>
                        <select name="course" id="course_option">
                            <option id="selected-course" selected value="<?php echo getCourse($conn,$_SESSION['uid']);?>"><?php echo getCourse($conn,$_SESSION['uid']);?></option>
                        </select>
                    </div>

                    <div class="form__input none year_div">
                        <label for="year">Year</label>
                        <select name="year" id="year_option">
                            <option id="selected-year" selected value="<?php echo getYear($conn,$_SESSION['uid']);?>"><?php echo getYear($conn,$_SESSION['uid']);?></option>
                        </select>
                    </div>
                    <div class="form__input none desc_div">
                        <label for="desc">Description</label>
                        <input type="text" name="desc" value="">
                    </div>

                    <div class="form__input btn_div">
                        <button type="submit" name="submit" id="submit" class="btn">update</button>
                    </div>
                </form>
            </div>
        

            <!--committee-->
            <?php include_once '../main/committee.php'; ?>

        </main>
    </div>

    <script src="../javascript/profile.js"></script>
</body>
</html>