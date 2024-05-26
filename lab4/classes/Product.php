<?php

abstract class Product{

    private $id;
    private $name;

    public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }

    abstract function getDescription();

    public function getInfoProd(){
        return "<h2>Информация о товаре</h2><hr>
        <p>Идентификатор товара: {$this->id}</p>
        <p>Наименование товара: {$this->name}</p>";
    }
}