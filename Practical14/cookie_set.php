<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $remember = isset($_POST["remember"]);


    if ($remember) {
        setcookie("username", $username, time() + (86400 * 7), "/"); // 86400 = 1 day
        echo "Cookie set for 7 days.<br>";
    } else {
        echo "Remember me is not checked. No cookie set.<br>";
    }
    
    echo "<a href='cookie_get.php'>Go to check cookie</a>";
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie</title>
</head>
<body>

    <h2>Set Your Username with Remember Me Option</h2>

    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="remember">Remember Me:</label>
        <input type="checkbox" name="remember" id="remember"><br><br>

        <input type="submit" value="Set Cookie">
    </form>

</body>
</html>
