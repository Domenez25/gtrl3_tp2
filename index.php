<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>

    <style>
        h3 {
        color: #0077b6;
        font-size: 36px;
        margin: 10px;
        }
        a {
        text-decoration: none; 
        color: #0077b6; 
        font-weight: bold; 
        transition: color 0.2s; 
        font-size: 40px;
        margin-left: 40px;
        }

        a:hover {
        color: #00a1e4; 
        }

        a:active {
        color: #00518a; 
        }

        a:visited {
        color: #8338ec; 
        }
    </style>
</head>
<body>
        <h3 align="center">TP 2<br /> User Authentication System</h3>
        <p>&nbsp;</p>
        <?php
    if (isset($_COOKIE['logged'])) {
        echo '<p><a href="pp1.php">Protected Page 1</a></p>';
        echo '<p><a href="pp2.php">Protected Page 2</a></p>';
        echo '<form action="index.php" method="post">';
        echo '<input type="submit" name="logout" value="Logout">';
        echo '</form>';

    } else {
        echo '<p><a href="login.php">Login</a></p>';
        echo '<p><a href="login.php">Protected Page 1</a></p>';
        echo '<p><a href="login.php">Protected Page 2</a></p>';
    }
    ?>
    <?php
    if (isset($_POST['logout'])) {
        setcookie("logged", "", time() - 3600, '/'); 
        header("Location: index.php");
        exit();
    }
    ?>

</body>
</html>
