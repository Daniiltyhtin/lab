<?php
namespace app;
use core\Product;
use interfaces\ICover;
use traits\TAuthor;

class Book extends Product implements ICover{
    use TAuthor;
    public $pages;
    public $style;
    public function __construct($name, $price, $color, $size, $pages, $style){
		parent::__construct($name, $price, $color, $size);
        $this->price = $price;
		$this->name = $name;
		$this->color = $color;
		$this->size = $size;
        $this->pages = $pages;
		$this->style = $style;
	}

    public function getProductInfo()
    {
        $out = parent::getProductInfo();
        $out .= "<p>Информация о количестве страниц: {$this -> pages}</p>
            <p>Информация о жанре: {$this -> style}</p>";  
        return $out;
    }

    public function setCover(){
    }
    public function getCover(){
        return "<p>".static::COVER."</p>";
    }
}
