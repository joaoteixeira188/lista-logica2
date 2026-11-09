<?php
$nota = 0;


for($i = 1; $i <= 5; $i ++){
    
    $input = readline("Digite a nota desse aluno: \n");
    $nota += $input;

    if ($i == 5){

        $media = $nota/$i;
        echo "A media da turma é: $media";
    }

}


?>