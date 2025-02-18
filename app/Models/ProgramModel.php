<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramModel extends Model
{
    protected $table = 'programs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['program_type', 'title', 'description', 'image_path'];
    protected $useTimestamps = true;

    // Mendapatkan data program berdasarkan jenisnya (kids, adult, competition)
    public function getPrograms($program_type = null)
    {
        if ($program_type) {
            return $this->where('program_type', $program_type)->findAll();
        }

        return $this->findAll();
    }

    // Update data program
    public function updateProgram($id, $data)
    {
        return $this->update($id, $data);
    }
}