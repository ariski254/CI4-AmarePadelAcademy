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
            'logo' => 'uploaded[logo]|max_size[logo,1024]|ext_in[logo,jpg,jpeg,png]',
            'facebook_link' => 'valid_url',
            'twitter_link' => 'valid_url',
            'youtube_link' => 'valid_url',
            'instagram_link' => 'valid_url',
            'linkedin_link' => 'valid_url'
        ])) {
            // Proses upload logo
            $logoFile = $this->request->getFile('logo');
            $logoPath = $logoFile->getName();
            $logoFile->move('assets/imgs/');

            // Mengambil data dari form
            $data = [
                'logo_path' => 'assets/imgs/' . $logoPath,
                'facebook_link' => $this->request->getPost('facebook_link'),
                'twitter_link' => $this->request->getPost('twitter_link'),
                'youtube_link' => $this->request->getPost('youtube_link'),
                'instagram_link' => $this->request->getPost('instagram_link'),
                'linkedin_link' => $this->request->getPost('linkedin_link')
            ];

            // Memperbarui data footer
            $this->footerModel->updateFooter($data);

            return redirect()->to('/admin/footer');
        } else {
            return redirect()->back()->withInput()->with('validation', $validation->getErrors());
        }
    }
}