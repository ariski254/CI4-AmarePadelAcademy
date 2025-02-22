<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table      = 'contact_details';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    // Updated column names
    protected $allowedFields = ['contact_description', 'contact_address', 'contact_phone', 'contact_email', 'contact_map_url'];

    public function getContactDetails()
    {
        return $this->find(1);  // Assumes only one row exists with ID = 1
    }
}