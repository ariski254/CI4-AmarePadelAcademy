<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $adminModel = new AdminModel();

        // Validasi admin
        $admin = $adminModel->where('username', $username)->first();

        if ($admin && password_verify($password, $admin['password'])) {
            // Login berhasil, arahkan ke dashboard
            session()->set('isLoggedIn', true);
            session()->set('admin_id', $admin['id']);
            session()->set('username', $admin['username']);
            return redirect()->to('/admin');
        } else {
            // Login gagal
            return redirect()->back()->with('error', 'Username atau password salah.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}