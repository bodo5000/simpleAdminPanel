<?php

namespace Core\Middleware;

class Guest
{
    public function handle()
    {
        // code
        if ($_SESSION['user'] ?? false) {
            redirect('/home');
        }
    }
}
