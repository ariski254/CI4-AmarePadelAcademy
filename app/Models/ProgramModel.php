<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramModel extends Model
{
    protected $table      = 'programs';
    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'description', 'icon'];

    // Enabling timestamps
    protected $useTimestamps = true;

    // Validation rules for the Programs table
    protected $validationRules = [
        'title'       => 'required|min_length[3]|max_length[255]',
        'description' => 'required|min_length[10]',
        'icon'        => 'required',
    ];
}