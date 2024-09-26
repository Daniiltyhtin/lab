<?php

require_once 'classes/IWorkBook.php';
require_once 'classes/Product.php';
require_once 'classes/Book.php';


$book1 = new Book(1,'Властелин колец', 899, 449);
echo $book1->getInfoProd();

$book1 -> setDescription('Джон Рональд Руэл Толкин');

echo "<p>Автор книги: {$book1 -> getDescription()}</p>";

if (get_class($book1) == "Book") {
    echo "<p>Рабочая тетрадь к книге: ".$book1->getWorkBook()."</p>";
}
