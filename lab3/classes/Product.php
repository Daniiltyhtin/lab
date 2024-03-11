<?php

class Product{

    public $name;
    public $id;
    public $price;
    public static $qty = 0;

    public function __construct($name, $id , $price){
    
        $this -> id = $id;
        $this -> name = $name;
        $this -> price = $price;
     
        self::$qty++;

        $this -> getProductInfo();
    }

    public function getProductInfo(){
        echo "<h1>Товар:{$this -> name}</h1>
        <p>id:{$this -> id}</p>
        <p>Price:{$this -> price}</p>";
    }

    public static function getQty(){

        echo self::$qty;
        
    }
}