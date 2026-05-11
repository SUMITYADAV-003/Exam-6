<?php
$num = 30;
$rows = 3;

for ($i = 1; $i <= $rows; $i += 2) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
    }
    echo "<br>";
}
?>