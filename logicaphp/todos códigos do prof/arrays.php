<?php
//array(chave => valor)
// $meuArray = array(1, 2, 3);
$meuArray = array(1 => 1, 2, 3);
/**
 * 0 => 1
 * 1 => 2
 * 2 => 3
 */
//modo curto
$arrayShort = [1,2];

$diasSemana = [
    "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado"
];

$diego = [
    "altura" => 1.75,
    "Peso" => 79,
    "corPreferida" => 'Azul',
    "programador" => true,
    "salarioSonho" => 10.000
];

//arrays bi dimensionais (matrizes)

$arrayBiDimensional = [
    ['nome' => 'Diego', 'profissao' => 'Programador'], //0
    ['nome' => 'José', 'profissao' => 'Designer'] //1
];

$carros = [
    [
        "modelo" => "Gol",
        "marca" => "VW",
        "ano" => 2020,
        "informacoes" => [
            "placa" => "BCB-7255",
            "renavam" => "12345678901",
            "valor" => 50.500
        ],
        "opcionais" => [
            "motorizacao" => [
                "combustivel" => "flex",
                "potencia" => [
                    "gasolina" => "75hp",
                    "alcool" => "78hp"
                ]
            ],
            "seguranca" => [
                "airbag" => true,
                "abs" => true,
                "blindado" => false,
                "cinto" => "5 pontas"
            ],
            "transmissao" => "Manual",
            "conforto" => [
                "Som ambiente" => true,
                "arCondicionado" => false,
                "couro" => true,
                "piloto" => true
            ] 
        ]
    ]
];

// print_r($carros[0]["opcionais"]["motorizacao"]["potencia"]["gasolina"]);

/* $frutas = [];
$i = 0;
while(count($frutas) < 10){
    $fruta = readline("Cadatre sua fruta favorita: ");
    array_push($frutas, $fruta);
    echo $frutas[$i];
    $i++; // $i = $i + 1

} */

// array_shift($diasSemana);
asort($diasSemana);
print_r( $diasSemana );

$tem = in_array("Domingos", $diasSemana);

var_dump($tem);





// print_r($frutas);
?>