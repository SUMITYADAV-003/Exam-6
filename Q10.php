<?php
$conn = mysqli_connect("localhost", "root", "", "collection_db");

// Update record with ID = 1
$sql = "UPDATE students SET name='Updated Name', email='new@email.com' ";

if (mysqli_query($conn, $sql)) {
    echo "✅ Record updated successfully!";
} else {
    echo "❌ Error: " . mysqli_error($conn);
}
?>