<?php
class CartView {
    public function render($cart) {
        echo "<h1>Carrinho de Compras</h1>";
        echo "<ul>";
        foreach ($cart->getItems() as $item) {
            echo "<li>" . $item['name'] . " - R$ " . number_format($item['price'], 2, ',', '.') . "</li>";
        }
        echo "</ul>";
    }
}
?>