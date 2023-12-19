<?php
$valor = readline("Digite um valor (alto): \n");

for ($i = 0; $i <= $valor; $i++){
    if ($i % 2 == 0) {
        echo "$i é par\n";
    } else {
        echo "$i é ímpar\n";
    }
}
?>