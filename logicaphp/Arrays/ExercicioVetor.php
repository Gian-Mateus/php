<?php

$vetor = [1, 0, 5, 2, 5, 7];
$soma = $vetor[0] + $vetor[1] + $vetor[5];

echo "Valor da soma das posições 0, 1 e 5 do vetor: {$soma}\n";

$vetor[4] = 100;

echo "Valores de cada posição do vetor: \n";
for ($i = 0; $i < count($vetor); $i ++) { 
    echo "{$vetor[$i]}\n";
}

?>