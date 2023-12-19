<?php
$carros = [
    [ //veiculo 0
        "modelo" => "Gol",
        "cor" => "Preto",
        "registro" => [
            "placa" => "ABC-123",
            "renavam" => "12345678901",
            "proprietario" => [
                [
                    "nome" => "José das Coves",
                    "CPF" => "123.456.987-00"
                ],
                [
                    "nome" => "Daniel Manenti",
                    "CPF" => "654.454.987-00"
                ],
            ]
        ]
    ],
    [ //veiculo 1
        "modelo" => "Fiesta",
        "cor" => "Verde",
        "registro" => [
            "placa" => "BCA-321",
            "renavam" => "987654312",
            "proprietario" => [
                [
                    "nome" => "Maria das Coves",
                    "CPF" => "321.654.987-12"
                ],
                [
                    "nome" => "Juliana Blablabla",
                    "CPF" => "321.654.987-12"
                ],

            ]
        ]
    ],
    [ //veiculo 2
        "modelo" => "Megane",
        "cor" => "Beje",
        "registro" => [
            "placa" => "BGF-587",
            "renavam" => "98763218541",
            "proprietario" => [
                [
                    "nome" => "Diego Bracellos",
                    "CPF" => "987.123.654-12"
                ]
            ]
        ]
    ]
];

//while

$primeiroContador = 0;
$QuantPrimeiroArray = count($carros);

while($primeiroContador < $QuantPrimeiroArray){

    echo "Modelo: {$carros[$primeiroContador]["modelo"]} | ";
    echo "Cor: {$carros[$primeiroContador]["cor"]} | ";
    echo "Placa: {$carros[$primeiroContador]["registro"]["placa"]} | ";
    echo "renavam: {$carros[$primeiroContador]["registro"]["renavam"]} | ";
    //inicio laço de repetição de proprietarios
    $segundoContador = 0;
    $quantSegundoArray = count($carros[$primeiroContador]["registro"]["proprietario"]);
    while($segundoContador < $quantSegundoArray){
        echo "Proprietario: {$carros[$primeiroContador]["registro"]["proprietario"][$segundoContador]["nome"]} | ";

        $segundoContador++;
    }
    //fum laço de proprietarios
    echo "\n";
    $primeiroContador++;
}

?>