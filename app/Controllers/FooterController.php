<?php

namespace App\Controllers;

use App\Models\FooterModel;
use CodeIgniter\Controller;

class FooterController extends Controller
{
    protected $footerModel;

    public function __construct()
    {
        // Inisialisasi model Footer
        $this->footerModel = new FooterModel();
    }

    public function index()
    {
        // Mengambil data footer
        $data['footer'] = $this->footerModel->getFooter();
        return view('admin/footer', $data);
    }

    public function update()
    {
        $validation = \Config\Services::validation();

        // Validasi input form
        if ($this->validate([
            'logo' => 'if_exist|uploaded[logo]|max_size[logo,1024]|ext_in[logo,jpg,jpeg,png]',
            'facebook_link' => 'valid_url',
            'twitter_link' => 'valid_url',
            'youtube_link' => 'valid_url',
            'instagram_link' => 'valid_url',
            'linkedin_link' => 'valid_url'
        ])) {
            // Ambil data footer saat ini
            $footer = $this->footerModel->getFooter();

            // Jika ada logo baru yang diupload
            $logoFile = $this->request->getFile('logo');
            if ($logoFile && $logoFile->isValid() && !$logoFile->hasMoved()) {
                // Pindahkan file logo baru ke folder assets/imgs
                $logoPath = $logoFile->getRandomName();
                $logoFile->move('assets/imgs/', $logoPath);

                // Hapus logo lama jika ada
                if ($footer['logo_path'] && file_exists($footer['logo_path'])) {
                    unlink($footer['logo_path']);
                }

                // Perbarui data logo
                $data['logo_path'] = 'assets/imgs/' . $logoPath;
            } else {
                // Jika tidak ada gambar baru, pertahankan gambar lama
                $data['logo_path'] = $footer['logo_path'];
            }

            // Perbarui data media sosial
            $data['facebook_link'] = $this->request->getPost('facebook_link');
            $data['twitter_link'] = $this->request->getPost('twitter_link');
            $data['youtube_link'] = $this->request->getPost('youtube_link');
            $data['instagram_link'] = $this->request->getPost('instagram_link');
            $data['linkedin_link'] = $this->request->getPost('linkedin_link');

            // Memperbarui data footer
            $this->footerModel->updateFooter($data);

            return redirect()->to('/admin/footer')->with('success', 'Footer berhasil diperbarui');
        } else {
            return redirect()->back()->withInput()->with('validation', $validation->getErrors());
        }
    }
}