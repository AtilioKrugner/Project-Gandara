<?php
require_once '../Model/Cart.php';
require_once '../View/CartView.php';

class CartController {
    public function showCart() {
        // Lógica para recuperar o carrinho de compras
        $cart = new Cart();
        $cart->addItem('Item 1', 10.00);
        $cart->addItem('Item 2', 20.00);

        // Exibe a visão do carrinho
        $view = new CartView();
        $view->render($cart);
    }
}
?>