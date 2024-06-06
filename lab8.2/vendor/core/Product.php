<?php

namespace core;

abstract class Product {

	public $id;
	public $price;
	public $name;
	public $color;

	public function __construct($id, $name, $price, $color){
		$this->id = $id;
		$this->price = $price;
		$this->name = $name;
		$this->color = $color;
		
	}

	public function getProductInfo(){
		$out = "<p>Идентификатор товара: {$this -> id}</p>
		<p>Цена товара: {$this -> price}</p>
		<p>Название товара: {$this ->name }</p>
		<p>Цвет товара: {$this -> color}</p>";
		return $out;
	}

}