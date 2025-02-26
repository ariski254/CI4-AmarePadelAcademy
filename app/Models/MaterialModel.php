<?php

namespace App\Models;

use CodeIgniter\Model;

class MaterialModel extends Model
{
    protected $table = 'materials';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'image_path'];
    protected $useTimestamps = true;

    // Mendapatkan semua data material
    public function getMaterials()
    {
        return $this->findAll();
    }

    // Fungsi untuk menambah data material
    public function createMaterial($data)
    {
        return $this->save($data);
    }

    // Fungsi untuk update data material
    public function updateMaterial($id, $data)
    {
        return $this->update($id, $data); // Menggunakan method 'update' dari CodeIgniter Model untuk memperbarui
    }


    // Fungsi untuk delete data material
    public function deleteMaterial($id)
    {
        return $this->delete($id);
    }
}