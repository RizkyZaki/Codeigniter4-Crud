<?php

namespace App\Controllers;

class News extends BaseController
{
    public function dashboard(){
        echo view('News/dashboard');
    }

    public function create(){
        echo view('News/create');
    }
    
    public function list(){
        echo view('News/list');
    }
}
