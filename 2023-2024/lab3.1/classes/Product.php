<?php
class Product {
    
    public $price;
    public $nameGood;
    public $clock;
    public $pages;

    public function __construct($nameGood, $price, $clock = null,$pages = null){
    
    $this->price = $price;
    $this->nameGood = $nameGood;
    $this->clock = $clock;
    $this->pages = $pages;
    }

    public function getProduct()
    {
    return "<hr><br>О товаре:</br>
    <br>Наименование: {$this->nameGood}</br>
    <br>Цена: {$this->price}</br>";
    }
    public function getName()
    {
    return $this->nameGood;
    }
    public function getPrice()
    {
    return $this->price;
    }
}