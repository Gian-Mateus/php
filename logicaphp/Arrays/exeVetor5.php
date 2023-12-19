<?php
    $alunos = [];
    echo "Digite o nome de 5 alunos e suas notas para obter a média e situação de aprovação ou desaprovação.\n";
    // laço para iterar os nomes dos alunos e suas respectivas notas, ele também pega a quantidade de notas por aluno
    for ($i = 0 ; $i < 5 ; $i++) { 

        $alunos[$i]["nome"] = readline("Digite o nome do aluno: ");

        $numeroNotas = readline("Digite quantas notas para media: ");
        //aqui ele itera as notas de cada aluno, (um por vez)
        for ($j = 0 ; $j < $numeroNotas ; $j++) { 

         $alunos[$i]["notas"][$j] = readline("Digite a nota: "); 

        }
    }

    echo "Relatório de aprovados e reprovados: \n";
    for ($i = 0; $i < count($alunos); $i++) { 

        echo "\nNome: ".$alunos[$i]["nome"]." | ";

        $notaAluno = [];
        for ($j=0; $j < count($alunos[$i]["notas"]); $j++) { 
           
            $notaAluno[$j] = $alunos[$i]["notas"][$j];
           
        }
        $media = array_sum($notaAluno) / count($notaAluno);

        echo "Notas: ".implode(', ', $notaAluno)." | Média: ".round($media, 2)." | Situação: ".($media < 7 ? "Reprovado" : "Aprovado");

    }
?>