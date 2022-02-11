<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kat';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_kategori'];
}