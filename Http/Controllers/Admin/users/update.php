<?php

use Core\App;
use Core\DataBase;
use Core\Validator;


$db = App::resolve(DataBase::class);

$errors = [];

$user = $db->query(
    "SELECT * FROM users WHERE id =:id",
    [
        'id' => $_POST['id']
    ]
)->fetchOrFail();

// validate the form
if (!Validator::email($_POST['email'])) {
    $errors['email'] = 'email not valid';
}

if (!Validator::string($_POST['name'], 1, 30)) {
    $errors['name'] = 'name must be between 1 and 30 character';
}

// if no validation error update the recode in the databaseTable
if (count($errors)) {
    return view(
        'admin/users/edit.php',
        [
            'errors' => $errors,
            'user' => $user
        ]
    );
}

$db->query(
    'UPDATE users set name =:name,email=:email WHERE id =:id',
    [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'email' => $_POST['email']
    ]
);

// redirect the user;
redirect('/home');
