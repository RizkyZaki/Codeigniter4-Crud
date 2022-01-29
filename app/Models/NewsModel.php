<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'isi', 'foto' ];

    public function getNews($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}