<?php
session_start();
?>
<!DOCTYPE html>
<html lang="eng" dir="ltr">

<head>
    <meta charset='utf-8'>
    <title>Sphagetii and Meatballs Recipe</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="author" content="Cecil">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>

<body class="content">
    <nav>
        <div class="nav_bar">
         
            <ul class="nav_links">
            <div class="logo">
               <li><a href="index.php">Home</a></li>
            </div>
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href ='profile.php'>Profile</a></li>";
                    echo "<li><a href ='includes/logout.inc.php'>Logout</a></li>";
                } else {
                    echo "<li><a href ='signup.php'>Sign up</a></li>";
                    echo "<li><a href ='login.php'>Log in</a></li>";
                }
                ?>
            </ul>
            <div class="burger_icon">&#9776;</div>
        </div>
    </nav>
    <div class="wrapper">
        
