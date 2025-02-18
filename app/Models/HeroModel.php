<?php

namespace App\Models;

use CodeIgniter\Model;

class HeroModel extends Model
{
    protected $table = 'hero';
    protected $primaryKey = 'id';
    protected $allowedFields = ['welcome_text', 'main_title', 'sub_title', 'video_file', 'poster_image'];
    protected $useTimestamps = true;

    public function getHero()
    {
        return $this->findAll();
    }

    public function updateHero($id, $data)
    {
        return $this->update($id, $data);
    }
}