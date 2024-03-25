<?php
    error_reporting(-1);

    require 'classes/Product.php';
    require 'classes/BookProduct.php';
    require 'classes/PCProduct.php';

    $book1 = new BookProduct(1, 'Мертвые души', 500, 15, 600);
    print_r( $book1 );
    $pc1 = new PCProduct(2, 'DEll',30000, 2, 2.4, 16);
    print_r( $pc1 ); 
