<?php 

error_reporting(-1);

require_once "classes/Product.php";

$pc1 = new Product("ПК1", 1, 15000);
$pc2 = new Product("ПК2", 2, 45000);

Product::getQty();