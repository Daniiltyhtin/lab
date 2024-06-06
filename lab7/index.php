<?php

error_reporting(E_ALL);

require_once __DIR__.'/vendor/autoload.php';
use app\Notebook;
use core\Product;
use app\ClassA;
use app\ClassB;


$notebook1 = new Notebook('MyNotebook', 45000, 'Acer', 'VA');
$notebook1 -> setColor("Black");
$notebook1 -> getScreen();
print_r($notebook1);
echo "<br>";

$notebook1->doAction1()->doAction2();
$a = new ClassA();
$b = new ClassB();

$a->getTest();
echo '<br>';
$b->getTest();
echo '<br>';
$b->getTest2();
echo '<br>';
