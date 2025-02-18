<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dash extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }
}