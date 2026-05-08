<!DOCTYPE html>
<html>
<body>

<form method="POST" enctype="multipart/form-data">
  Select Image: <input type="file" name="image"><br><br>
  <input type="submit" value="Upload">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target = "uploads/" . basename($_FILES['image']['name']);

    if (!is_dir("uploads")) mkdir("uploads"); 

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo "✅ Image Uploaded!<br>";
        echo "<img src='$target' width='200'>";
    } else {
        echo "❌ Upload failed!";
    }
}
?>

</body>
</html>