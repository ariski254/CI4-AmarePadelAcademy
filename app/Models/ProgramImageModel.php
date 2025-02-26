<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramImageModel extends Model
{
    protected $table = 'program_images';
    protected $primaryKey = 'id';
    protected $allowedFields = ['program_id', 'image_path'];
}