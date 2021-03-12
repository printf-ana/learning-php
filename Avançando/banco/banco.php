<?php

//include 'funcoes.php';        --->        arquivo não essencial
require_once 'funcoes.php';



$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => "Maria",
        'saldo' => 10000
    ],
    '123.456.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123.456.789-11'] = sacar(
    $contasCorrentes['123.456.789-11'],
    valorASacar: 500
);

$contasCorrentes['123.456.789-12'] = sacar(
    $contasCorrentes['123.456.789-12'],
    valorASacar: 200
);

$contasCorrentes['123.456.789-10'] = depositar(
    $contasCorrentes['123.456.789-10'],
    valorADepositar: 900
);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}
