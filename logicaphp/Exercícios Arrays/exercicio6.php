<?php
/* Desenvolva um vetor que armazene os valores de referencia para as medidas polegadas, km, jardas e milha.
solicite um valor de medidas em centimetros para o usuário epercorra o array fazendo a conversão destas medidas. */

$medidas = [
    "pol" => 0.39,
    "km" => 0.00001,
    "jardas" => 0.0109361,
    "milha" => 0.0000062137
]; 

$valor = readline("Digite um numero em centimetros: ");

foreach($medidas as $unid => $conversao){
    echo "{$valor} cm em {$unid} = ".($valor * $conversao)."\n";
}

?>