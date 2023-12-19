<?php

$n1 = readline("Digite a primeira nota: ");
$n2 = readline("Digite a segunda nota: ");
$n3 = readline("Digite a terceira nota: ");
$n4 = readline("Digite a quarta nota: ");

$media = ($n1 + $n2 + $n3 + $n4) / 4;

if($media >= 7){
    echo "parabéns, você foi aprovado. Nota: ".$media;
}else{
    echo "Bateu na trave, estude mais.  Nota".$media;
}

?>