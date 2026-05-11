<?php
// Set cookie (expires in 1 hour)
setcookie("user", "Sumityadav", time() + 3600);

// Retrieve cookie
if (isset($_COOKIE['user'])) {
    echo "Cookie Value: " . $_COOKIE['user'];
} else {
    echo "Cookie is being set. Refresh the page!";
}
?>