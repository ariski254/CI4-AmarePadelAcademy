<?php

namespace App\Controllers;

use App\Models\HeroModel;
use CodeIgniter\Controller;


class HeroController extends Controller
{
    protected $heroModel;

    public function __construct()
    {
        $this->heroModel = new HeroModel();
    }

    public function admin()
    {
        // Admin page to edit the hero data
        $heroData = $this->heroModel->getHero();
        return view('admin/hero', ['heroData' => $heroData]);
    }

    public function updateHero()
    {
        // Update data after form submission
        $id = $this->request->getPost('id');
        $data = [
            'welcome_text' => $this->request->getPost('welcome_text'),
            'main_title' => $this->request->getPost('main_title'),
            'sub_title' => $this->request->getPost('sub_title'),
            'video_file' => $this->uploadFile('video_file'),
            'poster_image' => $this->uploadFile('poster_image')
        ];

        $this->heroModel->updateHero($id, $data);
        return redirect()->to('/admin/hero');
    }

    private function uploadFile($fileName)
    {
        $file = $this->request->getFile($fileName);

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/', $newName);
            return 'uploads/' . $newName;
        }

        return null; // If no file uploaded, return null
    }
}