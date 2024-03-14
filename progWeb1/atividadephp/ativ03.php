<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Área de Quadrado</title>
</head>
<body>
    <h1>Calculadora de Área de Quadrado</h1>
    <form method="post" action="">
        <label for="comprimentoLado">Digite o comprimento dos lados do quadrado em metros:</label>
        <input type="text" name="comprimentoLado" id="comprimentoLado">
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $comprimentoLado = floatval($_POST["comprimentoLado"]);
        $area = $comprimentoLado * $comprimentoLado;
        echo "A área do quadrado de lado {$comprimentoLado} metros é {$area} metros quadrados";
    }
    ?>
</body>
</html>
