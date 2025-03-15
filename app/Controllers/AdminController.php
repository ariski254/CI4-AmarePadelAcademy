<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function add()
    {
        return view('admin/add');
    }

    public function save()
    {
        // Ambil data yang dikirimkan melalui POST
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Hash password sebelum disimpan
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data admin baru
        $adminModel = new AdminModel();

        $data = [
            'username' => $username,
            'password' => $passwordHash,
        ];

        if ($adminModel->insert($data)) {
            session()->setFlashdata('success', 'Admin berhasil ditambahkan!');
        } else {
            session()->setFlashdata('error', 'Gagal menambahkan admin!');
        }

        return redirect()->to('/admin/add');
    }
}