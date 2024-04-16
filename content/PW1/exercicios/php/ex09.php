<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valorAVista = 8654.00;

        $taxaJuros = 0.02;

        $aumentoTaxa = 0.003;

        $parcelas = [24, 36, 48, 60];

        foreach ($parcelas as $numParcelas) {
            $montante = $valorAVista * pow(1 + $taxaJuros, $numParcelas);
            $valorParcela = $montante / $numParcelas;

            echo "Para $numParcelas vezes, o valor da parcela é: R$ " . number_format($valorParcela, 2) . "<br>";
            
            $taxaJuros += $aumentoTaxa;
        }
    ?>    
</body>
</html>

