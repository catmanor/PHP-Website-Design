<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Home Page</title>
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/register.css">
    </head>

    <body>
        <?php

            // Check whether session has been set
            require('db.php');
            // include("pa_sessionActiveCheck.php");

            // Navigation bar

            include("nav_bar.php");
        ?>

        <h1>Welcome to WhatsTea!</h1>
        <img src="img/tea.jpg" alt="home page image" style="width:100%;">
        
    </body>

</html>