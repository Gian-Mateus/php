<?php
    $nota1 = readline("Digite a primeira nota: ");
    $nota2 = readline("Digite a segunda nota: ");
    $nota3 = readline("Digite a terceira nota: ");
    $nota4 = readline("Digite a quarta nota: ");

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if($media >= 7 ){
        echo "Aprovado";
    } else {
        echo "Reprovado";
    }
?>