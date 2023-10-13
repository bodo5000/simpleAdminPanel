<?php

// get Products

use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$products = $db->query('SELECT id,code,name,price FROM cars')->get();


view(
    'admin/products/index.php',
    [
        'products' => $products,
    ]
);
