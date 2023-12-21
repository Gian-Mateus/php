<?php
namespace app\interface\exercicio;

class Mercado implements Carrinho{
    public $itens = [];

    public function __construct($itens = []){
        $this->itens = $itens;
    }

    public function mostrarCarinho(){
        foreach($this->itens as $items){
        echo "Item: {$items['descricao']}, quantidade: {$items['qntd']} <br>";
        }
    }

    public function adicionar($item, $qntd = 1){
        array_push($this->itens, [
            "descricao" => $item,
            "qntd" => $qntd
        ]);

        return "Item adicionado com sucesso!";
    }

    public function remover($item){
        foreach ($this->itens as $chave => $itemAtual) {
            if ($itemAtual['descricao'] === $item) {
                array_splice($this->itens, $chave, 1);
                return "Item removido!";
            }
        }
        return "Item não encontrado!";
    }

    public function editar($item, $qntd){
        foreach ($this->itens as &$itemAtual) {
            if ($itemAtual['descricao'] === $item) {
                $itemAtual['qntd'] = $qntd;
                return "Item atualizado com sucesso!";
            }
        }
        return "Item não encontrado";
    }
}
?>