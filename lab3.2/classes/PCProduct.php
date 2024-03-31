<?php

class PCProduct extends Product{
    public $cpu;
    public $ram;
    public $countCore;
    

    public function __construct($id, $name, $price, $qty, $size, $cpu, $ram, $countCore){
        parent::__construct($id, $name, $price, $qty, $size);
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->countCore = $countCore;

    }
    public function getProductInfo(){
        $out = parent::getProductInfo();
        $out .="<p>Производитель процессора: {$this -> cpu}</p>".
        "<p>Объем памяти: {$this -> ram}</p>".
        "<p>Количество ядер: {$this -> countCore}</p>"; 
        return $out;


    }

}