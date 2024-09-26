<?php

namespace core;

abstract class Product {

	public $brand = 'OOO магазин';
	public $price;
	public $name;
	public $color;
	public $size;

	public function __construct($name, $price, $color, $size){
		$this->price = $price;
		$this->name = $name;
		$this->color = $color;
		$this->size = $size;
	}

	public function getProductInfo(){
		$out = "<p>Информация о цене: {$this -> price}</p>
		<p>Информация об именовании товара: {$this ->name }</p>
		<p>Информация о цвете: {$this -> size}</p>
		<p>Информация о размере: {$this -> color }</p>";
		return $out;
	}

}