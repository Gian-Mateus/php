<?php
/* Digite 10 valores númericos e armazene em um vetor. Em seguida,
solicite ao usuário um número para multiplicar todos os elementos 
do vetor.
O programa deverá exibir o resultado da multiplicação do número 
dado pelo usuário 
em todos os elementos armazenados. */

$numero;
$numeros = [];

for($i = 0; $i < 10; $i++){

    //solicitar um numero
    $numero = readline("Digite um numero: ");

    //armazenar numero no vetor
    array_push($numeros, $numero);
}

print_r($numeros);

// solicitar numero para calculo

$calculo = readline("Informe um numero para o calculo: ");


foreach($numeros as $calc){

    //executar o calculo ao percorrer o array
    echo "{$calc} X {$calculo} = ".($calc * $calculo)."\n";
}
?>