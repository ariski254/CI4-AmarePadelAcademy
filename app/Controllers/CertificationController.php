<?php

namespace App\Controllers;

use App\Models\CertificationModel;

class CertificationController extends BaseController
{
    public function admin()
    {
        $model = new CertificationModel();
        $data['certification'] = $model->getCertification();

        return view('admin/certification', $data); // Display the edit form
    }

    public function update()
    {
        $model = new CertificationModel();

        // Get data from the POST request
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];

        // Update the certification data
        $model->updateCertification($data);

        return redirect()->to('admin/certification')->with('success', 'Certification updated successfully');
    }
}