<?php

Class Product{
    public $id;
    public $name;
    public $price;
    public $qty;
    public $size;

    public function __construct($id, $name, $price, $qty, $size){
        
        $this->id = $id;

        $this->name = $name;

        $this->price = $price;

        $this->qty = $qty;

        $this->size = $size;
    }

    public function getProduct(){
        $out = "<hr><p>Идентификатор: {$this -> id}</p>".
        "<p>Наименование: {$this -> name}</p>".
        "<p>Цена: {}</p>";
        
    }
    }