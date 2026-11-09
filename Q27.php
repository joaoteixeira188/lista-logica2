<?php

$lista = [0,0,0,0,0,0,0,0,0,0,0,0];

for($i = 1 ; $i <= 12 ; $i++){

    $registro = readline("Digite as faltas do ($i)° aluno: ");

    $lista[$i - 1] += $registro;

}
for($p = 1; $p <= 12 ; $p ++){

    if($lista[$p-1] > 15){

        echo "o aluno ($p)° passou o limite de 15 faltas! \n";

    }elseif($lista[$p-1] <= 15){

        echo "o aluno ($p)° esta dentro do limite de 15 faltas! \n";

    }

}
?>