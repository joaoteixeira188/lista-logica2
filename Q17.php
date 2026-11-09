<?php
$num = readline("Digite um numero composto: ");

for ($i = 1 ; $i <= $num ; $i ++){

    $fatoracao = $num % $i;
    
    if($fatoracao == 0){

        echo $i . "\n";

    }

}


?>