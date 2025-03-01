<?php

namespace App\Controllers;

use App\Models\ProgramModel;

class Programs extends BaseController
{
    // Show the programs for the front-end
    public function index()
    {
        $programModel = new ProgramModel();
        $programs = $programModel->findAll(); // Get all programs from the database

        return view('index', ['programs' => $programs]); // Pass programs to the index view
    }

    // Show the program admin view for editing programs
    public function admin()
    {
        $programModel = new ProgramModel();
        $programs = $programModel->findAll(); // Get all programs from the database

        return view('admin/programs', ['programs' => $programs]); // Pass programs to the admin view
    }

    // Update program data
    public function update($id)
    {
        $programModel = new ProgramModel();
        $data = $this->request->getPost(); // Get updated data from the form

        // Update program details in the database
        $programModel->update($id, [
            'title' => $data['title'],
            'description' => $data['description'],
            'content' => $data['content'],
            'program_type' => $data['program_type'],
        ]);

        // Redirect back to the admin page after update
        return redirect()->to('/admin/programs');
    }
}