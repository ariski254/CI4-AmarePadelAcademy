<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table = 'kegiatan';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['title', 'date', 'description'];
    protected $useTimestamps = true;
}