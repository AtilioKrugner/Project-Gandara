<?php
class Cart {
    private $items = [];

    public function addItem($name, $price) {
        $this->items[] = ['name' => $name, 'price' => $price];
    }

    public function getItems() {
        return $this->items;
    }
}
?>