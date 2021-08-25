<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/sign-in.css" type="text/css" rel="stylesheet">
    <title>Forum | Sign Up</title>
</head>
<body>
    <div class="container" id="sign-in-cont">
        <div id="error">
            <?php
                
                if(isset($_GET["error"]))
                {
                    if($_GET["error"]=="emptyInput")
                    {
                        echo "<span class='sec3'>Fill in all the details</span>";
                    }

                    else if($_GET["error"]=="invalidUsername")
                    {
                        echo "<span class='sec3'>Invalid Username</span>";
                    }

                    else if($_GET["error"]=="invalidEmail")
                    {
                        echo "<span class='sec3'>Invalid Email</span>";
                    }

                    else if($_GET["error"]=="passwordMatchFail")
                    {
                        echo "<span class='sec3'>Passwords do not match</span>";
                    }

                    else if($_GET["error"]=="stmtfailed")
                    {
                        echo "<span class='sec3'>Connection failed</span>";
                    }

                    else if($_GET["error"]=="usernametaken")
                    {
                        echo "<span class='sec3'>Username or Email is taken</span>";
                    }

                    else if($_GET["error"]=="none")
                    {
                        echo '<p>You have signed up!</p>';
                    }
                }

            ?>
        </div>

        <div id="form">
            <form action="includes/signup.inc.php" name="signin" method="post">
                <div class="margin2">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter full name">
                </div>
                <div class="margin2">
                    <label for="email-id">Email address</label>
                    <input type="email" name="email-id" id="email-id" placeholder="Enter email id">
                </div>
                <div class="margin2">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Create a username">
                </div>
                <div class="margin2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Create a password">
                </div>
                <div class="margin2">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword">
                </div>
                <div class="margin2" id="btn">
                    <button type="submit" id="submit" name="submit">Sign Up</button>
                </div>
            </form>
        </div>

        <div id="link">
            Already a User?<a href="sign-in.php">Sign In</a>
        </div>
        
    </div>
    <script src="script/signin.js"></script>
</body>
</html>