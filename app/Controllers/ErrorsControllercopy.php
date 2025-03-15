<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ErrorsControllercopy extends Controller
{
    public function show404($slug = null)
    {
        // Mengecek jika ada slug atau URL tambahan yang tidak diinginkan
        if ($slug && preg_match('/[a-zA-Z0-9]/', $slug)) {
            // Menampilkan halaman error 404 kustom
            return view('errors/html/error404copy');
        }

        // Menampilkan halaman error 404 default jika tidak ada parameter
        return view('errors/html/error404copy');
    }
}