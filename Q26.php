<?php
$par = 0;
$impar = 0;

for($p = 0; $p <= 50 ; $p += 2){

    $par += $p;

}
for($i = 1; $i <= 50 ; $i += 2){

    $impar += $i;

}
if(($i && $p) == 50){

    echo "soma dos pares: $par ; soma dos impares: $impar";

}

?>