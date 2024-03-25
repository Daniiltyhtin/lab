<?php

class PCProduct extends Product{
    public $cpu;
    public $memory;

    public function __construct($id, $name, $price, $qty, $cpu, $memory){
        parent::__construct($id, $name, $price, $qty);
        $this->cpu = $cpu;
        $this->memory = $memory;

    }

}