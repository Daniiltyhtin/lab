<?php
class Product {
    
    public $price;
    public $nameGood;
    public $clock;
    public $pages;

    public function __construct($price, $nameGood, $clock = null,$pages = null){
    
    $this->price = $price;
    $this->nameGood = $nameGood;
    $this->clock = $clock;
    $this->pages = $pages;

    }

    public function getProductInfo($type) {
        $out = "<h3>О товаре    `````````````````````````````````````````````````````````````````````````````````````   ``````````{$this->nameGood} </h3><br>
        Наименование товара{$this->nameGood} <br>
        Цена:{$this->price} <br>";
        if($type == 'pc'){
        $out .= "Частота {$this->clock} <br>";
        }else{
        $out .= "Количество страниц {$this->pages} <br>";
        }
        echo $out;
        }

}