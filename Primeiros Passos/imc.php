<?php

$altura = 1.65;
$peso = 80;
$imc = $peso / ($altura ** 2);

if ($imc < 18.5) {
    echo "Abaixo do peso";
} else if ($imc >= 18.5 and $imc <= 24.9) {
    echo "Peso normal";
} else if ($imc >= 25 and $imc <= 29.9) {
    echo "Sobrepeso";
} else if ($imc >= 30 and $imc <= 34.9) {
    echo "Obesidade Grau I";
} else if ($imc >= 35 and $imc <= 39.9) {
    echo "Obesidade Grau II"; 
} else {
    echo "Obesidade Mórbida";
}