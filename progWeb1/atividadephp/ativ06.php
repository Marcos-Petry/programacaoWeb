<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Compras do Joãozinho</title>
</head>
<body>

<?php
// Defina o valor disponível para Joãozinho
$valorDisponivel = 50.00;

// Defina o preço por quilograma de cada produto
$precoMaça      = 3.00;
$precoMelancia  = 2.50;
$precoLaranja   = 1.00;
$precoRepolho   = 2.00;
$precoCenoura   = 1.50;
$precoBatatinha = 2.00;

// Defina a quantidade em quilogramas comprada por Joãozinho
$quantidadeMaça      = 2.5;
$quantidadeMelancia  = 3;
$quantidadeLaranja   = 2;
$quantidadeRepolho   = 1.5;
$quantidadeCenoura   = 2;
$quantidadeBatatinha = 1;

$totalMaça      = $precoMaça * $quantidadeMaça;
$totalMelancia  = $precoMelancia * $quantidadeMelancia;
$totalLaranja   = $precoLaranja * $quantidadeLaranja;
$totalRepolho   = $precoRepolho * $quantidadeRepolho;
$totalCenoura   = $precoCenoura * $quantidadeCenoura;
$totalBatatinha = $precoBatatinha * $quantidadeBatatinha;

$totalCompra = $totalMaça + $totalMelancia + $totalLaranja + $totalRepolho + $totalCenoura + $totalBatatinha;

if ($totalCompra > $valorDisponivel) {
    $faltaDinheiro = $totalCompra - $valorDisponivel;
    echo "<p style='color: red;'>Joãozinho ultrapassou o limite disponível em R$ " . number_format($faltaDinheiro, 2) . ".</p>";
} elseif ($totalCompra == $valorDisponivel) {
    echo "<p style='color: green;'>Saldo para compras esgotado.</p>";
} else {
    $saldoRestante = $valorDisponivel - $totalCompra;
    echo "<p style='color: blue;'>Joãozinho ainda pode gastar R$ " . number_format($saldoRestante, 2) . ".</p>";
}

echo "<p>O valor total da compra foi de R$ " . number_format($totalCompra, 2) . ".</p>";
?>

</body>
</html>