<!DOCTYPE html>
<table border="1">
    <?php
    for ($x = 1; $x <= 20; $x++) {
        echo "<tr>";
        if ($x % 2 == 1) {
            echo "<tr bgcolor = 'pink'>";
        }
        for ($y = 1; $y <= 12; $y++) {
            echo "<td>" . $x * $y . "</td>";
        }
        echo "</tr>";
    }
    ?>

</table>

</body>

</html>