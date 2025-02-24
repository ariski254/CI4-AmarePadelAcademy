<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramImageModel extends Model
{
    protected $table      = 'program_images';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['program_id', 'image_path'];

    protected $useTimestamps = true;

    public function getImageByProgramId($programId)
    {
        return $this->where('program_id', $programId)->first();
    }

    public function updateImage($id, $data)
    {
        return $this->update($id, $data);
    }
}