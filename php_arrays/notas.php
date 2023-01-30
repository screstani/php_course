<?php

$notas = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => null,
    'Maria' => 9,
];

krsort($notas);
var_dump($notas);

var_dump(array_key_exists('Ana', $notas));
var_dump(isset($notas['Roberto']));
var_dump(in_array(10, $notas, true));

//array_key_exists
//in_array (o terceiro parametro setado como true, faz a verificacao estrita ===)
//isset