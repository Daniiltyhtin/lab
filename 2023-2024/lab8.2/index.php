<!DOCTYPE HTML>
    <head>
        <title></title>
    </head>
    <body>

        <?php

        error_reporting(E_ALL);

        require_once __DIR__.'/vendor/autoload.php';
        use app\Book;
        use core\Product;
        use trais\TAuthor;

        $object = new Book(1, 'Гарри Поттер и Кубок огня', 699, 'Black', 1205, 'фантастика');
        $object -> setAuthor('Джоан Роулинг');
        echo"{$object -> getProductInfo()}";
        echo"{$object -> getAuthor()}";
        echo"{$object -> getCover()}";

        ?>
    </body>
</html>





