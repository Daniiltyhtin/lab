<?php

namespace app;

use core\Product;
use interfaces\IScreen;
use traits\TColor;
class Notebook extends Product implements IScreen{
    
    use TColor;

    public $brand;
    public $screen;

    public function __construct($name, $price, $brand, $screen){
		parent::__construct($name, $price);
		$this -> brand = $brand;
        $this -> screen = $screen;
	}

    public function addProduct($name, $price, $brand = 0){
        return $brand;
    }
    
    public function getScreen(){
        echo "<br>Тип Матрицы экрана {$this -> screen}";
    } 

    public function getBrand(){
        return $this->brand;
    }
}