<?php

class VideoAdapterProduct extends Product{

    public $memory;
    public $brand;

    public $frequency;
    public function __construct($id, $name, $price, $qty, $size, $memory, $brand, $frequency){
        parent::__construct($id, $name, $price, $qty, $size);
        $this->memory = $memory;
        $this->brand = $brand;
        $this->frequency = $frequency;

    }
    public function getVADProduct(){
        $out = parent::getProduct();
        $out .= "<p>Объем памяти: {$this -> memory}</p>".
        "<p>Производитель видеокарты: {$this -> brand}</p>".
        "<p>Частота чипа: {$this -> frequency}</p>";
        return $out;

    }
}
