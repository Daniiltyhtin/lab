<?php

class PCProduct extends Product{
    public $cpu;
    public $ram;
    public $CountCore;

    public function __construct($id, $name, $price, $qty, $size, $cpu, $ram, $CountCore){
        parent::__construct($id, $name, $price, $qty, $size);
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->CountCore = $CountCore;

    }
    public function getPCProduct(){
        $out = parent::getProduct();
        $out .="<p>Производитель процессора: {$this -> cpu}</p>".
        "<p>Объем памяти: {$this -> ram}</p>".
        "<p>Количество ядер: {$this -> CountCore}</p>"; 
        return $out;
    }

}