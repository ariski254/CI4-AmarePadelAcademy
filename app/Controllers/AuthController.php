<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class AuthController extends BaseController
{
    public function index()
    {
        return view('admin/login/login');  // This is your login page
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $model = new AdminModel();
        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Login successful, store user info in session
            session()->set('user_id', $user['id']);
            session()->set('username', $user['username']);
            session()->set('isLoggedIn', true); // Session for logged-in user

            // Redirect to the admin dashboard (Dash::index)
            return redirect()->to('/admin');  // Dashboard page
        } else {
            // Login failed, show error message
            return redirect()->back()->with('error', 'Invalid login credentials');
        }
    }

    public function logout()
    {
        // Destroy the session and redirect to login page
        session()->destroy();
        return redirect()->to(base_url('login'));  // Redirect to login page
    }
}