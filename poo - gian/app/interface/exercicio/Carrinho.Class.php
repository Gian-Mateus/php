<?php
namespace app\interface\exercicio;

interface Carrinho{
    public function adicionar($item, $qntd);
    public function remover($item);
    public function editar($item, $qntd);
}
?>