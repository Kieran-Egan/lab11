<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST["num"]);

    if ($num > 0) {
        echo "<h3>Multiplication Table from 1 to $num</h3>";
        echo "<table border='1'>";

        // Print column headers
        echo "<tr><th>&times;</th>";
        for ($col = 1; $col <= $num; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";

        // Print multiplication rows
        for ($row = 1; $row <= $num; $row++) {
            echo "<tr>";
            echo "<th>$row</th>"; // Row index
            for ($col = 1; $col <= $num; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Please enter a valid positive number.</p>";
    }
} else {
    echo "<p>No data received. Please enter a number from the form.</p>";
}
?>

