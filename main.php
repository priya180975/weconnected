<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="icon" type="image/svg" href="../images/logo-dots.svg">
    <link rel="stylesheet" type="text/css" href="styles/mainstyle.css">
    <title>We Connect | Main Page</title>
</head>
<body>
    <div id="container">
       
        <!--nav bar-->
        <?php include_once 'nav.php'; ?>
        
        <main>
        <?php 
            if(isset($_GET["error"]))
            {
                if($_GET["error"]=="emptyInput")
                {
                    echo "Post not submitted";
                }
            }
        ?>

            <div id="right-desk">
                <!--profile-->
                <div id="profile-info-display">
                    <div class="black"></div>
                    <div class="centered">
                        <img src="images/profile-pic.jpg" alt="profile-pic" class="profile-pic">
                        <div class="profile-info">
                            
                            <div class="name">
                                <?php 
                                    if(isset($_SESSION["fullname"]))
                                    { 
                                        echo $_SESSION["fullname"];
                                    }
                                    else
                                    {
                                        echo "Invalid";
                                    }
                                ?>
                            </div>

                            <div class="course-student">
                                <span>Student</span><br>
                                <span>Course : BSC IT </span>
                            </div>
                        </div>

                        <div id="post-btn-div">
                            <?php
                                if(isset($_SESSION["fullname"]))
                                { 
                                    echo '<button id="post-btn" class="btn">
                                            <i class="fas fa-plus"></i>Add a post 
                                            </button>';
                                }
                            ?>                                
                    </div>
                    </div>
                </div>

                <!--filter-->
                <div class="filter-options drop-down-menu-item">
                    <div class="black"></div>
                    <div class="centered">
                        <i class="fas fa-list-ul"></i>
                    </div>
                    <div class="filter-desk-data">
                        <div><input type="radio" name="filter-opt" value="post">post </div>
                        <div><input type="radio" name="filter-opt" value="question">question</div>
                        <div><input type="radio" name="filter-opt" value="jc">jc</div>
                        <div><input type="radio" name="filter-opt" value="jobs">jobs </div>
                        <div><input type="radio" name="filter-opt" value="all">all</div>
                        <div><input type="radio" name="filter-opt" value="it-css">it/css</div> 
                        <div><input type="radio" name="filter-opt" value="committee">committee</div> 
                    </div>
                </div>
            </div>

            <!--main content-->
            <div id="content-all">
                <div class="content temp">
                    <div class="content-padding">
                        <div class="content-heading">TCS is hiring web developers</div>
                        <div class="content-profile-info">
                            <div class="content-profile-pic-name">
                                <div class="content-profile-pic"><img src="images/profile-pic.jpg" alt="profile-pic"></div>
                                <div class="content-profile-name">
                                    <span>Priya Nayak</span>
                                    <span>11 April 2021 13:02</span>
                                </div>                        
                            </div>
                            <div class="content-tag">
                                jobs
                            </div>
                        </div>
                        <div class="content-text">
                            Hey guys there are jobs available in TCS click this link to apply 
                            https://www.tcs.com
                        </div>
                    </div>
                    <div class="content-interact">
                        <div class="content-interact-save">
                            <button class="btn"><i class="far fa-bookmark"></i></button>
                        </div>
                        <div class="content-interact-comment">
                            <div class="comment">
                            <button class="btn"><i class="far fa-comment-alt"></i></button>
                            <span>3</span>
                            </div>
                            <div class="show show-no">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content temp">
                    <div class="content-padding">
                        <div class="content-heading">TCS is hiring web developers</div>
                        <div class="content-profile-info">
                            <div class="content-profile-pic-name">
                                <div class="content-profile-pic"><img src="images/profile-pic.jpg" alt="profile-pic"></div>
                                <div class="content-profile-name">
                                    <span>Priya Nayak</span>
                                    <span>11 April 2021 13:02</span>
                                </div>                        
                            </div>
                            <div class="content-tag">
                                jobs
                            </div>
                        </div>
                        <div class="content-text">
                            Hey guys there are jobs available in TCS click this link to apply 
                            https://www.tcs.com
                        </div>
                    </div>
                    <div class="content-interact">
                        <div class="content-interact-save">
                            <button class="btn"><i class="far fa-bookmark"></i></button>
                        </div>
                        <div class="content-interact-comment">
                            <div class="comment">
                            <button class="btn"><i class="far fa-comment-alt"></i></button>
                            <span>3</span>
                            </div>
                            <div class="show show-no">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content temp">
                    <div class="content-padding">
                        <div class="content-heading">TCS is hiring web developers</div>
                        <div class="content-profile-info">
                            <div class="content-profile-pic-name">
                                <div class="content-profile-pic"><img src="images/profile-pic.jpg" alt="profile-pic"></div>
                                <div class="content-profile-name">
                                    <span>Priya Nayak</span>
                                    <span>11 April 2021 13:02</span>
                                </div>                        
                            </div>
                            <div class="content-tag">
                                jobs
                            </div>
                        </div>
                        <div class="content-text">
                            Hey guys there are jobs available in TCS click this link to apply 
                            https://www.tcs.com
                        </div>
                    </div>
                    <div class="content-interact">
                        <div class="content-interact-save">
                            <button class="btn"><i class="far fa-bookmark"></i></button>
                        </div>
                        <div class="content-interact-comment">
                            <div class="comment">
                            <button class="btn"><i class="far fa-comment-alt"></i></button>
                            <span>3</span>
                            </div>
                            <div class="show show-no">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content temp">
                    <div class="content-padding">
                        <div class="content-heading">TCS is hiring web developers</div>
                        <div class="content-profile-info">
                            <div class="content-profile-pic-name">
                                <div class="content-profile-pic"><img src="images/profile-pic.jpg" alt="profile-pic"></div>
                                <div class="content-profile-name">
                                    <span>Priya Nayak</span>
                                    <span>11 April 2021 13:02</span>
                                </div>                        
                            </div>
                            <div class="content-tag">
                                jobs
                            </div>
                        </div>
                        <div class="content-text">
                            Hey guys there are jobs available in TCS click this link to apply 
                            https://www.tcs.com
                        </div>
                    </div>
                    <div class="content-interact">
                        <div class="content-interact-save">
                            <button class="btn"><i class="far fa-bookmark"></i></button>
                        </div>
                        <div class="content-interact-comment">
                            <div class="comment">
                            <button class="btn"><i class="far fa-comment-alt"></i></button>
                            <span>3</span>
                            </div>
                            <div class="show">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content temp">
                    <div class="content-padding">
                        <div class="content-heading">TCS is hiring web developers</div>
                        <div class="content-profile-info">
                            <div class="content-profile-pic-name">
                                <div class="content-profile-pic"><img src="images/profile-pic.jpg" alt="profile-pic"></div>
                                <div class="content-profile-name">
                                    <span>Priya Nayak</span>
                                    <span>11 April 2021 13:02</span>
                                </div>                        
                            </div>
                            <div class="content-tag">
                                jobs
                            </div>
                        </div>
                        <div class="content-text">
                            Hey guys there are jobs available in TCS click this link to apply 
                            https://www.tcs.com
                        </div>
                    </div>
                    <div class="content-interact">
                        <div class="content-interact-save">
                            <button class="btn"><i class="far fa-bookmark"></i></button>
                        </div>
                        <div class="content-interact-comment">
                            <div class="comment">
                            <button class="btn"><i class="far fa-comment-alt"></i></button>
                            <span>3</span>
                            </div>
                            <div class="show">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content temp">
                    <div class="content-padding">
                        <div class="content-heading">TCS is hiring web developers</div>
                        <div class="content-profile-info">
                            <div class="content-profile-pic-name">
                                <div class="content-profile-pic"><img src="images/profile-pic.jpg" alt="profile-pic"></div>
                                <div class="content-profile-name">
                                    <span>Priya Nayak</span>
                                    <span>11 April 2021 13:02</span>
                                </div>                        
                            </div>
                            <div class="content-tag">
                                jobs
                            </div>
                        </div>
                        <div class="content-text">
                            Hey guys there are jobs available in TCS click this link to apply 
                            https://www.tcs.com
                        </div>
                    </div>
                    <div class="content-interact">
                        <div class="content-interact-save">
                            <button class="btn"><i class="far fa-bookmark"></i></button>
                        </div>
                        <div class="content-interact-comment">
                            <div class="comment">
                            <button class="btn"><i class="far fa-comment-alt"></i></button>
                            <span>3</span>
                            </div>
                            <div class="show">
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of posts-->
            </div>

            <!--committee-->
            <div id="committee">
                <div class="black"></div>
                <div class="centered committee-cont">
                    <i class="fas fa-user-friends"></i>
                </div>
                <div class="all-committee">
                    <div class="committee">
                        <span class="committee-side"></span>
                        <div class="committee-content">
                            <div class="committee-name">Technobeat</div>
                            <div class="committee-dept">Department : IT and CS</div>    
                        </div>
                        <button class="btn committee-add-sub"><i class="far fa-minus-square"></i></button>
                    </div>
                    <div class="committee">
                        <span class="committee-side"></span>
                        <div class="committee-content">
                            <div class="committee-name">Spectrum</div>
                            <div class="committee-dept">Department : All</div>
                        </div>
                        <button class="btn committee-add-sub"><i class="far fa-plus-square"></i></button>
                    </div>
                    <div class="committee">
                        <span class="committee-side"></span>
                        <div class="committee-content">
                            <div class="committee-name">Natyakarmi</div>
                            <div class="committee-dept">Department : All</div>
                        </div>
                        <button class="btn committee-add-sub"><i class="far fa-plus-square"></i></button>
                    </div>
                    <div class="committee">
                        <span class="committee-side"></span>
                        <div class="committee-content">
                            <div class="committee-name">Panache</div>
                            <div class="committee-dept">Department : Bcom</div>
                        </div>
                        <button class="btn committee-add-sub"><i class="far fa-minus-square"></i></button>
                    </div>
                    <!--end of committess-->
                </div>
            </div>
        </main>
    </div>

    <!--back to top-->
    <div id="back-to-top-div"><button id="back-to-top" class="btn">up</button></div>

     <!--Post template-->
    <form class="post-content temp all" action="includes/post.inc.php" method="post" name="post-form" >
        <div class="content-padding">
            <div class="content-heading">
                <input type="text" id="heading" placeholder="Enter heading" name="heading">
            </div>
            <div class="content-profile-info">
                <div class="content-profile-pic-name">
                    <div class="content-profile-pic"><img src="images/profile-pic.jpg" alt="profile-pic"></div>
                    <div class="content-profile-name">
                        <span>
                            <?php 
                                if(isset($_SESSION["fullname"]))
                                { 
                                    echo $_SESSION["fullname"];
                                }
                                else
                                {
                                    echo "Invalid";
                                }
                            ?>
                        </span>
                        <span id="currenttime">
                        </span>
                    </div>                        
                </div>
                <div class="content-tag">
                    <select id="select-tag" name="select-tag">
                        <option>jobs</option>
                        <option>it/css</option>
                        <option>bcom</option>
                    </select>
                </div>
            </div>
            <div class="content-text">
                <textarea placeholder="Enter content" id="content" name="content"></textarea>
            </div>
        </div>
        <div class="content-interact">
            <button class="btn" id="cancel">cancel</button>
            <div class="send post">
            <!-- <input type="checkbox" class="btn show" id="post-show-btn" name="show">
            <input type="checkbox" name="chk1">   -->
                <button type="submit" id="posted-content" name="submit" class="btn"><i class="far fa-paper-plane"></i></button>
                <div  class="btn show"  id="post-show-btn"></div>
            </div>

        </div>
    </form>

    <script src="script/script.js"></script>
</body>
</html>