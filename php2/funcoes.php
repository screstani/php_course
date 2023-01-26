<?php

function exibeMensagem(string $mensagem) : void 
{
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

function capitalTitular(array &$conta)
{
    $conta['nome'] = strtoupper($conta['nome']);
}

?>