<?php

$senha = 1234;

do{

    $tentativa = readline("Digite: ");
    if ($tentativa == $senha){

        echo"<br>Acesso Permitido!</br>";

    }else{

        echo("<br>Acesso Negado!</br>");

    }
}while($tentativa != $senha);

    


?>
