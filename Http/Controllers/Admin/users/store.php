<?php

use Core\App;
use Core\DataBase;
use Core\Validator;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];
$db = App::resolve(DataBase::class);

// validate Form Inputs
if (!Validator::email($email)) {
    $errors['email'] = 'please Enter Valid Email';
}

if (!Validator::string($password, 7, 10)) {
    $errors['password'] = 'Password Must Be Between 7 to 10 characters';
}

if (!Validator::string($name)) {
    $errors['name'] = 'Please Enter Your name';
}

if (!empty($errors)) {
    return view(
        'admin/users/create.php',
        [
            'errors' => $errors
        ]
    );
}

// validate if Account exists
$user = $db->query(
    "SELECT * FROM users WHERE email = :email",
    [
        'email' => $email,
    ]
)->find();

if ($user) {
    $errors['email_assign'] = 'User Has Been Already exists';

    return view(
        'admin/users/create.php',
        [
            'errors' => $errors
        ]
    );
} else {
    // create User If Not Exists
    $db->query(
        "INSERT INTO users(name,email,password,role) VALUES(:name, :email, :password,'admin') ",
        [
            'name' => $name,
            'email' => $email,
            'password' => password_hash((string)$password, PASSWORD_BCRYPT) // encrypt Password
        ],
    );
}
redirect('/home');
