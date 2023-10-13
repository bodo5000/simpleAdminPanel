<?php

use Core\App;
use Core\DataBase;
use Core\Validator;

// validate Inputs
$characterLengthError = '[must be between 1 TO 10 character]';
$errors = [];
if (!Validator::string($_POST['code'], 1, 10)) {
    $errors['code'] = 'Please Enter Code ' . $characterLengthError;
}

if (!Validator::string($_POST['name'], 1, 10)) {
    $errors['name'] = 'Please Enter Name ' . $characterLengthError;
}

if (!Validator::string($_POST['description'], 1, 100)) {
    $errors['description'] = 'Please Enter description [must be between 1 TO 1000 character]';
}

// validate imageUpload
$image = uploadImage();
if ($image == false) {
    $errors['image_error'] = 'there is error while uploading image';
}

if (!empty($errors)) {
    return view(
        'admin/products/create.php',
        [
            'errors' => $errors
        ]
    );
}

// store Data
$db = App::resolve(DataBase::class);

// check if the code note exists

$car = $db->query(
    'SELECT * FROM cars WHERE code =:code',
    [
        'code' => $_POST['code'],
    ]
)->find();


if (!$car) {
    // dd($_FILES['image']);
    $db->query(
        'INSERT INTO cars(code,name,price,description,image) VALUES(:code,:name,:price,:description,:image)',
        [
            'code' => $_POST['code'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'description' => $_POST['description'],
            'image' => $image
        ]
    );
    redirect('/cars');
}

$errors['carIsExists'] = 'code already exists';

return view(
    'admin/products/create.php',
    [
        'errors' => $errors,
    ]
);
