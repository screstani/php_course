<?php
$json = file_get_contents('countries.json');
$dadosEmJson = json_decode($json, true);
var_dump($dadosEmJson);

$numeroDePaises = count($dadosEmJson);
echo "Números de países participantes: $numeroDePaises";


$dadosEmJson = array_map(function ($item) {
    $item['pais'] = mb_convert_case($item['pais'], MB_CASE_UPPER);
    return $item;
}, $dadosEmJson);

var_dump($dadosEmJson);

usort($dadosEmJson, function ($item1, $item2) {
    $medalhas1 = $item1['medalhas'];
    $medalhas2 = $item2['medalhas'];

    return $medalhas2['ouro'] - $medalhas1['ouro'] !== 0
        ? $medalhas2['ouro'] - $medalhas1['ouro']
        : ($medalhas2['prata'] - $medalhas1['prata'] !== 0
            ? $medalhas2['prata'] - $medalhas1['prata'] 
            : $medalhas2['bronze'] - $medalhas1['bronze']);
});

$numeroDeMedalhas = array_reduce($dadosEmJson, function ($medalhasAcumuladas, $itemAtual) {
    $medalhasDoPais = array_reduce($itemAtual['medalhas'], function ($medalhasAcumuladasDoPaisAtual, $medalhasDoPaisAtual) {
        return $medalhasAcumuladasDoPaisAtual + $medalhasDoPaisAtual;
    }, 0);

    return $medalhasAcumuladas + $medalhasDoPais;
}, 0);

echo "Total de medalhas entregues: $numeroDeMedalhas";

$paisesComNomeSemEspaco = array_filter($dadosEmJson, function ($item) {
    return strpos($item['pais'], ' ') === false;
});

var_dump($paisesComNomeSemEspaco);
?>