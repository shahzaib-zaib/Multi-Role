<?php 
    session_start(); 
    
    if ($_SESSION['userrole'] == null) {
        header("location:loginpage.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Wlcome</h1>
    <a href="logout.php">Logout</a>

    <?php

        

    ?>
</body>
</html>