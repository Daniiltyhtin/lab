<?php

require_once 'classes/IWorkBook.php';
require_once 'classes/Product.php';
require_once 'classes/Book.php';



echo 'проверка<br>';

$book1 = new Book(2,'Eragorn', 1206, 530);
print_r( $book1 );

print_r( $book1 -> setDescription('fantazy'));

echo "nn".$book1->getWorkBook();