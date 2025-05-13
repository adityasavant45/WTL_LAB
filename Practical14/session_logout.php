<?php
// session_logout.php
session_start();
session_unset();  // Removes all session variables
session_destroy();  // Destroys the session

echo "You have been logged out.<br>";
echo "<a href='session_login.php'>Login again</a>";
?>
