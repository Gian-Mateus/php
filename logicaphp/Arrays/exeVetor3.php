<?php
$inserirValor = [];

for ($i=0; $i < 10; $i++) { 

    $inserirValor[$i] = readline("Insira um valor: ");

}

echo "Menor valor inserido: ".min($inserirValor)."\n";
echo "Maior valor inserido: ".max($inserirValor);

?>