<!DOCTYPE HTML>
    <head>
        <link rel="stylesheet" href="styles.css">
        <title></title>
    </head>
    <body>

        <?php

        require_once __DIR__.'/vendor/autoload.php';
        use app\Book;
        use core\Product;
        use trais\TAuthor;

        $object = new Book('Три медведя', 350, 'желтый', 'маленький', 200, 'сказка');
        $object -> setAuthor('Лев Николаевич Толстой');
        echo"{$object -> getProductInfo()}";
        echo"{$object -> getAuthor()}";
        echo"{$object -> getCover()}";

        ?>
    </body>
</html>





