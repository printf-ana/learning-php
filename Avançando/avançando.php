<?php

$idadeList = [11, 20, 49, 64];

$idadeList[] = 2; //adicionando, colchetes podem ser vazios em listas numéricas, o php adiciona automaticamente


for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}