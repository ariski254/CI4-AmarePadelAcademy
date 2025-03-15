<?php

namespace App\Controllers;

use App\Models\SponsorModel;
use CodeIgniter\Controller;

class SponsorController extends Controller
{
    public function admin()
    {
        $model = new SponsorModel();
        $data['sponsors'] = $model->getAllSponsors();
        return view('admin/sponsor', $data);
    }

    public function create()
    {
        return view('admin/create_sponsor');
    }

    public function store()
    {
        $model = new SponsorModel();
        $validation = \Config\Services::validation();

        if ($this->validate([
            'logo_name' => 'required',
            'logo_file' => 'uploaded[logo_file]|max_size[logo_file,1024]|ext_in[logo_file,jpg,jpeg,png]'
        ])) {
            $file = $this->request->getFile('logo_file');
            $filePath = 'assets/logos/' . $file->getName();
            $file->move('assets/logos/');

            $data = [
                'logo_name' => $this->request->getPost('logo_name'),
                'logo_path' => $filePath
            ];

            $model->createSponsor($data);
            return redirect()->to('/admin/sponsor');
        } else {
            return redirect()->back()->withInput()->with('validation', $validation->getErrors());
        }
    }

    public function edit($id)
    {
        $model = new SponsorModel();
        $data['sponsor'] = $model->getSponsorById($id);
        return view('admin/edit_sponsor', $data);
    }

    public function update($id)
    {
        $model = new SponsorModel();
        $validation = \Config\Services::validation();

        // Validasi input
        if ($this->validate([
            'logo_name' => 'required',
            // Hanya validasi logo_file jika diupload
            'logo_file' => 'if_exist|uploaded[logo_file]|max_size[logo_file,1024]|ext_in[logo_file,jpg,jpeg,png]'
        ])) {
            // Ambil data sponsor yang sedang diedit
            $sponsor = $model->find($id);

            // Ambil file gambar yang diunggah
            $file = $this->request->getFile('logo_file');
            $filePath = $sponsor['logo_path'];  // Gunakan gambar lama jika tidak ada file baru

            // Jika ada gambar baru yang diunggah
            if ($file && $file->isValid() && !$file->hasMoved()) {
                // Tentukan path untuk gambar baru
                $filePath = 'assets/logos/' . $file->getName();
                $file->move('assets/logos/');

                // Hapus gambar lama jika ada
                if ($sponsor['logo_path'] && file_exists($sponsor['logo_path'])) {
                    unlink($sponsor['logo_path']);
                }
            }

            // Siapkan data untuk update
            $data = [
                'logo_name' => $this->request->getPost('logo_name'),
                'logo_path' => $filePath // Gunakan gambar lama atau gambar baru
            ];

            // Update sponsor
            $model->updateSponsor($id, $data);
            return redirect()->to('/admin/sponsor');
        } else {
            // Jika validasi gagal, kembalikan dengan input lama
            return redirect()->back()->withInput()->with('validation', $validation->getErrors());
        }
    }


    public function delete($id)
    {
        $model = new SponsorModel();
        $model->deleteSponsor($id);
        return redirect()->to('/admin/sponsor');
    }
}