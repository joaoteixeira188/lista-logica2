<?php

$num = 0;

$parar = false;

while($parar == false){

    $num ++;

    if (($num % 2) == 0){

        echo "<br>$num</br>";

    }
    if ($num == 30){

        $parar = true;

    }

}

?>
