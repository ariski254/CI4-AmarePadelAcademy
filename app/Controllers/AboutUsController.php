<?php

namespace App\Controllers;

use App\Models\AboutUsModel;
use CodeIgniter\Controller;

class AboutUsController extends Controller
{
    protected $aboutUsModel;

    public function __construct()
    {
        $this->aboutUsModel = new AboutUsModel();
    }



    public function admin()
    {
        // Fetch "About Us" data for the admin page
        $aboutUsData = $this->aboutUsModel->getAboutUs();

        // Pass the data to the admin view
        return view('admin/about_us', ['aboutUsData' => $aboutUsData]);
    }

    public function updateAboutUs()
    {
        // Validate and get form data
        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'description' => $this->request->getPost('description'),
            'image' => $this->uploadImage('image') // Handle image upload
        ];

        // Update the data in the database
        $this->aboutUsModel->updateAboutUs($id, $data);

        // Redirect back to the admin page
        return redirect()->to('/admin/about_us');
    }

    private function uploadImage($fieldName)
    {
        $file = $this->request->getFile($fieldName);

        // Check if the file is valid and not moved
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/about_us', $newName);
            return 'uploads/about_us/' . $newName;
        }

        return null; // No file uploaded
    }
}