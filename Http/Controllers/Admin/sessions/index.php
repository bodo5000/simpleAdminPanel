<?php

use Core\Session;

view(
    'admin/sessions/index.php',
    [
        'errors' => Session::get('errors'),
    ]
);
