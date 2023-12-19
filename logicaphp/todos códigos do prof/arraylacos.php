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

/* for($i = 0; $i < count($diasSemana); $i++){
    echo "{$diasSemana[$i]} \n";
} */

/* $i = 0;
while($i < count($diasSemana)){
    echo "{$diasSemana[$i]} \n";
    $i++;
} */

//foreach
/* foreach($array as $linha){

} */

foreach($diasSemana as $chave => $dia){
    echo "{$chave} => {$dia} \n";
}

$estados = [
    'Acre',
    'Alagoas',
    'Amapá',
    'Amazonas',
    'Bahia',
    'Ceará',
    'Distrito Federal',
    'Espirito Santo',
    'Goiás',
    'Maranhão',
    'Mato Grosso do Sul',
    'Mato Grosso',
    'Minas Gerais',
    'Pará',
    'Paraíba',
    'Paraná',
    'Pernambuco',
    'Piauí',
    'Rio de Janeiro',
    'Rio Grande do Norte',
    'Rio Grande do Sul',
    'Rondônia',
    'Roraima',
    'Santa Catarina',
    'São Paulo',
    'Sergipe',
    'Tocantins'
];
?>