<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Juros do Financiamento</title>
</head>
<body>

<?php
// Valor à vista do carro
$valorAVista = 22500.00;

// Valor de cada parcela do financiamento
$valorParcela = 489.65;

// Número de parcelas
$numParcelas = 60;

$valorTotalParcelas = $valorParcela * $numParcelas;

$valorJuros = $valorTotalParcelas - $valorAVista;

echo "Mariazinha gastará um total de R$ " . number_format($valorJuros, 2, ',', '.') . " em juros em comparação ao valor à vista do carro (R$ " . number_format($valorAVista, 2, ',', '.') . ").";
?>

</body>
</html>
