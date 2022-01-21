<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{
    public function index()
    {
        echo view('User/index');
    }
    public function profile()
    {
        echo view('User/profile');
    }
    public function edit()
    {
        $users = new UsersModel();
        $id = $this->request->getVar('id');
        // $username = $this->request->getVar('username');
        $name = $this->request->getVar('name');
        $dataUser = $users->where([
            'id' => $id,
        ])->first();

        $validation =  \Config\Services::validation();
        $validation->setRules([
            'name' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        if ($isDataValid){
            // $data = $users->where('id', $id)->get();
            session()->set([
                'id'    => $dataUser['id'],
                'username' => $dataUser['username'],
                'name' => $dataUser['name']
            ]);
            $users->update($id, [
                'name' => $this->request->getVar('name'),
            ]);
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $name;
            return redirect()->to(base_url('profile'));
        }
    echo view('user/edit');
    }
    
    // public function update_profile()
    // {
    // }
}
