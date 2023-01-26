<?php
$age = 15;
$numberOfPeople = 2;

echo "If you are over 18, you can enter. If you're over 16 and acompanied, you can also enter" . PHP_EOL;
    if ($age >= 18) {
        echo "You are $age years old. ". PHP_EOL;
        echo "You can enter.";
    } else if ($age >= 16 && $numberOfPeople >= 2) {
        echo "You are $age years old, but is acompanied". PHP_EOL;
        echo "You can enter.";
    }
    else {
        echo "You are only $age years old. " . PHP_EOL;
        echo "Goodbye!";
    }

// operator ternário
$idade = 20;
$mensagem = $idade < 18 ? "Você é menor de idade" : "Você é maior de idade";
echo $mensagem;

?>
