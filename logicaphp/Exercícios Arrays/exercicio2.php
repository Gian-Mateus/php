<?php
/* Faça um programa que leia 10 valores e os escreva na ordem 
contrária à que foram digitados.
Utilize as funções de array mostradas anteriormente (consulte a documentação do php) */

$numero; //numero digitado

$numeros = []; //vetor de numeros

for($i = 0; $i < 10; $i++){
    //pedir numero para usuário
    $numero = readline("Informe um numero: ");

    //lançar numero no vetor
    array_push($numeros, $numero);

}

print_r($numeros);

$novoArray = array_reverse($numeros,true);

print_r($novoArray);
?>