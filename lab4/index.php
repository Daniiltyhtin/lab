<?php

require_once 'classes/IWorkBook.php';
require_once 'classes/Product.php';
require_once 'classes/Book.php';


$book1 = new Book(2,'Eragorn', 1206, 530);
echo $book1->getInfoProd();

echo "<h3>О товаре: {$book1 -> setDescription('fantazy')}</h3>";

if (get_class($book1) == "Book") {
    echo "Есть ли рабочая тетрадь к книге(да-1/нет-1): ".$book1->getWorkBook();
}
