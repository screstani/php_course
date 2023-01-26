<?php

$conta1 = [
    'nome' => 'Vinicius',
    'saldo' => 1000
];
$conta2 = [
    'nome' => 'Maria',
    'saldo' => 8000
];
$conta3 = [
    'nome' => 'Alle',
    'saldo' => 200
];

$contasCorrentes = [$conta1, $conta2, $conta3];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['nome'] . PHP_EOL;
    echo $cpf . PHP_EOL;
}

?>