<?php

require_once 'classes/IPrinter.php';
require_once 'classes/Product.php';
require_once 'classes/Printer.php';
require_once 'classes/Book.php';


$printer = new Printer('HP', 1000, 'А12');
$printer->getProductInfo('printer');


$book = new Book('12 стульев', 10, 900);
$book->getProductInfo('book');

$printer->getCartidge();
$book->getCartidge();
