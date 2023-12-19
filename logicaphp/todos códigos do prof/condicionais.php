<?php 

//if ternário
// ? representa if
// : representa o else
//echo (condicao) ? true : false;
/* $idade = 17;
$situacao = ($idade >= 18) ? 'maior' : 'menor';
echo "Eu sou Diego e sou {$situacao} de idade" */

// if short form
$nome = "Diego";

echo ($nome) ?: 'Sem nome';
//par ou impar

// echo (4 % 2 == 0) ? 'par' : 'impar';


//switch case
$dia = date('w');
switch($dia){
    case 0: //domingo
    case 6: //sabado
        echo "final de semana";
    break;
    case 1:
    case 2:
    case 3:
    case 4:
        echo "Dia útil";
    break;
    case 5: 
        echo "Sextou";
    break;
    default:
        echo "dia invalido";
    break;
}
?>