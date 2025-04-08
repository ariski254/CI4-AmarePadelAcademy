<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanImageModel extends Model
{
    protected $table = 'kegiatan_images';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['kegiatan_id', 'image'];
}