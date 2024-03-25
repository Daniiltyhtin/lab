<?php
    error_reporting(-1);

    require 'classes/Product.php';
    require 'classes/VideoAdapterProduct.php';
    require 'classes/PCProduct.php';

    
    
    $pc1 = new PCProduct(1, 'DEll',30000, 2, 'medium', 'AMD', 16, 6);
    echo $pc1 -> getPCProduct();

    $product1 = new Product(2, 'Nothingphone',29000 , 1, 'small');
    echo $product1 -> getProduct();

    $videocard1 = new VideoAdapterProduct(3, 'RX 3050', 25000, 5, 'medium', 8, 'Geforce', '1,4');
    echo $videocard1 -> getVADProduct();
