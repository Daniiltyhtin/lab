<?php

Class Product{
    public $id;
    public $name;
    public $price;
    public $qty;
    public $size;

    public function __construct($id, $name, $price, $qty, $size = null){
        
        $this->id = $id;

        $this->name = $name;

        $this->price = $price;

        $this->qty = $qty;

        $this->size = $size;
    }

    public function getProductInfo(){
        $out =  "<hr><p>Идентификатор: {$this -> id}</p>".
        "<p>Наименование: {$this -> name}</p>".
        "<p>Цена: {$this -> price}</p>".
        "<p>Количество: {$this -> qty}</p>".
        "<p>Размер: {$this -> size}</p>";
        return $out;
    }
    }