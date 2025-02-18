<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model
{
    protected $table      = 'portfolio';
    protected $primaryKey = 'id';
    protected $allowedFields = ['image', 'title', 'description'];
    protected $useTimestamps = true;
}