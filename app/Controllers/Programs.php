<?php

namespace App\Controllers;

use App\Models\ProgramModel;
use App\Models\ProgramImageModel;
use CodeIgniter\Controller;

class Programs extends Controller
{
    public function index()
    {
        $programModel = new ProgramModel();
        $imageModel = new ProgramImageModel();

        $data['programs'] = $programModel->findAll();
        $data['image'] = $imageModel->first();

        return view('index', $data);
    }

    public function admin()
    {
        $programModel = new ProgramModel();
        $imageModel = new ProgramImageModel();

        $data['programs'] = $programModel->findAll();
        $data['image'] = $imageModel->first();

        return view('admin/programs', $data);
    }

    public function updateContent()
    {
        $programModel = new ProgramModel();
        $id = $this->request->getPost('id');

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'category' => $this->request->getPost('category')
        ];

        $programModel->update($id, $data);
        return redirect()->to('/admin/programs');
    }

    public function updateImage()
    {
        $imageModel = new ProgramImageModel();
        $file = $this->request->getFile('image');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/', $newName);

            $imageModel->update(1, ['image' => $newName]);
        }

        return redirect()->to('/admin/programs');
    }
}