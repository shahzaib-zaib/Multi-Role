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

        session_start();
        if(isset($_POST['btn'])){
            $a = $_POST['name'];
            $b = $_POST['pswd'];
            $login_query = "SELECT * FROM registrationtable WHERE Email = '$a' and Password = '$b'";

            $run_query = mysqli_query($con, $login_query);
            $verify = mysqli_num_rows($run_query);
            if ($verify == 1) {
                $array = mysqli_fetch_assoc($run_query);
                $_SESSION['name'] = $db['Name'];
                $_SESSION['userrole'] = $db['Role'];

                if ($_SESSION['userrole'] == "Admin") {
                    header('location:dashboard.php');
                } else {
                    header('location:homepage.php');
                }
                

            } else {
                echo "Invalid Credentials";
            }
            
        }

    ?>
</body>
</html>