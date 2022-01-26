<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{

    public function process()
    {
        $users = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            $pass = $dataUser['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                session()->set([
                    'id'    => $dataUser['id'],
                    'username' => $dataUser['username'],
                    'name' => $dataUser['name'],
                    // 'email' => $dataUser['email'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('dashboard'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
    function logout(){
        session()->destroy();
        return redirect()->to('/');
    }
}