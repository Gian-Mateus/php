<?php
//exercício 1
/* $inicial = 0;

do{
    $soma = readline("Digite um valor: ");
    $inicial = $soma + $inicial;
    echo $inicial."\n";
}while($inicial < 1000); */

//exercicio 2

$v1 = 0;
$v2 = 0;
$acao = 'S';

do{
    $v1 = readline("Digite o primeiro numero: ");
    $v2 = readline("Digite o segundo numero: ");
    echo "Resultado: " . ($v1 + $v2);
    $acao = readline("Deseja realizar uma nova operação? S = sim | N = não");
}while($acao == 'S');
?>