<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/sign-in.css" type="text/css" rel="stylesheet">
    <title>Forum | Login Page</title>
</head>
<body>
    <div class="container">
        <div id="error">
            <?php
                if(isset($_GET["error"]))
                {
                    if($_GET["error"]=="invalidlogin")
                    {
                        echo "<span class='sec3'>Invalid login details</span>";
                    }

                    if($_GET["error"]=="emptyInput")
                    {
                        echo "<span class='sec3'>Fill all the details</span>";
                    }
                }
            ?>
        </div>

        <div id="form">
            <form action="includes/signin.inc.php" name="signin" method="post">
                <div class="margin2">
                    <label for="user">Email address / Username</label>
                    <input type="text" name="user" id="user" placeholder="Enter email address or username">
                </div>
                <div class="margin2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="margin2" id="btn">
                    <button type="submit" id="submit" name="submit">Sign In</button>
                </div>
            </form>
        </div>

        <div id="link">
            New user?<a href="sign-up.php">Create an account</a>
        </div>
        
    </div>
</body>
</html>