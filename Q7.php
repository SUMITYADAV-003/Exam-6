<?php
$conn = mysqli_connect("localhost", "root", "", "collection_db");

if ($conn) {
    echo "✅ Database Connected Successfully!";
} else {
    echo "❌ Connection Failed: " . mysqli_connect_error();
}
?>