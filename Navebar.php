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
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php 

            if($_SESSION['userrole'] == "seller"){
               echo "<li class='nav-item'>
                        <a class='nav-link' href='#'>Features</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>Pricing</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link disabled' href='#'>Disabled</a>
                    </li>";
            }elseif($_SESSION['userrole'] == "admin"){
                echo "<li class='nav-item'>
                        <a class='nav-link' href='#'>Features</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>Pricing</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link disabled' href='#'>Disabled</a>
                    </li>";
            }
        ?>
        <li class='nav-item'>
            <a class='nav-link' href='#'>Logout.php</a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='#'>Pricing</a>
        </li>
        </ul>
    </div>
    </nav>
</body>
</html>