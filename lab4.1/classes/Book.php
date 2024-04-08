<?php

require_once 'IWorkBook.php';
class Book extends Product implements IWorkBook {

    private $pages;

    public $price;

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
        return $this->description = $description;
    }

    public function getWorkBook(){
        echo self::WORKBOOK;
    }
}