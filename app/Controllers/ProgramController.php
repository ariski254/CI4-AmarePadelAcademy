<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProgramModel;

class ProgramController extends BaseController
{
    public function index()
    {
        $programModel = new ProgramModel();
        $data['programs'] = $programModel->findAll();

        return view('admin/programs', $data);
    }

    public function create()
    {
        return view('admin/programs_create');
    }

    public function store()
    {
        $programModel = new ProgramModel();
        $image = $this->request->getFile('image');

        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/programs/', $imageName);
        } else {
            $imageName = null;
        }

        $programModel->insert([
            'category'   => $this->request->getPost('category'),
            'title'      => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image'      => $imageName,
        ]);

        return redirect()->to('/admin/programs')->with('message', 'Program added successfully.');
    }

    public function edit($id)
    {
        $programModel = new ProgramModel();
        $data['program'] = $programModel->find($id);

        return view('admin/programs_edit', $data);
    }

    public function update($id)
    {
        $programModel = new ProgramModel();
        $program = $programModel->find($id);
        $image = $this->request->getFile('image');

        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/programs/', $imageName);
            if ($program['image'] && file_exists('uploads/programs/' . $program['image'])) {
                unlink('uploads/programs/' . $program['image']);
            }
        } else {
            $imageName = $program['image'];
        }

        $programModel->update($id, [
            'category'   => $this->request->getPost('category'),
            'title'      => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image'      => $imageName,
        ]);

        return redirect()->to('/admin/programs')->with('message', 'Program updated successfully.');
    }

    public function delete($id)
    {
        $programModel = new ProgramModel();
        $program = $programModel->find($id);

        if ($program['image'] && file_exists('uploads/programs/' . $program['image'])) {
            unlink('uploads/programs/' . $program['image']);
        }

        $programModel->delete($id);

        return redirect()->to('/admin/programs')->with('message', 'Program deleted successfully.');
    }
}