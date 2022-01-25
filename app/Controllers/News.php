<?php

namespace App\Controllers;

class News extends BaseController
{
    public function dashboard(){
        echo view('News/dashboard');
    }
}
