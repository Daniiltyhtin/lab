<?php
    error_reporting(-1);

    require 'classes/Product.php';
    require 'classes/VideoAdapterProduct.php';
    require 'classes/PCProduct.php';
    
    $notebook = new PCProduct(1, 'ASUS',49000, 200, 'Средний', 'AMD', 16, 'IPS');
    $product = new Product(2, 'IPhone',66000 , 400, 'Маленький');
    $videocard = new VideoAdapterProduct(3, 'RTX 4060 TI', 50000, 500, 'Средний', 8, 'Nvidia', '1,4');
    
    echo $notebook -> getProductInfo();
    echo $product -> getProductInfo();
    echo $videocard -> getProductInfo();
