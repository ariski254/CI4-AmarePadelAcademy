<?php

namespace App\Controllers;

use App\Models\ProgramModel;
use CodeIgniter\Controller;

class ProgramController extends Controller
{

    public function admin()
    {
        // Admin page to edit the hero data
        $programData = $this->programModel->getPrograms();
        return view('admin/programs', ['programData' => $programData]);
    }

    // Halaman admin untuk mengedit program
    public function edit($id)
    {
        $programModel = new ProgramModel();

        // Ambil data program berdasarkan id
        $data['program'] = $programModel->find($id);

        if (!$data['program']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Program tidak ditemukan');
        }

        return view('admin/programs', $data);
    }

    // Fungsi untuk update program
    public function update($id)
    {
        $programModel = new ProgramModel();

        // Validasi input
        $validation = \Config\Services::validation();

        if (!$this->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'uploaded[image]|max_size[image,1024]|is_image[image]'
        ])) {
            return redirect()->to('/admin/programs/edit/' . $id)->withInput();
        }

        // Mengelola upload gambar
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move('uploads/programs', $newName);

            // Menyiapkan data untuk update
            $data = [
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'image_path' => 'uploads/programs/' . $newName
            ];
        } else {
            // Tanpa mengganti gambar
            $data = [
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description')
            ];
        }

        // Update data program
        if ($programModel->updateProgram($id, $data)) {
            return redirect()->to('/admin/programs/edit/' . $id)->with('success', 'Program berhasil diperbarui');
        } else {
            return redirect()->to('/admin/programs/edit/' . $id)->with('error', 'Terjadi kesalahan');
        }
    }
}