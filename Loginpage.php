<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <p>Enter Your Email</p>
        <input type="email" name="name" id="">

        <p>Enter Your Password</p>
        <input type="password" name="pswd" id="">
        <input type="submit" name="btn" value="Register Yourself" id="">
    </form>
    <?php

        include "config.php";

        if(isset($_POST['btn'])){
            $a = $_POST['name'];
            $b = $_POST['pswd'];
            $login_query = "SELECT * FROM registrationtable WHERE Email = '$a' and Password = '$b'";

            $run_query = mysqli_query($con, $login_query);
            $verify = mysqli_num_rows($run_query);
        }

    ?>
</body>
</html>