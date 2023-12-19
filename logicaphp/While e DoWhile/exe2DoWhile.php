<?php 
do {
  
    $num1 = readline("Digite o primeiro número: ");
    $num2 = readline("Digite o segundo número: ");

   
    $resultado = $num1 + $num2;
    echo "Resultado: $resultado\n";

  
    $continuar = readline("Deseja fazer outra conta de adição? (s/n): ");
} while ($continuar == 's');

?>