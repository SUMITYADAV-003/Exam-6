<?php
session_start();

// Store session
$_SESSION['username'] = "Priyanshu kr";
$_SESSION['age'] = 21;

// Retrieve session
echo "Username: " . $_SESSION['username'] . "<br>";
echo "Age: " . $_SESSION['age'];
?>