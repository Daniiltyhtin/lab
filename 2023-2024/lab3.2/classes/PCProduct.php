<?php

class PCProduct extends Product{
    public $cpu;
    public $ram;
    public $screen;
    

    public function __construct($id, $name, $price, $qty, $size, $cpu, $ram, $screen){
        parent::__construct($id, $name, $price, $qty, $size);
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->screen = $screen;

    }
    public function getProductInfo(){
        $out = parent::getProductInfo();
        $out .="<p>Производитель процессора: {$this -> cpu}</p>".
        "<p>Объем памяти: {$this -> ram}</p>".
        "<p>Тип экрана: {$this -> screen}</p>"; 
        return $out;


    }

}