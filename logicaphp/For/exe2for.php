<?php

$tabuada = readline("Digite um número para fazer a tabuada (de 1 a 10): \n");

    for($i = 1; $i <= 10; $i++){
        echo "{$tabuada} x {$i} = ".($tabuada * $i).".\n";
    }

?>
