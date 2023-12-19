<?php
$numero = readline("Escreva um numero: ");

/* for($i = 0; $i < $numero; $i++){
    echo $i.($i %2 == 0 ? ' par' : ' impar')."\n";
} */

for($i = 1; $i <= 10; $i++){
    echo "{$numero} X {$i} = ".($numero * $i)."\n";
}
?>