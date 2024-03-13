<?php

namespace App\Service;

use App\Repositories\UserRepository;
use CodeIgniter\Events\Events;

class UserService
{       
    /**
     * createUser
     *
     * @param  mixed $userData
     * @return array
     */
    public function createUser(array $userData) : array
    {
        $user = (new UserRepository())->store($userData);

        Events::trigger('userCreated', $user);

        return $user;
    }
}