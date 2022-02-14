<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    // protected $returnType = "object
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'email', 'password', 'name'];
}
