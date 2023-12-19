<?php
$vetor = [];

for ($i = 1; $i <= 60; $i++) {
    $vetor[] = $i;
}

for ($i=0; $i < 6; $i++) { 
    $aux = rand(1, 60);
    if($vetor[$aux] < 10){
        echo "0" + $vetor[$aux]." ";
    } else echo $vetor[$aux]." ";

}

?>