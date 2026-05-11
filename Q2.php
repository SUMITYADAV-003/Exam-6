<?php
$numbers = array(40, 10, 50, 20, 30);

sort($numbers); // Ascending
echo "Ascending: ";
foreach ($numbers as $n) {
    echo $n . " ";
}

echo "<br>";

rsort($numbers); // Descending
echo "Descending: ";
foreach ($numbers as $n) {
    echo $n . " ";
}
?>