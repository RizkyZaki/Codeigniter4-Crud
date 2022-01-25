<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Register extends BaseController
{
    public function process()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} Must Be Filled',
                    'min_length' => '{field} Minimum 4 Characters',
                    'max_length' => '{field} Maximum 20 Characters',
                    'is_unique' => 'Username has been used before'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]|max_length[50]',
                'errors' => [ 
                    'required' => '{field} Must Be Filled',
                    'min_length' => '{field} Minimum 8 Charactersr',
                    'max_length' => '{field} Maximum 50 Characters',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Confirm Password does not match',
                ]
            ],
            'name' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Must Be Filled',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maximum 100 Characters',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new UsersModel();
        $users->insert([
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'name' => $this->request->getVar('name')
        ]);
        return redirect()->to('/');
    }
}