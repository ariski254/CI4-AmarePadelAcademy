<?php

namespace App\Models;

use CodeIgniter\Model;

class FooterModel extends Model
{
    protected $table = 'footer';
    protected $primaryKey = 'id';
    protected $allowedFields = ['logo_path', 'facebook_link', 'twitter_link', 'youtube_link', 'instagram_link', 'linkedin_link'];
    protected $useTimestamps = true;

    public function getFooter()
    {
        // Mengambil data footer pertama (asumsi hanya ada satu baris data footer)
        return $this->first();
    }

    public function updateFooter($data)
    {
        // Memperbarui data footer
        return $this->update(1, $data);  // Update baris dengan id = 1
    }
}