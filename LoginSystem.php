<!DOCTYPE html>
<html>
<body>

<form method="POST">
  Username: <input type="text" name="username"><br><br>
  Password: <input type="password" name="password"><br><br>
  <input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correct_user = "sumit";
    $correct_pass = "1234";

    if ($_POST['username'] == $correct_user && $_POST['password'] == $correct_pass) {
        echo "<h3 style='color:green;'>✅ Login Successful! Welcome, admin!</h3>";
    } else {
        echo "<h3 style='color:red;'>❌ Invalid username or password!</h3>";
    }
}
?>

</body>
</html>