<?php

namespace App\Controllers;
use App\Models\NewsModel;

class Landing extends BaseController
{
    public function index(){
        $news = new NewsModel();
        $data['news'] = $news->getRelasi();
        return view('Pages/Landing', $data);
    }
}
