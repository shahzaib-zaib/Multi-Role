<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <p>Enter Your Name</p>
        <input type="text" name="name" id="">

        <p>Enter Your Email</p>
        <input type="email" name="name" id="">

        <p>Enter Your Password</p>
        <input type="password" name="pswd" id="">

        <p>Who are you?</p>
        <select name="userole" id="">
            <option value="customer">Customer</option>
            <option value="seller">Seller</option>
        </select>
    </form>

    <?php

        include "config.php";
        if(isset($_POST['btn'])){
            $a = $_POST['name'];
            $b = $_POST['email'];
            $c = $_POST['pswd'];
            $d = $_POST['userrole'];

            $insert_query = "INSERT INTO registrationtable(Name, Email, Password, Role)
            VALUES ('$a', '$b', '$c', '$d')";

        }

    ?>
</body>
</html>