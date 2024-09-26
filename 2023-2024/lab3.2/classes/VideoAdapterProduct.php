<?php

class VideoAdapterProduct extends Product{

    public $memory;
    public $gpu;
    public $frequency;
    
    public function __construct($id, $name, $price, $qty, $size, $memory, $gpu, $frequency){
        parent::__construct($id, $name, $price, $qty, $size);
        $this->memory = $memory;
        $this->gpu = $gpu;
        $this->frequency = $frequency;

    }
    public function getProductInfo(){
        $out = parent::getProductInfo();
        $out .= "<p>Объем памяти: {$this -> memory}</p>".
        "<p>Производитель видеокарты: {$this -> gpu}</p>".
        "<p>Частота чипа: {$this -> frequency}</p>";
        return $out;

    }
}
