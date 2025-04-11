<?php

namespace App\Models;

use CodeIgniter\Model;

class CoachingImageModel extends Model
{
    protected $table = 'coaching_images';
    protected $primaryKey = 'id';
    protected $allowedFields = ['coaching_id', 'image'];
}