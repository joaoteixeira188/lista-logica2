<?php

$soma = 0;
$repetir = 0;

while($repetir < 5){

    $nota = readline("Digite: ");
    $soma += $nota;
    $repetir += 1;
    if ($repetir == 5){

        echo"$soma";

    }
}


?>
