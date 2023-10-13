<?php

use Core\App;
use Core\DataBase;

$id = $_POST['id'];

$db = App::resolve(DataBase::class);

$user = $db->query(
    "SELECT * FROM users WHERE id =:id",
    [
        'id' => $id
    ]
)->fetchOrFail();


$db->query(
    "DELETE FROM users WHERE id = :id",
    [
        'id' => $_POST['id'],
    ]
);

redirect('/home');
