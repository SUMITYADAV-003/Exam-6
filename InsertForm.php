<!DOCTYPE html>
<html>
<body>

<form method="POST">
  Name: <input type="text" name="name"><br><br>
  Email: <input type="email" name="email"><br><br>
  <input type="submit" value="Insert">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost", "root", "", "collection_db");
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (name, email) VALUES ('$name', '$email')";
    if (mysqli_query($conn, $sql)) {
        echo "✅ Record inserted successfully!";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
}
?>

</body>
</html>