<?php
session_start();

// Store session
$_SESSION['username'] = "Sumit";
$_SESSION['age'] = 21;

// Retrieve session
echo "Username: " . $_SESSION['username'] . "<br>";
echo "Age: " . $_SESSION['age'];
?>