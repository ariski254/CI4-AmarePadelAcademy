<?php

namespace App\Controllers;

use App\Models\MaterialModel;
use CodeIgniter\Controller;

class MaterialController extends Controller
{

    // Halaman admin untuk melihat dan mengelola materials
    public function admin()
    {
        $materialModel = new MaterialModel();
        // Ambil semua material
        $data['materials'] = $materialModel->getMaterials();
        return view('admin/materials', $data);
    }

    // Fungsi untuk menambah material
    public function create()
    {
        $materialModel = new MaterialModel();

        // Validasi input
        if (!$this->validate([
            'name' => 'required',
            'image' => 'uploaded[image]|max_size[image,1024]|is_image[image]'
        ])) {
            return redirect()->to('/admin/materials')->withInput();
        }

        // Mengelola upload gambar
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move('uploads/materials', $newName);

            // Menyiapkan data untuk insert
            $data = [
                'name' => $this->request->getPost('name'),
                'image_path' => 'uploads/materials/' . $newName
            ];

            // Menambah data material
            if ($materialModel->createMaterial($data)) {
                return redirect()->to('/admin/materials')->with('success', 'Material berhasil ditambahkan');
            } else {
                return redirect()->to('/admin/materials')->with('error', 'Terjadi kesalahan');
            }
        }
    }

    // Fungsi untuk mengedit material
    public function edit($id)
    {
        $materialModel = new MaterialModel();

        // Ambil data material berdasarkan id
        $data['material'] = $materialModel->find($id);

        if (!$data['material']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Material tidak ditemukan');
        }

        return view('admin/material_edit', $data);
    }

    // Fungsi untuk update material
    public function update($id)
    {
        $materialModel = new MaterialModel();

        // Validasi input
        if (!$this->validate([
            'name' => 'required',
            // Gambar adalah opsional, validasi hanya jika diupload
            'image' => 'if_exist|uploaded[image]|max_size[image,1024]|is_image[image]'
        ])) {
            return redirect()->to('/admin/materials/edit/' . $id)->withInput();
        }

        // Ambil data material lama
        $material = $materialModel->find($id);

        // Cek jika material tidak ditemukan
        if (!$material) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Material tidak ditemukan');
        }

        // Mengelola upload gambar
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Jika ada gambar baru, simpan gambar baru
            $newName = $image->getRandomName();
            $image->move('uploads/materials', $newName);

            // Hapus gambar lama jika ada
            if ($material['image_path'] && file_exists($material['image_path'])) {
                unlink($material['image_path']);
            }

            // Siapkan data untuk update termasuk gambar baru
            $data = [
                'name' => $this->request->getPost('name'),
                'image_path' => 'uploads/materials/' . $newName
            ];
        } else {
            // Jika tidak ada gambar baru, hanya update nama
            $data = [
                'name' => $this->request->getPost('name')
            ];
        }

        // Update material di database
        if ($materialModel->updateMaterial($id, $data)) {
            return redirect()->to('/admin/materials')->with(
                'success',
                'Material berhasil diperbarui'
            );
        } else {
            return redirect()->to('/admin/materials')->with('error', 'Terjadi kesalahan saat memperbarui material');
        }
    }



    // Fungsi untuk menghapus material
    public function delete($id)
    {
        $materialModel = new MaterialModel();

        // Hapus material
        if ($materialModel->deleteMaterial($id)) {
            return redirect()->to('/admin/materials')->with('success', 'Material berhasil dihapus');
        } else {
            return redirect()->to('/admin/materials')->with('error', 'Terjadi kesalahan');
        }
    }
}