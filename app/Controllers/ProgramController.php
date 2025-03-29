<?php

namespace App\Controllers;

use App\Models\ProgramModel;
use CodeIgniter\Controller;

class ProgramController extends Controller
{
    protected $programModel;

    public function __construct()
    {
        $this->programModel = new ProgramModel();
    }

    // Method to display the list of programs (this is your 'index' method)
    public function index()
    {
        // Get all programs from the ProgramModel
        $programs = $this->programModel->findAll();

        // Pass the programs data to the view
        return view('admin/programs', ['programs' => $programs]);
    }

    // Show form for updating a program
    public function update($id)
    {
        $program = $this->programModel->find($id);

        if (!$program) {
            return redirect()->to('/admin/programs')->with('error', 'Program not found');
        }

        return view('admin/update_program', ['program' => $program]);
    }

    // Handle the update request
    public function updateProgram($id)
    {
        $program = $this->programModel->find($id);

        if (!$program) {
            return redirect()->to('/admin/programs')->with('error', 'Program not found');
        }

        if ($this->validate([
            'title'       => 'required|min_length[3]|max_length[255]',
            'description' => 'required|min_length[10]',
            'icon'        => 'required'
        ])) {
            // Update program
            $this->programModel->update($id, [
                'title'       => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'icon'        => $this->request->getPost('icon'),
            ]);

            return redirect()->to('/admin/programs')->with('success', 'Program updated successfully!');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }
}
