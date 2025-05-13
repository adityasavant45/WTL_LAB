<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = $_POST["username"];
    header("Location: welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>

    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <input type="submit" value="Login">
    </form>

</body>
</html>
