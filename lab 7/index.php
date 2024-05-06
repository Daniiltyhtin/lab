<?php

require_once __DIR__.'/vendor/autoload.php';
use app\Notebook;
use core\Product;


$notebook1 = new Notebook('acer235E1', 27000, 'Acer', 'IPS');
$notebook1 -> setColor("ugreen");
$notebook1 -> getScreen();
echo "<br>";
print_r($notebook1);
