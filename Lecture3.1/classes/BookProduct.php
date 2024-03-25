<?php

class BookProduct extends Product{

    public $numPages;
    public function __construct($id, $name, $price, $qty, $numPages){
        parent::__construct($id, $name, $price, $qty);
        $this->numPages = $numPages;
    
    
    }
    }