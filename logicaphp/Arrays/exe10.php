<!-- 10. Faça um programa que receba do usuario dois vetores, A e B, com 10 numeros inteiros cada. 
Crie um novo vetor denominado C calculando C = A - B. 
Mostre na tela os dados do vetor C. -->
<?php
$vetorA = [];
$vetorB = [];
$vetorC = [];

    echo "Insira 10 valores para o vetor A: \n";
    for ($i=0; $i < 10; $i++) { 
        $vetorA[$i] = readline("");
    }

    echo "Insira 10 valores para o vetor B: \n";
    for ($i=0; $i < 10; $i++) { 
        $vetorB[$i] = readline("");
    }
    echo "\nValores do vetor C: ";
    for ($i=0; $i < 10; $i++) { 
        $vetorC[$i] = $vetorA[$i] - $vetorB[$i];
        echo "\n".$vetorC[$i];
    }

?>