<?php

use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$users = $db->query(
    'SELECT * FROM users WHERE role =:role AND email != :email',
    [
        'role' => 'admin',
        'email' => $_SESSION['user']['email']
    ]
)->get();

view(
    'admin/home/index.php',
    [
        'users' => $users,
    ]
);
