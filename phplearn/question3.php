<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 3px;
        }
    </style>
</head>
<body>
    <h1>Multiplication Table</h1>
    <table cellpadding="3px" cellspacing="0px">
        <?php
        for ($row = 1; $row <= 6; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 5; $col++) {
                $result = $row * $col;
                echo "<td>$row * $col = $result</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
