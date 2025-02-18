<?php

namespace App\Models;

use CodeIgniter\Model;

class GoalsModel extends Model
{
    protected $table      = 'goals';
    protected $primaryKey = 'id';

    protected $allowedFields = ['vision', 'mission', 'key_success_factor', 'services'];

    // Get the first record from the database (assuming only one entry for goals)
    public function getGoals()
    {
        return $this->first(); // Get the first (and only) row
    }

    // Update the goals data (update by id)
    public function updateGoals($goalsData)
    {
        return $this->update(1, $goalsData); // Update the row with id=1
    }
}