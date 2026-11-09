<?php
echo "Quantidade de modelos de IA a avaliar: ";
$qtdModelos = (int) readline();

echo "Quantidade de testes realizados por cada modelo: ";
$qtdTestes = (int) readline();

$maiorMedia = -1;
$melhorModelo = 0;

for ($i = 1; $i <= $qtdModelos; $i++) {
    echo "\n--- Avaliando o Modelo $i ---\n";
    $somaNotas = 0;
   
    for ($j = 1; $j <= $qtdTestes; $j++) {
        echo "Digite a nota do Teste $j (0 a 100): ";
        $nota = (float) readline();

        
        if ($nota < 50) {
            $classificacao = "Baixo";
        } elseif ($nota >= 50 && $nota <= 79) {
            $classificacao = "Moderado";
        } else {
            $classificacao = "Alto";
        }

        echo "-> Classificação do Teste $j: $classificacao\n";
        $somaNotas += $nota;
    }

    $mediaAtual = $somaNotas / $qtdTestes;
    echo "Média do Modelo $i: " . number_format($mediaAtual, 2) . "\n";

    
    if ($mediaAtual > $maiorMedia) {
        $maiorMedia = $mediaAtual;
        $melhorModelo = $i;
    }
}
echo "RESULTADO FINAL:\n";
echo "O Modelo $melhorModelo obteve o melhor desempenho com média " . number_format($maiorMedia, 2) . ".\n";