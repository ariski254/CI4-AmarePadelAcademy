<?php

namespace App\Models;

use CodeIgniter\Model;

class CertificationModel extends Model
{
    protected $table = 'padel_certifications';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description'];
    protected $useTimestamps = true;

    // Fetch the certification data
    public function getCertification()
    {
        return $this->first(); // Returns the first row (we assume there's only one record)
    }

    // Update the certification data
    public function updateCertification($data)
    {
        return $this->update(1, $data); // Assuming the certification data has an ID of 1
    }
}