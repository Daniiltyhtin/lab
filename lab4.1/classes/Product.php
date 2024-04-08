<?php

abstract class Product{

    private $id;
    private $name;

    public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }

    abstract function getDescription();
}