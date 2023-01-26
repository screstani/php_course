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



foreach ($contasCorrentes as $conta) {
    exibeMensagem(
        "Titular da conta: {$conta['nome']} Saldo atual: {$conta['saldo']}"
    );
}

function exibeMensagem(string $mensagem) : void {
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar) : array 
{
    if($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar; 
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar) : array
{
    if($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar; 
    } else {
        exibeMensagem("Valores de depósito precisam ser positivos");
    }
    return $conta;
}
  
$contasCorrentes[0] = sacar($contasCorrentes[0], 500);
$contasCorrentes[2] = depositar($contasCorrentes[2], 2100);


foreach ($contasCorrentes as $conta) {
    // exibeMensagem($conta['nome']);
    // exibeMensagem($conta['saldo']);
    exibeMensagem(
        "Titular da conta: {$conta['nome']} Saldo atual: {$conta['saldo']}"
    );
}

?>