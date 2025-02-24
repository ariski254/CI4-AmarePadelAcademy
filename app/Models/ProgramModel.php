<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramModel extends Model
{
    protected $table      = 'programs';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['title', 'description'];

    protected $useTimestamps = true;

    public function getPrograms()
    {
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
}