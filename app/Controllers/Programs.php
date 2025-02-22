<?php

namespace App\Controllers;

use App\Models\ProgramImageModel;
use App\Models\ProgramModel;
use CodeIgniter\Controller;

class Programs extends Controller
{
    public function index()
    {
        $imageModel = new ProgramImageModel();
        $contentModel = new ProgramModel();

        $data['image'] = $imageModel->first();
        $data['contents'] = $contentModel->findAll();

        return view('index', $data);
    }

    public function admin()
    {
        $imageModel = new ProgramImageModel();
        $contentModel = new ProgramModel();

        $data['image'] = $imageModel->first();
        $data['contents'] = $contentModel->findAll();

        return view('admin/programs', $data);
    }

    public function updateImage()
    {
        $imageModel = new ProgramImageModel();
        $file = $this->request->getFile('image');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/', $newName);

            $imageModel->update(1, ['image_path' => 'uploads/' . $newName]);
            return redirect()->to('/admin/programs')->with('success', 'Image Updated Successfully');
        }
    }

    public function updateContent()
    {
        $contentModel = new ProgramModel();
        $id = $this->request->getPost('id');

        $data = [
            'title1' => $this->request->getPost('title1'),
            'title2' => $this->request->getPost('title2'),
            'title3' => $this->request->getPost('title3'),
            'title4' => $this->request->getPost('title4'),
            'title5' => $this->request->getPost('title5'),
            'title6' => $this->request->getPost('title6'),
            'subtitle1' => $this->request->getPost('subtitle1'),
            'subtitle2' => $this->request->getPost('subtitle2'),
            'subtitle3' => $this->request->getPost('subtitle3'),
            'subtitle4' => $this->request->getPost('subtitle4'),
            'subtitle5' => $this->request->getPost('subtitle5'),
            'subtitle6' => $this->request->getPost('subtitle6'),
            'description1' => $this->request->getPost('description1'),
            'description2' => $this->request->getPost('description2'),
            'description3' => $this->request->getPost('description3'),
            'description4' => $this->request->getPost('description4'),
            'description5' => $this->request->getPost('description5'),
            'description6' => $this->request->getPost('description6'),
        ];

        $contentModel->update($id, $data);
        return redirect()->to('/admin/programs')->with('success', 'Content Updated Successfully');
    }
}