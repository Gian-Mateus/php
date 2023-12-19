<?php
/**
 * 
 * FOR
 * for($inico; condicao; $incremento){
 * //bloco de execução
 * }
 * WHILE
 * while(condicao){
 *  bloco de execução
 * }
 * DO WHILE
 */

/* for($i = 0; $i < 10; $i++){
    // echo $i.($i %2 == 0 ? ' par' : ' impar')."\n";
    echo ($i + $i)."\n";
    $i = 5;
} */

//while
/* $i = 0;
while($i < 100){
    echo $i."\n";
    $i+= 5;
} */
$i = 100;
do{
    $valor = readline("digite um numero: ");
    $i = ($valor == 100) ? 100 : 50;
}while($i != 100);

?>