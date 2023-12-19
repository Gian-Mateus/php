<?php

class Entrega{
    private $origem;
    private $destino;
    private $peso;
    private $altura;
    private $largura;
    private $comprimento;
    private $valorCarga;
    private $tipoServico;

    private function calculoPrazo($origem, $destino){
        $this->origem = $origem;
        $this->destino = $destino;

        //lógica para acessar alguma api e retornar a distância da origem até o destino
    }

    private function calculoPesoCubico($altura, $largura, $comprimento, $peso){
        $this->altura = $altura;
        $this->largura = $largura;
        $this->comprimento = $comprimento;
        $this->peso = ($peso >= 6) ? $peso : 6;
        return ($altura * $largura * $comprimento) / $peso;
    }
    
    private function calculoFrete($tipoServico, $origem = '', $destino =''){
        if($this->tipoServico === 'PAC'){
            $prazo = "De cinco à sete dias úteis";
        } elseif($this->tipoServico === 'SEDEX'){
            $prazo = "De três à cinco dias";
        } elseif($this->tipoServico === 'TRANSPORTADORA' || $this->tipoServico === ''){
            $this->calculoFrete($origem, $destino);
        };
    }
}

?>