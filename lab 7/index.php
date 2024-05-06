<?php

require_once __DIR__.'/vendor/autoload.php';
use app\Notebook;
use core\Product;
use interfaces\IScreen;


$notebook1 = new Notebook('acer235E1', 27000, 'Acer', 'IPS');
$notebook1 -> setColor("ugreen");
print_r($notebook1);