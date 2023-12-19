<?php
/**
 * Crie um vetor que armazene o nome de todos os meses do ano.
 * Peça ao usuário que digite um número e ele informe qual o nome do 
 * mês correspondente.
 */

$meses = [
    1 => "janeiro",
    2 => "fevereiro",
    3 => "março",
    4 => "abril",
    5 => "maio",
    6 => "junho",
    7 => "julho",
    8 => "agosto",
    9 => "setembro",
    10 => "outubro",
    11 => "novembro",
    12 => "dezembro"
];
$numero = readline("Digite um número entre 1 e 12: ");

if($numero > 0 && $numero < 13){
    echo $meses[$numero];
}else{
    echo "Intervalo inválido";
}
?>