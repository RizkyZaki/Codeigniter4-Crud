<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'isi', 'foto', 'id_kategori' ];

    // public function getNews($slug = false)
    // {

    //     if ($slug == false) {
    //         return $this->findAll();
    //     }

    //     return $this->where(['slug' => $slug])->first();
    // }

    public function getNews($slug)
    {
        $builder = $this->db->table('news');
        $builder->join('kategori', 'kategori.id_kat = news.id_kategori');
        $builder->where('news.slug', $slug);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function getRelasi()
    {
        $builder = $this->db->table('news');
        $builder->join('kategori', 'kategori.id_kat = news.id_kategori');
        // $builder->join('users', 'users.id_kat = news.id_kategori');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getCountNews()
    {
        $builder = $this->db->table('news');
        return $builder->countAllResults();
    }
    public function getCountUser()
    {
        $builder = $this->db->table('users');
        return $builder->countAllResults();
    }
    public function getCountCat()
    {
        $builder = $this->db->table('kategori');
        return $builder->countAllResults();
    }
}