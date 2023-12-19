<?php
$estados = [
    ["estado" =>"Acre", "capital" => "Rio Branco"],
    ["estado" =>"Alagoas", "capital" => "Maceió"],
    ["estado" =>"Amapá", "capital" => "Macapá"],
    ["estado" =>"Amazonas", "capital" => "Manaus"],
    ["estado" =>"Bahia", "capital" => "Salvador"],
    ["estado" =>"Ceará", "capital" => "Fortaleza"],
    ["estado" =>"Distrito Federal", "capital" => "Brasilia"],
    ["estado" =>"Espirito Santo", "capital" => "Vitória"],
    ["estado" =>"Goiás", "capital" => "Goiania"],
    ["estado" =>"Maranhão", "capital" => "São Luiz"],
    ["estado" =>"Mato Grosso do Sul", "capital" => "Campo Grande"],
    ["estado" =>"Mato Grosso", "capital" => "Cuiabá"],
    ["estado" =>"Minas Gerais", "capital" => "Belo Horizonte"],
    ["estado" =>"Pará", "capital" => "Belém"],
    ["estado" =>"Paraíba", "capital" => "João Pessoa"],
    ["estado" =>"Paraná", "capital" => "Curitiba"],
    ["estado" =>"Pernambuco", "capital" => "Paraíba"],
    ["estado" =>"Piauí", "capital" => "Terezina"],
    ["estado" =>"Rio de Janeiro", "capital" => "Rio de Janeiro"],
    ["estado" =>"Rio Grande do Norte", "capital" => "Natal"],
    ["estado" =>"Rio Grande do Sul", "capital" => "Porto Alegre"],
    ["estado" =>"Rondônia", "capital" => "Porto Velho"],
    ["estado" =>"Roraima", "capital" => "Boa Vista"],
    ["estado" =>"Santa Catarina", "capital" => "Florianópolis"],
    ["estado" =>"São Paulo", "capital" => "São Paulo"],
    ["estado" =>"Sergipe", "capital" => "Aracajú"],
    ["estado" =>"Tocantins", "capital" => "Palmas"]
];

foreach($estados as $estado){
    echo "Estado: {$estado["estado"]}";
    echo " | Capital {$estado["capital"]} \n";
}
?>