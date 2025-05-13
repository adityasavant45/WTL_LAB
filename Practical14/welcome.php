<?php

session_start();
if (isset($_SESSION["username"])) {
    echo "<h2>Welcome, " . $_SESSION["username"] . "!</h2>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "You are not logged in. <a href='login.php'>Login</a>";
}
?>
