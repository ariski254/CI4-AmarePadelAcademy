<?php

namespace App\Models;

use CodeIgniter\Model;

class SponsorModel extends Model
{
    protected $table = 'sponsors';
    protected $primaryKey = 'id';
    protected $allowedFields = ['logo_name', 'logo_path'];
    protected $useTimestamps = true;

    public function getAllSponsors()
    {
        return $this->findAll();
    }

    public function getSponsorById($id)
    {
        return $this->find($id);
    }

    public function createSponsor($data)
    {
        return $this->insert($data);
    }

    public function updateSponsor($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteSponsor($id)
    {
        return $this->delete($id);
    }
}