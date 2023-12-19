<?php
/* uma lanchonete está precisando agilizar o atendimento, faça um algoritimo que receba o cadastro de 10 produtos com a quantidade e o valor unitário de cada um.
retorne a lista dos produtos cadastrados com o valor unitário e o valor total de cada produto calculado e no final da lista o total da compra */

$produtos = [];
$produto;
$valorUnitario;
$quantidade = 0;
$valorTotal = 0;


for($i = 0; $i < 3; $i++){

    $produto = readline("Nome do produto: ");
    $valorUnitario = readline("Valor: ");
    $quantidade = readline("Quantidade: ");

    array_push($produtos, [
        "produto" => $produto,
        "quantidade" => $quantidade,
        "valor" => $valorUnitario
    ]);
}

//listar produtos do vetor

foreach($produtos as $carrinho){

    echo "PRODUTO: {$carrinho["produto"]} ";
    echo "VALOR UNIT. {$carrinho["valor"]} ";
    echo "QUANT. {$carrinho["quantidade"]} ";
    echo "TOTAL R$ ".($carrinho["valor"] * $carrinho["quantidade"])." \n";
}
?>