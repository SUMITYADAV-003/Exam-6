<?php
$filename = "myfile.txt";

// Write to file
$file = fopen($filename, "w");
fwrite($file, "Priyanshu! This is written by admin Priyanshu .");
fclose($file);
echo "Data written successfully!<br>";

// Read from file
$file = fopen($filename, "r");
$content = fread($file, filesize($filename));
fclose($file);
echo "File Content: " . $content;
?>