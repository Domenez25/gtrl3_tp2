<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
        background-color: #f3f3f3;
        font-family: Arial, sans-serif;
        }

        div {
        width: 600px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        }

        h3 {
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
        }

        label {
        display: inline;
        font-weight: bold;
        margin-top: 10px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
        width: 50%;
        padding: 10px;
        margin: 5px 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        }

        input[type="checkbox"] {
        margin-right: 5px;
        }

        input[type="submit"] {
        width: 30%;
        padding: 10px;
        background-color: #0077b6;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        margin-top: 10px;
        transition: background-color 0.2s;
        }

        input[type="submit"]:hover {
        background-color: #005a91;
        }
    
    </style>
</head>
<body>
<div align="center">
<h3 align="center">TP 2<br />
User Authentication System.</h3>

    <h2>&nbsp;</h2>
    <h2 align="center">Login</h2>
        <form action="login.php" method="post">
        <p>
        	<label for="username">Username:</label>
        	<input type="text" name="username" required><br><br>
        	<label for="password">Password:</label>
        	<input type="password" name="password" required>
        </p>
        <p>
        	<label for="mail">Mail (if Sign Up):</label>
			<input type="email" name="email">
			<br>
        	<br>
        	<input type="checkbox" name="rememberMe"> Remember Me<br>
        	<br>
        	<input type="submit" name="login" value="Login"> 
        	&nbsp;&nbsp;
        	<input type="submit" name="register" value="Sign Up" id="register">
       	</p>
    </form>
</div>
</body>
</html>

<?php
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    setcookie("{$username}_{$email}", $password , time() + 3600 * 24, '/');
    header("Location: index.php");
    exit();
}
?>

<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    foreach ($_COOKIE as $cookieName => $cookieValue) {
        list($savedUsername, $savedEmail) = explode("_", $cookieName);

        if ($username === $savedUsername && $password === $cookieValue) {
            if (isset($_POST['rememberMe']))
                setcookie("logged" , $username , time() + (3600 * 24), '/');
            }
            else {
                setcookie("logged" , $username , time() + 120, '/');
            }
            header("Location: index.php");
            exit();
        }
    }
?>
