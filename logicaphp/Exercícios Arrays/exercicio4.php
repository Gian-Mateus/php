<?php
/* Crie dois vetores, cada um com capacidade para armazenar 10 
números.
Solicite ao usuário que entre com os valores nestes dois vetores.
O programa deverá mostrar a multiplicação dos dados dos vetores, 
em cada um de suas
respectivas posições.
Ex. vetor_a[0] * vetor_b[0] e assim por diante. */

$vetorA = [];
$vetorB = [];
$numero;

for($i = 0; $i < 10; $i++){

    //solitiar numero do usuario
    $numero = readline("Informe um numero para o primeiro vetor: ");

    //cadastrar numero no primeiro vetor
    array_push($vetorA, $numero);
    
    //solitiar numero do usuario
    $numero = readline("Informe um numero para o segundo vetor: ");
    
    //cadastrar numero no primeiro vetor
    array_push($vetorB, $numero);

}

//listar os dados multiplicados

//index => valor

foreach($vetorA as $index => $multiplica){

    echo "{$multiplica} X {$vetorB[$index]} = ".($multiplica * $vetorB[$index])."\n";
}
?>