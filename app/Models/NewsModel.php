<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'isi', 'foto', 'id_kategori' ];

    public function getNews($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    function getRelasi()
    {
        $builder = $this->db->table('news');
        $builder->join('kategori', 'kategori.id_kat = news.id_kategori');
        $query = $builder->get();
        return $query->getResultArray();
    }
}