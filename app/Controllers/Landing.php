<?php

namespace App\Controllers;

class Landing extends BaseController
{
    public function index(){
        echo view('Pages/Landing');
    }
}
