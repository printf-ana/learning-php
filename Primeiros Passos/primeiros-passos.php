<?php

$idade = 20;
$idadeEm10Anos = $idade + 10;

echo $idadeEm10Anos . PHP_EOL;
echo gettype($idade) . PHP_EOL;

echo 'Minha idade é: ' . $idade . ' anos';
echo "\t";
echo "Minha idade em 10 anos será: $idadeEm10Anos anos.\n";

$numeroDePessoas = 2;

if ($idade == 18 || $idade > 18) {
    echo "Você tem $idade anos, pode entrar!";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhada, então pode entrar!";
} else {
    echo "Esse programa só é acessível para maiores de 18 anos, ou a partir de 16 anos acompanhado." . PHP_EOL;
}


