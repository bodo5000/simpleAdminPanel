<?php

$router->get('/', 'admin/index.php');

$router->get('/register', 'admin/register/index.php')->only('guest');
$router->post('/register', 'admin/register/store.php')->only('guest');

$router->get('/sessions', 'admin/sessions/index.php')->only('guest');
$router->post('/sessions', 'admin/sessions/store.php')->only('guest');
$router->delete('/sessions', 'admin/sessions/destroy.php')->only('auth');

$router->get('/home', 'admin/home/index.php')->only('auth');

$router->get('/admins/users', 'admin/users/create.php')->only('auth');
$router->post('/admins/users', 'admin/users/store.php')->only('auth');

$router->get('/admins/user', 'admin/users/edit.php')->only('auth');
$router->patch('/admins/user', 'admin/users/update.php')->only('auth');
$router->delete('/admins/user', 'admin/users/destroy.php')->only('auth');

$router->get('/cars', 'admin/products/index.php')->only('auth');
$router->get('/cars/create', 'admin/products/create.php')->only('auth');
$router->post('/cars/store', 'admin/products/store.php')->only('auth');


$router->get('/car/show', 'admin/products/show.php')->only('auth');
$router->delete('/car/delete', 'admin/products/destroy.php')->only('auth');
$router->get('/car/edit', 'admin/products/edit.php')->only('auth');
$router->patch('/car/update', 'admin/products/update.php')->only('auth');
