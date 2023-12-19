<?php 

$risco = readline("Informe o nível de risco");

$resultado;
if(is_numeric($risco) && $risco <= 10){

    if($risco < 4){
        $resultado = "Risco baixo";
    } else if($risco >= 4 && $risco < 7){
        $resultado = "Risco moderado";
    } else if($risco >= 7 && $risco < 10){
        $resultado = "Risco médio";
    }else{
        $resultado = "Risco grave";
    }

    echo $resultado;

}else{
    echo "Intervalo inválido";
}

?>