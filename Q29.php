

<?php
$pedidos = [120.00, 350.50, 150.00, 299.99, 45.00, 600.00, 200.00, 149.90];

for ($i = 0; $i < 8; $i++) {

    $valorCompra = $pedidos[$i]; 
    $numeroPedido = $i + 1;

    if ($valorCompra >= 300.00) {
        echo "Pedido #{$numeroPedido} (R$ " . number_format($valorCompra, 2, ',', '.') . "): Frete Grátis\n";
    } elseif ($valorCompra >= 150.00) {
        echo "Pedido #{$numeroPedido} (R$ " . number_format($valorCompra, 2, ',', '.') . "): Frete de R$ 15,00\n";
    } else {
        echo "Pedido #{$numeroPedido} (R$ " . number_format($valorCompra, 2, ',', '.') . "): Frete de R$ 25,00\n";
    }
}
?>


