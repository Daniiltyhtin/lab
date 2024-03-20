<?php

require_once ('classes/Product.php');

$pc1 = new Product('1000', 'Acer', '2400 MHz', null);
$book1 = new Product('100', 'Книга 1', null, '200 стр.');

$pc1->getProductInfo('pc');
$book1->getProductInfo('notebook');