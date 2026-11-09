<?php

$litros = 0;

for($dia = 1 ; $dia <= 7; $dia ++){
    $cons = readline("Digite o consumo do dia: ");
    $litros += $cons;

    if($dia == 7){

        echo "O consumo total durante os 7 dias foi: $litros";

    }

}

?>