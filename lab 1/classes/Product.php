<?php
class Product {
    public $id;
    public $name;
    public $price;
    public $qty;
    public function getProductInfo() {
        return "<h3>О товаре</h3>
        название товара: {$this->name}<br>
        Порядковый номер товара: {$this->id}<br>
        Стоимость товара: {$this->price}<br>
        Количество товара: {$this->qty}<br>";
    }

}