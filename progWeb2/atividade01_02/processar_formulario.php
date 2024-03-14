<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento do Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Dados Enviados</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<p><strong>Método:</strong> POST</p>";
            echo "<p><strong>Cabeçalho da Requisição:</strong></p>";
            foreach (apache_request_headers() as $name => $value) {
                echo "<p>$name: $value</p>";
            }
            echo "<p><strong>Dados do Formulário:</strong></p>";
            echo "<p><strong>Nome:</strong> " . htmlspecialchars($_REQUEST['nome']) . "</p>";
            echo "<p><strong>Telefone:</strong> " . htmlspecialchars($_REQUEST['telefone']) . "</p>";
            echo "<p><strong>E-mail:</strong> " . htmlspecialchars($_REQUEST['email']) . "</p>";
            echo "<p><strong>Mensagem:</strong> " . htmlspecialchars($_REQUEST['mensagem']) . "</p>";
        } else {
            echo "<p>Este script espera um método POST.</p>";
        }
        ?>
    </div>
</body>
</html>
