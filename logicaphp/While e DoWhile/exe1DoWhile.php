<?php 

$incremento = 0;

do{
    $valorDigitado = readline("Digite um valor: \n");
    $resultado = $incremento + $valorDigitado;
    echo "{$incremento} + {$valorDigitado} = {$resultado}\n" ;
    $incremento = $resultado;

}while($incremento < 1000);

?>