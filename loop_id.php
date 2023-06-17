<?php
echo "<table border=1>";
for ($a = 0; $a < 10; $a++) {
    echo "<tr>";
    for ($b = 0; $b < 10; $b++) {
        echo "<td>" . $a . $b . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "</hr>";
echo "<table border=1>";
for ($x = 1; $x < 10; $x++) {
    echo "<tr>";
    for ($y = 1; $y < 10; $y++) {
        echo "<td>" . $x * $y . "</td>";
    }
}
echo "</table>";
