<?php

require_once __DIR__.'/vendor/autoload.php';

use app\Book;


$printer = new Book('Гарри Поттер', 2000, 755);
var_dump($printer);

