<?php
    if($_SESSION['userrole'] == "customer"){
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
    <?php include "Navebar.php"; ?>
    <h1>Add Product</h1>
</body>
</html>