<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramModel extends Model
{
    protected $table      = 'programs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['category', 'name', 'description', 'details'];
    protected $useTimestamps = true;

    public function getPrograms($category = null)
    {
        if ($category) {
            return $this->where('category', $category)->findAll();
        }
        return $this->findAll();
    }

    public function getProgram($id)
    {
        return $this->find($id);
    }

    public function updateProgram($id, $data)
    {
        return $this->update($id, $data);
    }

    public function insertProgram($data)
    {
        return $this->insert($data);
    }
}