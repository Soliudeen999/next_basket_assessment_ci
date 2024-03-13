<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Service\UserService;
use CodeIgniter\HTTP\ResponseInterface;

class StoreUserController extends BaseController
{    
    /**
     * storeUser
     *
     * @return ResponseInterface
     */
    public function storeUser() : ResponseInterface
    {
        $rules = [
            'firstname' => 'required|min_length[3]|max_length[190]',
            'lastname' => 'required|min_length[3]|max_length[190]',
            'email' => 'required|valid_email|max_length[190]|is_unique[users.email]',
        ];

        $data = $this->request->getPost(array_keys($rules));

        if (! $this->validateData($data, $rules)) {
            $errors = $this->validator->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        // If you want to get the validated data.
        $validData = $this->validator->getValidated();
        (new UserService())->createUser($validData);
        return redirect()->back()->with('success', 'User Created Successfully.');
    }
}
