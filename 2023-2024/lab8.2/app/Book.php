<?php
namespace app;
use core\Product;
use interfaces\ICover;
use traits\TAuthor;

class Book extends Product implements ICover{
    use TAuthor;
    public $pages;
    public $style;
    public function __construct($id, $name, $price, $color, $pages, $style){
		parent::__construct($id, $name, $price, $color);
        $this->pages = $pages;
		$this->style = $style;
	}

    public function getProductInfo()
    {
        $out = parent::getProductInfo();
        $out .= "<p>Количестве страниц: {$this -> pages}</p>
            <p>Жанр книги: {$this -> style}</p>";  
        return $out;
    }

    public function setCover(){
    }
    public function getCover(){
        return "<p>Обложка:".static::COVER."</p>";
    }
}
