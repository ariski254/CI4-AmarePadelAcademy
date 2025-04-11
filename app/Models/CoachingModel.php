<?php

namespace App\Models;

use CodeIgniter\Model;

class CoachingModel extends Model
{
    protected $table = 'coaching_sessions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'date', 'description', 'created_at'];
}