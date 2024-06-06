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
        echo "<p>Тип Матрицы экрана {$this -> screen}<p>";
    } 
    public function doAction1()
    {
        echo '<p>Выполнили действие 1</p>';
        return $this;
    }
    public function doAction2()
    {
        echo '<p>Выполнили действие 2</p>';
        return $this;
    }
}
