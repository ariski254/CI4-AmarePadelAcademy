<?php

namespace App\Controllers;

use App\Models\ProgramModel;
use App\Models\ProgramItemModel;
use CodeIgniter\Controller;

class ProgramController extends Controller
{
    public function index()
    {
        $programModel = new ProgramModel();
        $programItemModel = new ProgramItemModel();

        $data['programs'] = $programModel->getPrograms();

        // Fetch items for each program
        foreach ($data['programs'] as $key => $program) {
            $data['programs'][$key]['items'] = $programItemModel->getItemsByProgram($program['id']);
        }

        return view('index', $data);
    }

    public function admin()
    {
        $programModel = new ProgramModel();
        $programItemModel = new ProgramItemModel();

        // Fetch all programs and their items
        $data['programs'] = $programModel->getPrograms();
        $data['program_items'] = [];

        foreach ($data['programs'] as $program) {
            $data['program_items'][$program['id']] = $programItemModel->getItemsByProgram($program['id']);
        }

        return view('admin/programs', $data);
    }

    public function update($id)
    {
        $programModel = new ProgramModel();
        $programItemModel = new ProgramItemModel();

        if ($this->request->getMethod() === 'post') {
            $image = $this->request->getFile('image');
            $imagePath = '';
            if ($image->isValid()) {
                $imagePath = $image->store(); // Save image to a folder
            }

            $programData = [
                'program_type' => $this->request->getPost('program_type'),
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'image' => $imagePath,
                'content' => $this->request->getPost('content'),
            ];

            $programModel->update($id, $programData);

            // Handle updating program items
            $itemData = $this->request->getPost('program_items');
            foreach ($itemData as $item) {
                $programItemModel->update($item['id'], $item);
            }

            return redirect()->to('/admin/programs');
        }

        // If GET method, fetch data for editing
        $data['program'] = $programModel->getProgramById($id);
        $data['program_items'] = $programItemModel->getItemsByProgram($id);

        return view('admin/edit_program', $data);
    }
}