<?php
error_reporting(-1);
require_once 'classes/Product.php';
function debug($data){
    echo '<pre>';
    print_r($data,1);
    echo '</pre>';
    }
$product1 = new Product();
$product2 = new Product();

$product1->id = 1;
$product1->name = "Ноутбук";
$product1->price = 40000;
$product1->qty = 26;
$product2->id = 2;
$product2->name = "IPhone";
$product2->price = 45000;
$product2->qty = 210;

echo $product1 -> getProductInfo();
echo $product2 -> getProductInfo();