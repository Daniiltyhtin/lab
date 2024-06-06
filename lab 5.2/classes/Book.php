<?php
	class Book extends Product{

	public $numPages;
	
	public function __construct($name, $price, $numPages) {
		parent::__construct($name, $price);
		$this->numPages = $numPages;
	}

	public function getProduct()
	{
	$out = parent::getProduct();
	$out .= "Кол-во страниц: {$this->pages}<br>";
	return $out;
	}

	public function addProduct($name, $price, $numPages = 0) {
		// TODO: Implement addProduct() method.
		var_dump($name);
		var_dump($price);
		var_dump($numPages);
	}
}