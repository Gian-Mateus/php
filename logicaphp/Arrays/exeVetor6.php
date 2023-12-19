<?php
echo "Digite 5 valores: \n";
$valores = [];
for ($i=0; $i < 5; $i++) { 
    $valores[$i] = readline("Digite o ".($i + 1)."ª valor: ");
}
    $medio = array_sum($valores) / count($valores);
    echo "Os valores informados são: ";
    for ($i=0; $i < count($valores); $i++) { 
        if($valores[$i] == min($valores)){
            echo "\n<".$valores[$i];
        } elseif($valores[$i] == max($valores)){
            echo "\n>".$valores[$i];
        } elseif ($valores[$i] == $medio) {
            echo "\n~".$valores[$i];
        } else echo "\n".$valores[$i];
    }
?>