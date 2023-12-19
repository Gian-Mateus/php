<?php
/* faça um programa que solicite um numero para o usuário e depois faça um array que percorra do 0 até o numero informado inserindo cada posição no array.

por fim liste o array criado. */

$limite = readline("Digite um numero: ");
$numeros = [];

for($i = 1; $i <= $limite; $i++){

    array_push($numeros, $i);
}

print_r($numeros);
?>