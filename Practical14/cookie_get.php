<?php


if (isset($_COOKIE["username"])) {
    echo "Welcome back, " . $_COOKIE["username"] . " (from cookie)<br>";
} else {
    echo "No cookie found or it has expired.<br>";
}

echo "<a href='cookie_set.php'>Go back to set a cookie</a>";
?>
