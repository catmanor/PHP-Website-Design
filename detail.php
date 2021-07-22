<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Detail Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fordetail.css">
</head>

<body>
    <?php
        require('db.php'); //connection to db code
    ?>

    <!-- Navigation bar -->
    <?php
        session_start();
        include("nav_bar.php");
    ?>

    <!-- Get value from post and store them in database -->
    <?php
        if (isset($_POST['comments']) && isset($_SESSION['username'])) {
            $comments= $_POST['comments'];
            $username = $_SESSION['username'];
            $productindex = $_REQUEST['productindex'];
            $comquery = "INSERT into `comments` (username, comment, productindex)
                VALUES ('$username', '$comments', '$productindex')";
            $result = mysqli_query($connect,$comquery);
        } else {
            $comments = "";
            $productindex = $_REQUEST['productindex'];
        }

        
    
    ?>

    <!-- Tea details  -->
    <section class="tea-detail-section">

        <!-- Area for the image -->
        <div class="tea-detail flex-container">
            <div class="img-area flex-item left">
                <img src="img/<?php echo $_REQUEST['imgName']?> " alt="Tea Image">
            </div>

            <!-- Area for the contents -->
            <div class="content-area flex-item right">
                <h3><?php echo $_REQUEST['teaName'] ?></h3>
                <p>Tea Type: <?php echo $_REQUEST['teaType'] ?></p>
                <p>Ingredients: <?php echo $_REQUEST['ingredient'] ?></p>
                <p>Caffeine Level: <?php echo $_REQUEST['caffeineLevel'] ?></p>
            </div>

            <!-- Area for the comment input -->
            <div class="comment-area flex-item left" id="comment">
                <form action="#comment" method="post">
                <label>Comments:</label><br>
                <textarea cols="50" rows="12" name="comments" id="para1"></textarea><br>
                <input type="submit" name="button" value="Submit"/></form>

            </div>

            <!-- Area for the comments -->
            <div class="review-area flex-item right">
                <h3>Review</h3>

                <?php
                
                    if(!isset($_SESSION['username'])) {
                        echo "You cannot comment if you are not a member!";
                    } else {
                    $reviewQuery = "SELECT * FROM `comments` WHERE productindex='$productindex'";
                    $reviewResult = mysqli_query($connect, $reviewQuery);
                    // print_r($reviewResult);

                    echo "<table>";
                    while ($row = mysqli_fetch_assoc($reviewResult)) {
                        $tempArr = array();
                        foreach($row as $value) {
                            array_push($tempArr, stripslashes($value));
                        }
                        echo "
                            <tr>
                                <td id='name-col'>$tempArr[1]:</td>
                                <td id='comment-col'>$tempArr[2]</td>
                            </tr>
                        ";
                    }
                    echo "</table>";
                }
                ?>

                

            </div>
        </div>
    
    </section>

</body>

</html>