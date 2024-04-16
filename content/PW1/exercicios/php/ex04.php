<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 20;

        $area = ($a * $b);

        if ($area > 10) {
            echo "<h3> A área do retângulo de $a e $b metros é: ".$area."</h3>";
        } else {
            echo "<h1> A área do retângulo de $a e $b metros é: ".$area."</h1>";
        }
    ?>
</body>
</html>