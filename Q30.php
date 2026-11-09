<?php

$valorSaque = 36; 

echo "Valor solicitado: R$ " . number_format($valorSaque, 2, ',', '.') . "\n";

if ($valorSaque < 2 || $valorSaque % 2 != 0) {
    echo "O saque não pode ser realizado com o valor exato.\n";
    exit;
}

$sucesso = false;
$maxNotas10 = floor($valorSaque / 10);

for ($notas10 = $maxNotas10; $notas10 >= 0; $notas10--) {
    $resto = $valorSaque - ($notas10 * 10);
    
   
    if ($resto % 2 == 0) {
        $notas2 = $resto / 2;
        $sucesso = true;
        break; 
    }
}

if ($sucesso) {
    echo "Saque realizado com sucesso:\n";
    echo "- Notas de R$ 10,00: " . $notas10 . "\n";
    echo "- Notas de R$ 2,00: " . $notas2 . "\n";
} else {
    echo "O saque não pode ser realizado com o valor exato.\n";
}
?>