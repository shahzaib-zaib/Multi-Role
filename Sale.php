<?php
    session_start();
    if($_SESSION['userrole'] == "seller"){
        header('location:logout.php');
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
    <?php include "Navbar.php"; ?>
    <h1>Sale</h1>
</body>
</html>