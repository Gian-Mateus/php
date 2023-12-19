<?php
$valor1 = readline("Insira o primeiro valor: \n");
$valor2 = readline("Insira o segundo valor: \n");

    echo "Escolha uma operação a ser utilizada: \n
    1 - Subtração \n
    2 - Soma \n
    3 - Multiplicação \n
    4 - Divisão \n
    ";

    $operacao = readline("");

    switch($operacao){
        case 1: $resultado =  $valor1 - $valor2;
        echo "O resultado da subtração é: {$resultado}";
        break;
        case 2: $resultado =  $valor1 + $valor2;
        echo "O resultado da subtração é: {$resultado}";
        break;
        case 3: $resultado =  $valor1 * $valor2;
        echo "O resultado da subtração é: {$resultado}";
        break;
        case 4: $resultado =  $valor1 / $valor2;
        echo "O resultado da subtração é: {$resultado}";
        break;
        default: echo "Opção inválida";

    }



?>