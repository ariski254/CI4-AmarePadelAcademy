<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramModel extends Model
{
    protected $table = 'programs';  // Table name
    protected $primaryKey = 'id';   // Primary key
    protected $allowedFields = [
        'title1',
        'title2',
        'title3',
        'title4',
        'title5',
        'title6',
        'subtitle1',
        'subtitle2',
        'subtitle3',
        'subtitle4',
        'subtitle5',
        'subtitle6',
        'description1',
        'description2',
        'description3',
        'description4',
        'description5',
        'description6',
        'program_type'   // Assuming this field exists in your table
    ];  // Allowed fields for inserts or updates

    protected $useTimestamps = true;  // Automatically manage created_at and updated_at fields
}