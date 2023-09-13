<!DOCTYPE html>
<html>
<head>
    <title>Matriz Aleatória</title>
</head>
<body>
    <h1>Matriz Aleatória</h1>

    <?php
    // Defina o tamanho da matriz (x e y)
    $x = 5; // Número de linhas
    $y = 4; // Número de colunas

    // Crie uma tabela HTML para exibir a matriz
    echo '<table border="1">';

    // Gere a matriz aleatória e exiba-a na tabela
    for ($i = 0; $i < $x; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $y; $j++) {
            $valor = rand(1, 1000);
            echo '<td>' . $valor . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
    ?>

</body>
</html>
