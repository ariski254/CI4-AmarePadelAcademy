<?php

namespace App\Controllers;

use App\Models\ProgramModel;

class ProgramController extends BaseController
{
    public function index()
    {
        $model = new ProgramModel();

        // Get all programs
        $data['programs'] = $model->findAll();

        // Load the view for the front-end
        return view('index', $data);
    }

    public function admin()
    {
        $model = new ProgramModel();

        // Get all programs to display for the admin
        $data['programs'] = $model->findAll();

        // Load the admin view
        return view('admin/Programs', $data);
    }

    public function update($id)
    {
        $model = new ProgramModel();

        // Validate the input
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'title'       => 'required|min_length[3]|max_length[255]',
                'description' => 'required|min_length[10]',
                'icon'        => 'required',
            ];

            if ($this->validate($rules)) {
                $data = [
                    'title'       => $this->request->getPost('title'),
                    'description' => $this->request->getPost('description'),
                    'icon'        => $this->request->getPost('icon'),
                ];

                // Update the program in the database
                $model->update($id, $data);

                // Redirect back to admin page with a success message
                return redirect()->to('/admin/programs')->with('success', 'Program updated successfully');
            } else {
                // Validation failed, load the update form again with errors
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }
        }

        // If no post data, load the update form
        $data['program'] = $model->find($id);
        return view('admin/update_program', $data);
    }
}