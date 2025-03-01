<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramModel extends Model
{
    protected $table = 'programs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['program_type', 'title', 'description', 'image', 'content'];
    protected $useTimestamps = true;

    public function getPrograms()
    {
        return $this->findAll();
    }

    public function getProgramById($id)
    {
        return $this->find($id);
    }
}