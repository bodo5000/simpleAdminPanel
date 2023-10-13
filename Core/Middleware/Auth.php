<?php

namespace Core\Middleware;

class Auth
{
    public function handle()
    {
        // code
        if (!$_SESSION['user'] ?? false) {
            redirect('/');
        }
    }
}
