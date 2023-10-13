<?php

use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$user = $db->query(
    'SELECT * FROM users WHERE id=:id',
    [
        'id' => $_GET['id']
    ]
)->fetchOrFail();



view(
    'admin/users/edit.php',
    [
        'user' => $user,
    ]
);
