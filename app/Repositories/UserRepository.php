<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{   
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }
    
    /**
     * store
     *
     * @param  mixed $userData
     * @return array
     */
    public function store($userData) : array
    {
        return $this->userModel->find($this->userModel->insert($userData));
    }
}