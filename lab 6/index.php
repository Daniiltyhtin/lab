<?php

require_once __DIR__.'/vendor/autoload.php';
use app\Printer;
use core\Product;
use interfaces\IPrinter;



$printer = new Printer('HP', 2000, 'HP1200');
var_dump($printer);

$printer -> getCartidge();