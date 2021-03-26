<?php
require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-00', 'Ana Dias');
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;

$segundaConta = new Conta('987.654.321-00', 'Vinicius');
var_dump($segundaConta);

new Conta('123', 'dgdsyug');
echo "Número de contas criadas: " . Conta::recuperaNumeroDeContas();