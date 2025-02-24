<?php

namespace App\Models;

use CodeIgniter\Model;

class AcademyProgramModel extends Model
{
    protected $table = 'academy_programs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['program_type', 'title', 'description', 'level', 'image', 'active'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}