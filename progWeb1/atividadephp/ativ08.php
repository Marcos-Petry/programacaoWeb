<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Parcelas com Juros Simples</title>
</head>
<body>

<?php
// Valor à vista da moto
$valorAVista = 8654.00;

// Taxa de juros inicial (1,5%)
$taxaJuros = 0.015;

// Opções de prazo de pagamento
$prazos = [24, 36, 48, 60];

foreach ($prazos as $prazo) {
    $valorParcela = ($valorAVista * (1 + ($taxaJuros * $prazo))) / $prazo;

    echo "Para $prazo vezes, o valor da parcela é R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";

    $taxaJuros += 0.005;
}
?>

</body>
</html>