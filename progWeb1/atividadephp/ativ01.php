<?php
// Valores das variáveis
$valor1 = 15;
$valor2 = 5;
$valor3 = 10;

// Calcula a soma dos valores
$resultado = $valor1 + $valor2 + $valor3;

// Verifica as condições e define a cor do texto
if ($valor1 > 10) {
    echo "<span style='color: blue;'>$resultado</span>";
} elseif ($valor2 < $valor3) {
    echo "<span style='color: green;'>$resultado</span>";
} elseif ($valor3 < $valor1 && $valor3 < $valor2) {
    echo "<span style='color: red;'>$resultado</span>";
} else {
    echo "$resultado";
}