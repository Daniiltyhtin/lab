<?php
namespace app;
use core\Product;
use interfaces\ISpecialProduct;

class Book extends Product implements ISpecialProduct{
    static $object = array();
    public $pages;
    public $style;
    public $promotion;
    public function __construct($name, $price, $color, $size, $pages, $style, $promotion = 0){
		parent::__construct($name, $price, $color, $size);
        $this->price = $price;
		$this->name = $name;
		$this->color = $color;
		$this->size = $size;
        $this->pages = $pages;
		$this->style = $style;
        $this->promotion = $promotion;
        self::$object[] = $this;
    	}

    public function getProductInfo()
    {
        $out = parent::getProductInfo();
        $out .= "<p>Информация о количестве страниц: {$this -> pages}</p>
            <p>Информация о жанре: {$this -> style}</p>";  
        return $out;
    }

    public function getSale($promo){
        $promo = $this -> price *( 1 - $promo*0.01);
        $this -> price = $promo;
        $this -> promotion = "Sale";
    }

    public function getHit(){
        $this -> promotion = "Hit";
    }
    public function getInfo()
    {
        if($this -> promotion == 'Hit'){
            echo "Хит сезона";
            $this -> getProductInfo();
        }elseif($this-> promotion == 'Sale'){
            echo "Товар со скидкой";
            $this -> getProductInfo();
        }else{
            echo "Нет товаров, реализуемых по специальным предложениям";
        }
    }
}
