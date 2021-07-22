<?php
//include auth.php file on all secure pages
include("pa_sessionNotActiveCheck.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Membersip</title>
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/membership.css">
</head>

<body>

<?php

  // Get the username from Session
  $username = $_SESSION['username'];

  //connect to the db
  $connect = mysqli_connect("localhost","root","","Jingyun_He");
  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if (isset($_POST['modified-username'])){
    // Get the input data of modified username
    $modified_username = stripslashes($_POST['modified-username']);
    $modified_username = mysqli_real_escape_string($connect,$modified_username);

    // Update the username in the database as the modified one
    $sql = "UPDATE members SET username='$modified_username' WHERE username='$username'";

    if(mysqli_query($connect, $sql)){
      // echo "Your username has been modified successfully!";
    } else {
      // echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
    }


    $_SESSION["username"] = $modified_username;
  }
?>

<!-- Navigation bar -->
<?php
  include("nav_bar.php");
?>

<!-- Form to get data from Session -->
<div class="form personal-area">
    <p class="hello-line">Welcome to your membership page, <?php echo $_SESSION['username']; ?>!</p>
    <p class="info-line">Address: <?php echo $_SESSION['address']; ?></p>
    <p class="info-line">Phone number: <?php echo $_SESSION['phone']; ?></p>   
</div>

<!-- Close the sql connection -->
<?php
      mysqli_close($connect);
?>



<!-- Area for modifying the username -->
  <form action="membership.php" method="post">

      <label class="modify-label block">Modify your username</label>
      <input class="mod-input" type="text" value="" name="modified-username">



      <input class="mod-btn" type="submit" value="Modify">
  
  </form>

  <a href="logout.php" class="logout">Logout</a>

</body>
</html>