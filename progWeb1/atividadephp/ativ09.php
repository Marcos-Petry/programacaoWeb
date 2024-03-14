<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Parcelas com Juros Compostos</title>
</head>
<body>

<?php
// Valor à vista da moto
$valorAVista = 8654.00;

// Taxa de juros inicial (2%)
$taxaJuros = 0.02;

// Opções de prazo de pagamento
$prazos = [24, 36, 48, 60];

foreach ($prazos as $prazo) {
    $valorParcela = $valorAVista * pow(1 + $taxaJuros, $prazo) * $taxaJuros / (pow(1 + $taxaJuros, $prazo) - 1);

    echo "Para $prazo vezes, o valor da parcela é R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";

    $taxaJuros += 0.003;
}
?>

</body>
</html>
