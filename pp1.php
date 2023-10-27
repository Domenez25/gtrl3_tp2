<!DOCTYPE html>
<html>
<head>
    <title>Protected Page 1</title>
    <style>
        /* Center the content and apply basic styling */
body {
  background-color: #f3f3f3;
  font-family: Arial, sans-serif;
  text-align: center;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

h2 {
  color: #0077b6;
  font-size: 36px;
  margin: 10px;
}

p {
  color: #333;
  font-size: 18px;
  margin: 10px;
}

a {
  text-decoration: none;
  color: #0077b6;
  font-weight: bold;
  transition: color 0.2s;
}

a:hover {
  color: #005a91;
}

    </style>
</head>
<body>
    <h2>Welcome, userAccount!</h2>
    <p>This is a protected page 1.</p>
    <p><a href="index.php">Main page</a></p>
    <a href="script.php?logout=1">Logout</a>
</body>
</html>
