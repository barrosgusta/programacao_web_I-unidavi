<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $firstVar = 11;
        $secondVar = 7;
        $thirdVar = 20;
    
        if ($firstVar > 10) {
            echo "<p style='color: blue' > ".($firstVar + $secondVar + $thirdVar)." </p>";
        };
        if ($secondVar < $thirdVar) {
            echo "<p style='color: green' > ".($firstVar + $secondVar + $thirdVar)." </p>";
        };
        if ($thirdVar < $firstVar and $thirdVar < $secondVar) {
            echo "<p style='color: red' > ".($firstVar + $secondVar + $thirdVar)." </p>";
        };
    ?>
</body>
</html>