<?php

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

$book = new BookProduct('Книга 1', 20, 1000);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');
echo $book->getProduct();
echo $notebook->getProduct();