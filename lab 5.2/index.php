<?php

error_reporting(E_ALL);

require_once 'classes/IPrinter.php';
require_once 'classes/Product.php';
require_once 'classes/Printer.php';
require_once 'classes/Book.php';

$printer = new Printer('HP', 1100, 'А14');
$printer->getProduct();

$book = new Book('12 стульев', 11, 900);
$book->getProduct();

$printer->getCartidge();

