<!-- 9. Escreva um programa que leia numeros inteiros no intervalo [0,50] e os armazene em um vetor com 10 posições. 
Preencha um segundo vetor apenas com os números impares do primeiro vetor. 
imprima o primeiro vetor 
imprima o segundo vetor -->
<?php
$vetor = [];
    for ($i=0; $i < 10; $i++) { 
        $vetor[$i] = rand(0,50);
    }
    $impar = [];
   
    for ($j=0; $j < 10; $j++) { 
       if($vetor[$j] % 2 != 0){
          $impar[] = $vetor[$j];  
       }  
    }
    echo "Primeiro Vetor";
    for ($k=0; $k < count($vetor); $k++) { 
        echo "\n".$vetor[$k];
    }
    echo "\nSegundo Vetor";
    for ($l=0; $l < count($impar); $l++) { 
        echo "\n".$impar[$l];
    }

?>