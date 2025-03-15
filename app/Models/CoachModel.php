<?php

namespace App\Models;

use CodeIgniter\Model;

class CoachModel extends Model
{
    protected $table = 'coaches';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'role', 'position', 'image', 'twitter', 'facebook', 'instagram'];
    protected $useTimestamps = true;

    public function getCoaches()
    {
        return $this->findAll();
    }

    public function getCoach($id)
    {
        return $this->find($id);
    }

    public function createCoach($data)
    {
        return $this->save($data);
    }

    public function updateCoach($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteCoach($id)
    {
        return $this->delete($id);
    }
}