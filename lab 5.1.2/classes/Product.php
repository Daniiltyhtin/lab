<?php 

abstract class Product {

	public $price;
	public $name;
	public $cartridge;
	public $numPages;

	public function __construct($name, $price, $cartridge = null, $numPages = null)
	{
		$this->price = $price;
		$this->name = $name;
		$this->cartridge = $cartridge;
		$this->numPages = $numPages;
	}

	public function getProductInfo() {
		$out = "<hr><h3>О товаре {$this->name}</h3>" 
		. "Цена: {$this->price}<br>";

		if($this instanceof Printer) {
			$out .= "Картридж: {$this->cartridge}";
		}else{
			$out .= "Количество страниц:
			{$this->numPages}";
		}

		echo $out;
	}

	abstract protected function addProduct($name, $price);

}