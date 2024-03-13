<?php

namespace App\Listeners;

class UserCreatedListener
{    
    /**
     * handle
     *
     * @param  mixed $user
     * @return void
     */
    public static function handle(array $user)
    {
        log_message('alert', "New user created : {$user['firstname']}");
    }
}