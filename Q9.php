<?php

$soma = 0;
$nota = 0;
$parar = 1;

while($parar != 0){

    $nota = readline("Digite: ");

    $soma += $nota;

    if ($nota == 0){
        $parar = 0;

        echo"$soma";

    }
}

?>
