<?php

use Core\App;
use Core\DataBase;
use Core\Validator;

$db = App::resolve(DataBase::class);

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

$car = $db->query(
    'SELECT * FROM cars WHERE id =:id',
    [
        'id' => $_POST['id'],
    ]
)->fetchOrFail();


if ($car) {
    $db->query(
        'UPDATE cars SET code=:code, name=:name, price=:price, description=:description,image = :image ',
        [
            'code' => $_POST['code'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'description' => $_POST['description'],
            'image' => $image,
        ]
    );
}


redirect('/cars');
