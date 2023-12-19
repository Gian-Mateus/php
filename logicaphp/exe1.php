<?php
$risco = readline("Informe o nível de risco");
$resultado;
if($risco <= 10){

    if($risco < 4){
        $resultado = "Risco Baixo";
    } else if($risco >= 4 && $risco < 7 ){
        $resultado = "Risco Moderado";
    } else if($risco >= 7 && $risco < 10){
        $resultado = "Risco Médio";
    } else {
        $resultado = "Risco Grave";
    }

    echo $resultado;

} else {
    echo "Intervalo Inválido";
}

?>