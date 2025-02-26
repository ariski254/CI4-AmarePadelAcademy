<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProgramModel;
use App\Models\ProgramItemModel;
use App\Models\ProgramImageModel;

class Programs extends BaseController
{
    protected $programModel;
    protected $programItemModel;
    protected $programImageModel;

    public function __construct()
    {
        $this->programModel = new ProgramModel();
        $this->programItemModel = new ProgramItemModel();
        $this->programImageModel = new ProgramImageModel();
    }

    public function index()
    {
        $data = [
            'programs' => $this->programModel->findAll(),
            'program_items' => $this->programItemModel->findAll(),
            'program_images' => $this->programImageModel->findAll()
        ];

        return view('index', $data);
    }

    public function admin()
    {
        $data = [
            'programs' => $this->programModel->findAll(),
            'program_items' => $this->programItemModel->findAll(),
            'program_images' => $this->programImageModel->findAll()
        ];

        return view('admin/programs', $data);
    }

    public function updateProgram()
    {
        $id = $this->request->getPost('id');
        $this->programModel->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'category' => $this->request->getPost('category')
        ]);

        return redirect()->to('/admin/programs');
    }

    public function updateItem()
    {
        $id = $this->request->getPost('id');
        $this->programItemModel->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ]);

        return redirect()->to('/admin/programs');
    }

    public function updateImage()
    {
        $id = $this->request->getPost('id');
        $file = $this->request->getFile('image');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/programs/', $newName);

            $this->programImageModel->update($id, [
                'image_path' => 'uploads/programs/' . $newName
            ]);
        }

        return redirect()->to('/admin/programs');
    }

    public function createItem()
    {
        $this->programItemModel->save([
            'program_id' => $this->request->getPost('program_id'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ]);

        return redirect()->to('/admin/programs');
    }

    public function deleteItem($id)
    {
        $this->programItemModel->delete($id);
        return redirect()->to('/admin/programs');
    }
}