<?php

require_once 'funcoes.php';

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

foreach ($contasCorrentes as $conta) {
    exibeMensagem(
        "Titular da conta: {$conta['nome']} Saldo atual: {$conta['saldo']}"
    );
}
  
$contasCorrentes[0] = sacar($contasCorrentes[0], 500);
$contasCorrentes[2] = depositar($contasCorrentes[2], 2100);
capitalTitular($contasCorrentes[0]);

foreach ($contasCorrentes as $conta) {
    // exibeMensagem($conta['nome']);
    // exibeMensagem($conta['saldo']);
    exibeMensagem(
        "Titular da conta: {$conta['nome']} Saldo atual: {$conta['saldo']}"
    );
}

?>