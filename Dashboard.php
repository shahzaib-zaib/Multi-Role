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

        include "config.php";
        
        $select_query = "SELECT * FROM registrationtable";
        $run = mysqli_query($con, $select_query);
        $noofrecord = mysqli_num_rows($run);
        if ($noofrecord > 0) { ?>
            <table>
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    </tr>
                </thead>
                <tbody>
        <?php
            while($record = mysqli_fetch_array($run))
            {
                echo "<tr>
                <td>".$record."['0']</td>
                <td>".$record."['1']</td>
                <td>".$record."['2']</td>
                <td>".$record."['3']</td>
                <td>".$record."['4']</td>
                </tr>";
            }
            echo "</tbody>";
        } else {
            echo "Table has no record"
        }
        

    ?>
    </table>
</body>
</html>