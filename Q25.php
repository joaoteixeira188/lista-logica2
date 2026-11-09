<?php

$temp = 0;
$soma = 0;
$maior =0;
for($i = 0 ; $i <= 6; $i ++){
    $solicitacao = readline("Digite a temperatura de hoje: ");
    $temp = $solicitacao;
    $soma += $temp;
    if($temp > $maior){

        $maior = $temp;

    }
    if($i == 6){

        $media = $soma/7;
        echo "A temperatura media é: $media e a maior temperatura é: $maior";

    }
}

?>