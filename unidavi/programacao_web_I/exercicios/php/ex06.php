<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valores = [
            'maçã' => 3.50,       
            'melancia' => 2.00,   
            'laranja' => 2.00,    
            'repolho' => 1.50,    
            'cenoura' => 2.00,    
            'batatinha' => 3.00   
        ];

        $quantidades = [
            'maçã' => 8,          
            'melancia' => 1.5,    
            'laranja' => 2.5,     
            'repolho' => 2,       
            'cenoura' => 2.5,     
            'batatinha' => 2      
        ];


        $total = 0;
        foreach ($valores as $produto => $preco) {
            $total += $valores[$produto] * $quantidades[$produto];
        }

        $dinheiroDisponivel = 50;

        if ($total > $dinheiroDisponivel) {
            $faltaDinheiro = $total - $dinheiroDisponivel;
            echo "<span style='color: red;'>Joãozinho precisa de mais R$ " . number_format($faltaDinheiro, 2) . " para pagar a conta.</span>";
        } elseif ($total == $dinheiroDisponivel) {
            echo "<span style='color: green;'>O saldo para compras foi esgotado.</span>";
        } else {
            $saldo = $dinheiroDisponivel - $total;
            echo "<span style='color: blue;'>Joãozinho ainda pode gastar R$ " . number_format($saldo, 2) . ".</span>";
        }
    ?>

</body>
</html>