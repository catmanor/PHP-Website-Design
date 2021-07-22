<!-- Navigation bar -->
<?php

//session_start();

if(isset($_SESSION["username"])){
?>

<!-- Navigation bar for member -->
<div class="nav-bar">
    <div class="logo">
        <a href="tea.php">WHATsTea</a>
    </div>
    <div class="nav-pages">
        <a href="tea.php">TEA</a>
    </div>
    <div class="nav-info">
        <?php echo '
        <a href="membership.php">'. $_SESSION["username"]. '</a>
        '; ?>
    </div>
</div>

<?php 
}
else {
?>

<!-- Navigation Bar for visitors -->
<div class="nav-bar">
    <div class="logo">
        <a href="tea.php">WHATsTea</a>
    </div>
    <div class="nav-pages">
        <a href="tea.php">TEA</a>
    </div>
    <div class="nav-info">
        <a href="login.php">LOGIN</a>
    </div>
</div>

<?php } ?>