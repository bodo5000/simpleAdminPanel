<?php

use Core\App;
use Core\DataBase;

$id = $_POST['id'];

$db = App::resolve(DataBase::class);

$car = $db->query(
    "SELECT * FROM cars WHERE id =:id",
    [
        'id' => $id
    ]
)->fetchOrFail();


$db->query(
    "DELETE FROM cars WHERE id = :id",
    [
        'id' => $_POST['id'],
    ]
);

redirect('/cars');
