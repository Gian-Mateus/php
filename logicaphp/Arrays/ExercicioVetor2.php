<?php

$arrayAleatorio = [57,23,89,42,65,11,37,78,14,99];

for ($i=0; $i < count($arrayAleatorio); $i++) { 
    if($arrayAleatorio[$i] % 2 == 0){
        echo "Os valores pares são: ". $arrayAleatorio[$i]."\n";
    }
}

// echo "O vetor possui ". count(). " valores pares.\n";

?>