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
    valorASacar: 15000
);

$contasCorrentes['123.456.789-12'] = sacar(
    $contasCorrentes['123.456.789-12'],
    valorASacar: 200
);

$contasCorrentes['123.456.789-10'] = depositar(
    $contasCorrentes['123.456.789-10'],
    valorADepositar: 900
);

unset($contasCorrentes['123.456.789-12']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Contas correntes</h1>
    <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
        <dl><?= $conta['titular']; ?> - <?= $cpf; ?></dl>
        <dd>Saldo: <?= $conta['saldo']; ?> </dd>
    <?php } ?>
</body>

</html>