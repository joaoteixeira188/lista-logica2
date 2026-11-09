<?php

$total = 0;

for($dia = 1 ; $dia <= 5; $dia ++){
    $qvendida = readline("Digite as vendas do dia: ");
    $total += $qvendida;

    if($dia == 5){

        echo "O total de produtos vendidos durante os 5 dias foi: $total";

    }

}

?>