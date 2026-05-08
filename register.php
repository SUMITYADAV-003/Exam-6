<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; display: flex; justify-content: center; padding-top: 50px; }
        .card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 350px; }
        h2 { text-align: center; color: #333; }
        input { width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 12px; border: none; border-radius: 5px; background-color: #28a745; color: white; font-size: 16px; cursor: pointer; }
        button:hover { background-color: #218838; }
        .msg { text-align: center; font-weight: bold; }
    </style>
</head>
<body>

<div class="card">
    <h2>Register</h2>
    
    <?php
    if (isset($_POST['btn_save'])) {
        $n = $_POST['txt_name'];
        $e = $_POST['txt_email'];
        $p = $_POST['txt_pass'];
        $sql = "INSERT INTO users (name, email, password) VALUES ('$n', '$e', '$p')";
        if (mysqli_query($conn, $sql)) {
            echo "<p class='msg' style='color:green;'>Saved Successfully!</p>";
        }
    }
    ?>

    <form method="POST">
        <input type="text" name="txt_name" placeholder="Full Name" required>
        <input type="email" name="txt_email" placeholder="Email Address" required>
        <input type="password" name="txt_pass" placeholder="Create Password" required>
        <button type="submit" name="btn_save">Create Account</button>
    </form>
</div>

</body>
</html>