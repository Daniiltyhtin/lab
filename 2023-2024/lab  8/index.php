<?php

require_once __DIR__.'/vendor/autoload.php';
use app\Notebook;
use core\Product;
use app\ClassA;
use app\ClassB;
use app\ClassC;


$notebook1 = new Notebook('acer235E1', 27000, 'Acer', 'IPS');
$notebook1 -> setColor("ugreen");
$notebook1 -> getScreen();
echo "<br>";
print_r($notebook1);
echo "<br>";

$a = ClassA::getInstance();
$b = ClassB::getInstance();

$a->getTest2();
echo '<br>';
$b->getTest();
echo '<br>';
$b->getTest2();
echo '<br>';

$object3 = ClassC::getInstance();
$object4 = ClassC::getInstance();

var_dump($object3);
echo "<br>";
var_dump($object4);