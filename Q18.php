<?php
$aluno = [0,0,0,0,0];
$nota = [0,0,0,0,0];

for($i = 1 ; $i <= 5; $i ++){

    $aluno[$i] = readline("Digite o numero do aluno: \n");
    $nota[$i] = readline("Digite a nota desse aluno: \n");

    if ($i == 5){

        for ($p = 1 ; $p <= 5; $p ++){

            echo "Aluno numero $aluno[$p] tem a nota: $nota[$p] \n";

        }


    }



}


?>