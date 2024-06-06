<?php
	class Book extends Product{

	public $pages;
	
	public function __construct($name, $price, $pages) {
		parent::__construct($name, $price);
		$this->pages = $pages;
	}

	public function getProduct()
	{
	$out = parent::getProduct();
	$out .= "Кол-во страниц: {$this->pages}<br>";
	return $out;
	}

	public function addProduct($name, $price, $pages = 0) {
		// TODO: Implement addProduct() method.
		var_dump($name);
		var_dump($price);
		var_dump($pages);
	}
}