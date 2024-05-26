<?php

require_once 'IWorkBook.php';
class Book extends Product implements IWorkBook {

    private $pages;
    private $price;
    public $description;

    public function __construct($id, $name, $pages, $price){
        parent::__construct($id, $name);
        $this->pages = $pages;
        $this->price = $price;
    
    }

    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function getWorkBook(){
        return self::WORKBOOK;
    }
    public function getInfoProd(){
        $out = parent::getInfoProd();
        $out .= "<p>Количество страниц: {$this -> pages}</p>".
        "<p>Цена товара: {$this -> price}</p>";
        return $out;
    }
}