<?php 
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

print_r($carros[0]);
?>