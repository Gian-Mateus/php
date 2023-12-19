<?php

$alunos = [
    [ //laço 1  - posição 0
        "nome" => "Diego Bracellos",
        "turma" => "PHP 1",
        "periodo" => "Noturno",
        "modo" => "Online",
        "notas" => [ //laço 2
            10, //posição 0
            7.5, //posição 1
            8 //posição 2
        ] 
    ],
    [ //laço 1  - posição 1
        "nome" => "Sergio Arrazão",
        "turma" => "PHP 2",
        "periodo" => "Vespertino",
        "modo" => "Online",
        "notas" => [10, 9, 7.8]
    ],
    [ //laço 1 - posição 2
        "nome" => "Bruno Lopes",
        "turma" => "PHP 3",
        "periodo" => "Matutino",
        "modo" => "Online",
        "notas" => [9, 10, 8.5]
    ]
    
];
//$i é o incrementador
// count() conta a quantidade de registros no array
for($i = 0; $i < count($alunos); $i++){
    //bloco do for
    $totalNotas = count($alunos[$i]["notas"]);
   $media = 0;
   $somaNotas = 0;
    for($a = 0; $a < $totalNotas; $a++){
        $somaNotas = $somaNotas + $alunos[$i]["notas"][$a]; 
    }
    $media = $somaNotas / $totalNotas;
    echo "Aluno: {$alunos[$i]['nome']} | Turma: {$alunos[$i]['turma']} | Período: {$alunos[$i]['periodo']} | Modo: {$alunos[$i]['modo']} Média: {$media} \n";
}



/// EXEMPLO
/* arrayAlunos = [
    0 => [
        DadosAluno 0,
        notas 0 => [
            notas
        ]
    ],
    1 => [
        DadosAluno 1,
        notas 1 => [
            notas
        ]
    ],
    2 => [
        DadosAluno 2,
        notas 2 => [
            notas
        ]
    ]
] */
// primeiro for
/* for(inicioAluno; PercorreArrayAluno; incrementoAluno){

    segundo for
    for(inicoNotas; PercorreArrayNotas; IncrementaNota){
        calcuarMedia
    }

    listagem dos dados do aluno
} */


?>