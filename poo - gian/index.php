<?php
use app\App;
use app\hello\BemVindo;
use app\hello\Hello;
use app\interface\exercicio\Hortifruti;
use app\interface\Mundial;
use app\pdo\Mysql;
use app\polimorfismo\aves\Ave;
use app\polimorfismo\mamiferos\Mamifero;
use app\polimorfismo\payments\mp\CheckoutPro;
use app\polimorfismo\payments\pagseguro\Gateway;
require "Autoload.php";
$load = new Autoload();

/* $meuCarro = new Carro();
$meuCarro->modelo = "Megane Grand Tour";
$meuCarro->cor = "Bege";
$meuCarro->getVeiculo();

$outroCarro = new Carro();
$outroCarro->modelo = "Ferrari";
$outroCarro->cor = "Vermelho";
$outroCarro->getVeiculo();

$meuCarro->getVeiculo();

//classe pessoa
$p1 = new Pessoa    ("Diego", 38);
$p1->getPessoa();

$app = new App();
echo "<br>";
$ola = new Hello();
echo "<br>";
$bv = new BemVindo();
echo "<br>";

//polimorfismo
$mamiferos = new Mamifero();
echo $mamiferos->locomover();
echo "<br>";

$ave = new Ave();
echo $ave->locomover();
echo "<br>";


$pagSeguro = new Gateway();
echo $pagSeguro->payment;
echo "<br>";

$mp = new CheckoutPro();
echo "<br>";

$qualquerCampeao = new Mundial();
$qualquerCampeao->tempo(7);
$qualquerCampeao->apita();
$qualquerCampeao->mostraCartao("Amarelo", "Roberto Carlos"); */

/* $mercado = new Hortifruti();
$mercado->adicionar("Maça", 32);
$mercado->adicionar("Laranja", 4);
$mercado->adicionar("Banana", 8);
$mercado->mostrarCarinho();

echo "<br>";

$mercado->editar("Maça", 1);
$mercado->mostrarCarinho();

echo "<br>";

$mercado->remover("Maça");
$mercado->mostrarCarinho(); */

echo "<p>PDO</P>";

$g = new Mysql();
$g->select("SELECT * FROM pdv_produtos");

foreach($g->qrs as $dados){
    echo $dados['nome']."<br>";
}

echo "inserir dados";

$g->insert("INSERT INTO pdv_produtos (nome, descricao, valor_venda, valor_compra, unidade, cod_ean, ativo, from_categoria) VALUES ('Cachaça', 'Queima a guela', 4.5, 3.20, 'ML', '12321312312', 1, 5)");