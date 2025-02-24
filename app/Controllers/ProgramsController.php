<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProgramModel;
use App\Models\ProgramImageModel;

class ProgramsController extends Controller
{
    protected $programModel;
    protected $programImageModel;

    public function __construct()
    {
        $this->programModel = new ProgramModel();
        $this->programImageModel = new ProgramImageModel();
    }

    public function index()
    {
        $data['programs'] = $this->programModel->getPrograms();
        return view('index', $data);
    }

    public function adminPrograms()
    {
        $data['programs'] = $this->programModel->getPrograms();
        return view('admin/programs', $data);
    }

    public function editProgram($id)
    {
        $data['program'] = $this->programModel->getProgram($id);
        $data['program_image'] = $this->programImageModel->getImageByProgramId($id);
        return view('admin/edit_program', $data);
    }

    public function updateProgram($id)
    {
        $programData = $this->request->getPost();

        // Update program content
        $this->programModel->updateProgram($id, [
            'title' => $programData['title'],
            'description' => $programData['description']
        ]);

        // If there's a new image, upload it
        if ($this->request->getFile('image')) {
            $image = $this->request->getFile('image');
            $imagePath = $image->store('program_images');

            // Update image
            $this->programImageModel->updateImage($id, [
                'image_path' => $imagePath
            ]);
        }

        return redirect()->to('/admin/programs');
    }
}