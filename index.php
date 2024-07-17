<!DOCTYPE html>
<html>

<head>
    <title>LOnline Learning Platform</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="login.php" method="post">
        <h3>Enter Credentials</h3>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
            <?php
        } ?>

        <center>
            <label for="UName"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="UName" id="uname" required>
            <br><br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
            <br>
            <button type="submit" href="login.php">Login</button>
            &nbsp;
            <!--<button type="clear" class="cancelbtn">Cancel</button> -->
            <br>
            <div class=\"row\">
                <div class=\"col s5 offset-s1 right-align\">
                    <input type="checkbox" checked="checked" persist\" id=\"persist\" />
                    <label for=\"persist\">Remember me</label>
                </div>
                <div class=\"col s5 offset-s1 left-align\">
                    <a href=\"forgot-password.php\">Forgot password?</a>
                    &nbsp;
                    <a href=\"signup.php\">New? Sign up here</a>
                </div>
            </div>
            </div>
        </center>


</html>