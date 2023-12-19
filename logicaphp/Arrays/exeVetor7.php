<?php
// Leia um vetor com 20 numeros inteiros. Escreva os elementos do vetor eliminando elementos repetidos.
$vetorAle = [];
for ($i=0; $i < 20; $i++) { 
    $vetorAle[$i] = rand(0, 100);
}

$novoVetor = array_unique($vetorAle);
print_r($novoVetor);
?>