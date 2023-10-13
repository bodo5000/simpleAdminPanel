<?php

use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$car = $db->query(
    'SELECT * FROM cars WHERE id=:id',
    [
        'id' => $_GET['id']
    ]
)->fetchOrFail();


view(
    '/admin/products/edit.php',
    [
        'car' => $car
    ]
);
