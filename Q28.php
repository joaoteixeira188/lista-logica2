<?php


$lista = [0,0,0,0,0,0,0,0,0,0];

for($i = 1 ; $i <= 10 ; $i++){

    $registro = readline("Digite as gramas do ($i)° lote: ");

    $lista[$i - 1] += $registro;

}
for($p = 1; $p <= 10 ; $p ++){

    if($lista[$p-1] > 100){

        echo "O lote ($p)° tem peso medio! \n";

    }elseif($lista[$p-1] <= 100){

        echo "O lote ($p)° tem peso pequeno! \n";

    }elseif($lista[$p-1] > 200){

        echo "O lote ($p)° tem peso grande! \n";

    }

}

?>