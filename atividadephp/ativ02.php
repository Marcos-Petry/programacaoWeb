<?php
echo "Digite um número: ";
$numero = intval(fgets(STDIN));

if ($numero % 2 === 0) {
    echo "Valor divisível por 2\n";
} else {
    echo "O valor não é divisível por 2\n";
}