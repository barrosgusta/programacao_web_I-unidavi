<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php 
            $tamX = 10;
            $tamY = 10;

            $matriz = [];

            for ($i = 0; $i < $tamX; $i++) {
                for ($j = 0; $j < $tamY; $j++) {
                    $matriz[$i][$j] = rand(0, 100);
                };
            };

            for ($i = 0; $i < $tamX; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $tamY; $j++) {
                    echo "<td>" . $matriz[$i][$j] . "</td>";
                };
                echo "</tr>";
            };
        ?>
    <table>
</body>
</html>