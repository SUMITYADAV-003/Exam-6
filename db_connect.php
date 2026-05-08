<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "collection_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn) {
    echo "Database connected successfully!";
} else {
    echo "Connection failed";
}
?>