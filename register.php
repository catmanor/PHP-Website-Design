<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Register Page</title>
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/register.css">
    </head>

    <body>
        <?php

            // Check whether session has been set
            require('db.php');
            include("pa_sessionActiveCheck.php");


            // If form submitted, insert values into the database.
            if (isset($_POST['username'])){
                // removes backslashes
                $username = stripslashes($_POST["username"]);
                //escapes special characters in a string
                $username = mysqli_real_escape_string($connect,$username);

                $password = stripslashes($_POST["password"]);
                $password = mysqli_real_escape_string($connect,$password);

                $address = stripslashes($_POST["address"]);
                $address = mysqli_real_escape_string($connect,$address);
                $phone = stripslashes($_POST["phone"]);
                $phone = mysqli_real_escape_string($connect,$phone);

                //Checking is user existing in the database or not
                $query = "SELECT * FROM `members` WHERE username='$username' 
                and password='".md5($password)."'";
                $result = mysqli_query($connect,$query) or die(mysql_error());
                $rows = mysqli_num_rows($result);

                if ($username != "" && $password != ""){
                if($rows==1){
        ?>
        

        <!-- Navigation bar -->
        <?php
            include("nav_bar.php");
        ?>

            <!-- Sign up content -->
            <div class="sign-up-area">
                <h1>Sign up</h1>
                <form action="" method="post">
                    <div class="block">
                        <label>Username</label>
                        <input type="text" value="" name="username">
                    </div>
                    <div class="block">
                        <label>Password</label>
                        <input type="text" value="" name="password">
                    </div>
                    <div class="block">
                        <label>Address</label>
                        <input type="text" value="" name="address">
                    </div>
                    <div class="block">
                        <label>Phone#</label>
                        <input type="text" value="" name="phone">
                    </div>
                    <div class="block center submit-button">
                        <input type="submit" value="SIGN UP">
                    </div>
                </form>
            </div>  
        
        <?php      
            echo "<h3>Username already in use. Choose different username.</h3>";
            }
            else {
                $query = "INSERT into `members` (username, password, address, phone)
                        VALUES ('$username', '".md5($password)."', '$address', '$phone')";
                $result = mysqli_query($connect,$query);
                // Use session to store data to server

                //echo $address;
                $_SESSION['regaddress'] = $address;
                $_SESSION['regphone'] = $phone;


                if($result){
                
                echo "<h3>You are registered successfully.</h3>";
                header("Location: login.php");
                }
            }
            }
            else {
                    // Navigation bar
                    include("nav_bar.php");
                ?>
                
                <!-- Sign up content -->
                <div class="sign-up-area">
                    <h1>Sign up</h1>
                    <form action="" method="post">
                        <div class="block">
                            <label>Username</label>
                            <input type="text" value="" name="username">
                        </div>
                        <div class="block">
                            <label>Password</label>
                            <input type="text" value="" name="password">
                        </div>
                        <div class="block">
                            <label>Address</label>
                            <input type="text" value="" name="address">
                        </div>
                        <div class="block">
                            <label>Phone#</label>
                            <input type="text" value="" name="phone">
                        </div>
                        <div class="block center submit-button">
                            <input type="submit" value="SIGN UP">
                        </div>
                    </form>
                </div> 
                <?php
                echo "Please enter your username and password!!";
            }
            }

            else {
        ?>

                <!-- Navigation bar -->
                <?php
                    include("nav_bar.php");
                ?>
                
                <!-- Sign up content -->
                <div class="sign-up-area">
                    <h1>Sign up</h1>
                    <form action="" method="post">
                        <div class="block">
                            <label>Username</label>
                            <input type="text" value="" name="username">
                        </div>
                        <div class="block">
                            <label>Password</label>
                            <input type="text" value="" name="password">
                        </div>
                        <div class="block">
                            <label>Address</label>
                            <input type="text" value="" name="address">
                        </div>
                        <div class="block">
                            <label>Phone#</label>
                            <input type="text" value="" name="phone">
                        </div>
                        <div class="block center submit-button">
                            <input type="submit" value="SIGN UP">
                        </div>
                    </form>
                </div>  

        <?php
            }
        ?>
        
    </body>

</html>