<?php

namespace App\Models;

use CodeIgniter\Model;

class Akun_model extends Model
{
    protected $table      = 'akun';
    protected $allowedFields = ['username', 'password', 'gender', 'baju', 'celana', 'aksesoris'];
}