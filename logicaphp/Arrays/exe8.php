<!-- 8. Faça um vetor com 50 posições onde cada posição deverá ser preenchido com o seguinte valor: ($i + 5 ∗ $i), 
sendo $i a posição do elemento no vetor. 
Em seguida imprima o vetor na tela -->

<?php
$vetor = [];
for ($i=0; $i < 50; $i++) { 
    $vetor[$i] = ($i + 5 * $i);
}

print_r($vetor);
?>