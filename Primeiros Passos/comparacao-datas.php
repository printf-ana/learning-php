<?php
$data_vencimento = '2021-03-22';

$data_pagamento = '';

$data_atual = date('Y-m-d');

if (!empty($data_pagamento)) {
    echo "Pago";
} elseif (strtotime($data_vencimento) < strtotime($data_atual)) {
    echo "Vencida";
} else {
    echo "Em aberto";
}
