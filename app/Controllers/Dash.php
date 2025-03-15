<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dash extends Controller
{
    public function index()
    {
        // Your dashboard logic here
        return view('admin/index'); // Change this to your actual dashboard view
    }
}