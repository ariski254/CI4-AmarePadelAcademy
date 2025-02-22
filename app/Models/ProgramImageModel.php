<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramImageModel extends Model
{
    protected $table = 'program_images';   // Table name
    protected $primaryKey = 'id';          // Primary key of the table
    protected $allowedFields = ['image_path'];  // Allowed fields to update or insert into the table
}