<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valorAVista = 22500.00;

        $valorParcela = 489.65;

        $numParcelas = 60;

        $totalPago = $valorParcela * $numParcelas;

        $valorJuros = $totalPago - $valorAVista;

        echo "Mariazinha pagará R$ " . number_format($valorJuros, 2) . " em juros no financiamento em comparação ao valor a vista do carro.";
    ?>
</body>
</html>