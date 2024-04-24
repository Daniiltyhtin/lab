<?php
	require_once 'IBook.php';
	class Book extends Product implements IBook{

	public $numPages;
	
	public function __construct($name, $price, $numPages) {
		parent::__construct($name, $price);
		$this->numPages = $numPages;
	}

	public function getSize(){
		// TODO: Implement getCase() method.
		$out = "<div><h3>Книга {$this->name}";
		if ($this->numPages > 400 and $this-> numPages < 800 ){
			$out .= " среднего размера";}
		elseif ($this->numPages > 799){
			$out .= " большого размера";}
		else{
			$out .= " маленького размера";
		}
		$out .= "</h3></div>";
		echo $out;
	}

	public function addProduct($name, $price, $numPages = 0) {
		// TODO: Implement addProduct() method.
		var_dump($name);
		var_dump($price);
		var_dump($numPages);
	}
}