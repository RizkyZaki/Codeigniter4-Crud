<?php

namespace App\Controllers;

use App\Models\UsersModel;

class User extends BaseController
{
    protected $users;
    public function __construct()
    {
        $this->users = new UsersModel();
    }
    public function profile()
    {
        echo view('User/profile');
    }
    
    public function edit()
    {
        // $users = new UsersModel();
        $id = $this->request->getVar('id');
        // $username = $this->request->getVar('username');
        $name = $this->request->getVar('name');
        $dataUser = $this->users->where([
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
            $this->users->update($id, [
                'name' => $this->request->getVar('name'),
            ]);
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $name;
            return redirect()->to(base_url('profile'));
        }
    }
    
    public function delete($id)
    {
        $this->users->delete($id);
        // $user  = new UsersModel($id);
        // // $id = $this->request->getVar('id');
        // // $dataUser = $user->getWhere([
        // //     'id' => $id,
        // // ]);
        // // session()->set([
        // //     'id'    => $dataUser['id'],
        // // ]);
        // $user->delete($id);
        // $_SESSION['id'] = $id;
        return redirect()->to(base_url('/'));
    }
}

