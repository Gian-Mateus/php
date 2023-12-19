<?php 
$diasSemana = [
    "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado"
];

$frutas = [];
$i = 0;
while(count($frutas) < 10){
    $fruta = readline("Cadatre sua fruta favorita: ");
    array_push($frutas, $fruta);
    echo $frutas[$i];
    $i++;

}
?>