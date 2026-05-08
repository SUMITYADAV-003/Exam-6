<?php
$conn = mysqli_connect("localhost", "root", "", "collection_db");

$id = 1; // ID to delete
$sql = "DELETE FROM students WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "✅ Record deleted successfully!";
} else {
    echo "❌ Error: " . mysqli_error($conn);
}
?>