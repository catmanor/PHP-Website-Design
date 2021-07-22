<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Login Page</title>
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/login.css">
    </head>

    <body>

    <?php
        require('db.php'); //connection to db code
        include("pa_sessionActiveCheck.php");

        // Note: arrive at this page only if there is no active session
        // If form submitted, insert values into the database.
        if (isset($_POST['username'])){
            // removes backslashes
            $username = stripslashes($_POST['username']);
            //escapes special characters in a string
            $username = mysqli_real_escape_string($connect,$username);

            $password = stripslashes($_POST['password']);
            $password = mysqli_real_escape_string($connect,$password);

            $address = $_SESSION['regaddress'];
            $phone = $_SESSION['regphone'];

            //Checking is user existing in the database or not
            $query = "SELECT * FROM `members` WHERE username='$username' 
            and password='".md5($password)."'";
            $result = mysqli_query($connect,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);

            if($rows==1){
            $_SESSION['username'] = $username;
            $_SESSION['address'] = $address;
            $_SESSION['phone'] = $phone;

            // Redirect user to index.php
            header("Location: tea.php");

            }else{
    ?>
   
            <!-- Navigation bar -->
            <?php
                include("nav_bar.php");
            ?>

            <!-- Sign in area -->
            <div class="sign-in-area">
                <h1>Log in</h1>

                <!-- Form to get information written by user in login page -->
                <form action="" method="post">
                    <div class="block">
                        <label>Username</label>
                        <input type="text" value="" name="username">
                    </div>
                    <div class="block">
                        <label>Password</label>
                        <input type="text" value="" name="password">
                    </div>
                    <div class="block center submit-button">
                        <input type="submit" value="Sign in">
                    </div>
                    <p><a href="register.php">New? Create one by clicking here</a></p>
                </form>
            </div>

    <?php                
            echo "<h3>Username/password is incorrect.</h3>";
            }
        }else{
    ?>

            <!-- Navigation bar -->
            <?php
                include("nav_bar.php");
            ?>

            <!-- Sign in area -->
            <div class="sign-in-area">
                <h1>Log in</h1>

                <!-- Form to get information written by user in login page -->
                <form action="" method="post">
                    <div class="block">
                        <label>Username</label>
                        <input type="text" value="" name="username">
                    </div>
                    <div class="block">
                        <label>Password</label>
                        <input type="text" value="" name="password">
                    </div>
                    <div class="block center submit-button">
                        <input type="submit" value="Sign in">
                    </div>
                    <p><a href="register.php">New? Create one by clicking here</a></p>
                </form>
            </div>

        <?php } ?>

    </body>

</html>