<?php
$numS = random_int(0,9);


do{
$tentativa = readline ("digite sua tentativa: ");

if ($tentativa > $numS){
echo "sua tentativa é maior que o numero secreto \n";
}
elseif ($tentativa < $numS){
    echo " sua tentativa é menor que o numero secreto \n";
}

}while($numS != $tentativa);

if($tentativa == $numS){
  echo "voce acertou"; 
}










?>