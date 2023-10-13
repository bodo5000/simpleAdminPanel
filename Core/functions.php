<?php

use Core\Session;

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404)
{
    http_response_code($code);

    require_once basePath("views/{$code}.php");

    die();
}

function authorize($condition, $status = 403)
{
    if (!$condition) {
        abort($status);
    }
}

function basePath($path)
{
    return BASE_PATH . $path;
}

function view($path, $params = [])
{
    //extract the array to variables -> key is the varName , value is the value of that varName 
    extract($params);

    require_once basePath('views/' . $path);
}

// echo $_SERVER['REQUEST_URI'];
function redirect($path)
{
    header("Location: {$path}");
    exit();
}

function login($user)
{
    $_SESSION['user'] = [
        'email' => $user['email'],
    ];

    session_regenerate_id(true);
}

function logout()
{
    Session::destroy();
}

function old($key, $default = '')
{
    return Core\Session::get('old')[$key] ?? $default;
}

function uploadImage()
{
    $file = $_FILES['image'];
    $f_name = $file['name'];
    $f_type = $file['type'];
    $f_tmp_name = $file['tmp_name'];
    $f_size = $file['size'];
    $f_error = $file['error'];

    if ($f_name != '') {
        $extension = pathinfo($f_name);
        $originalName = $extension['filename'];
        $originalExtension = $extension['extension'];

        $allowedExtensions = ['png', 'jpg', 'jpeg'];

        if (in_array($originalExtension, $allowedExtensions)) {

            if ($f_error == 0) {
                if ($f_size > 60000) {
                    $newName = uniqid('', true) . ".$originalExtension";
                    $dest = '../public/assets/dist/img/' . $newName;

                    move_uploaded_file($f_tmp_name, $dest);
                    return $newName;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}
