<?php 
abstract class Product {

	public $price;
	public $name;
	public $cartridge;
	public $pages;

	public function __construct($name, $price, $cartridge = null, $pages = null)
	{
		$this->price = $price;
		$this->name = $name;
		$this->cartridge = $cartridge;
		$this->pages = $pages;
	}

	public function getProduct() 
	{
		$out = "<h3>О товаре {$this->name}</h3>" 
		. "Цена: {$this->price}<br>";

		if($this instanceof Printer) {
			$out .= "Картридж: {$this->cartridge}";
		}else{
			$out .= "Количество страниц:
			{$this->pages}";
		}

		echo $out;
	}

	abstract protected function addProduct($name, $price);

}