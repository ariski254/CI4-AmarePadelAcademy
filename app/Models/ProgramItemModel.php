<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramItemModel extends Model
{
    protected $table = 'program_items';
    protected $primaryKey = 'id';
    protected $allowedFields = ['program_id', 'title', 'description'];
}