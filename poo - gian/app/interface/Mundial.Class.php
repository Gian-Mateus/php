<?php
namespace app\interface;

class Mundial implements Futebol{

    public function tempo($m){
        echo "Tempo: {$m}";
    }

    public function apita(){
        echo "Juiz apitando";
    }

    public function mostraCartao($tipo, $jogador)
    {
        echo "Cartão {$tipo} para {$jogador}.";
    }
}
?>