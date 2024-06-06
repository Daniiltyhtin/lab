<?php 
namespace core;
abstract class Product {

	public $price;
	public $name;


	public function __construct($name, $price)
	{
		$this->price = $price;
		$this->name = $name;

	}

	abstract protected function addProduct($name, $price);

}