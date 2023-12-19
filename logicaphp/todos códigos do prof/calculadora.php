<?php
echo "
ESCOLHA UMA OPÇÃO
+ ADIÇÃO
- SUBTRAÇÃO
/ DIVISÃO
* MULTIPLICAÇÃO
";

$n1 = readline("digite um numero: ");
$operador = readline("Esolha uma operação");
$n2 = readline("digite um numero: ");

switch($operador){
    case "+":
        echo $n1." ".$operador." ".$n2." = ". ($n1 + $n2);
    break;
    case "-":
        echo "Resultado {$n1} {$operador} {$n2} = ".($n1 - $n2);
    break;
    case "/":
        echo $n1 / $n2;
    break;
    case "*":
        echo $n1 * $n2;
    break;
    default:
        echo "Operador inválido";
        break;
}




?>