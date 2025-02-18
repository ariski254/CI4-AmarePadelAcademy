<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutUsModel extends Model
{
    protected $table = 'about_us';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'subtitle', 'description', 'image'];

    public function getAboutUs()
    {
        return $this->first(); // Fetch the first row (assuming there's only one entry)
    }

    public function updateAboutUs($id, $data)
    {
        return $this->update($id, $data); // Update data by ID
    }
}