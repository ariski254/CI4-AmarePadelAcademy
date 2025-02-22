<?php

namespace App\Controllers;

use App\Models\SponsorModel;
use CodeIgniter\Controller;

class SponsorController extends Controller
{
    public function admin()
    {
        $model = new SponsorModel();
        $data['sponsors'] = $model->getAllSponsors();
        return view('admin/sponsor', $data);
    }

    public function create()
    {
        return view('admin/create_sponsor');
    }

    public function store()
    {
        $model = new SponsorModel();
        $validation = \Config\Services::validation();

        if ($this->validate([
            'logo_name' => 'required',
            'logo_file' => 'uploaded[logo_file]|max_size[logo_file,1024]|ext_in[logo_file,jpg,jpeg,png]'
        ])) {
            $file = $this->request->getFile('logo_file');
            $filePath = 'assets/logos/' . $file->getName();
            $file->move('assets/logos/');

            $data = [
                'logo_name' => $this->request->getPost('logo_name'),
                'logo_path' => $filePath
            ];

            $model->createSponsor($data);
            return redirect()->to('/admin/sponsor');
        } else {
            return redirect()->back()->withInput()->with('validation', $validation->getErrors());
        }
    }

    public function edit($id)
    {
        $model = new SponsorModel();
        $data['sponsor'] = $model->getSponsorById($id);
        return view('admin/edit_sponsor', $data);
    }

    public function update($id)
    {
        $model = new SponsorModel();
        $validation = \Config\Services::validation();

        if ($this->validate([
            'logo_name' => 'required',
            'logo_file' => 'uploaded[logo_file]|max_size[logo_file,1024]|ext_in[logo_file,jpg,jpeg,png]'
        ])) {
            $file = $this->request->getFile('logo_file');
            $filePath = 'assets/logos/' . $file->getName();
            $file->move('assets/logos/');

            $data = [
                'logo_name' => $this->request->getPost('logo_name'),
                'logo_path' => $filePath
            ];

            $model->updateSponsor($id, $data);
            return redirect()->to('/admin/sponsor');
        } else {
            return redirect()->back()->withInput()->with('validation', $validation->getErrors());
        }
    }

    public function delete($id)
    {
        $model = new SponsorModel();
        $model->deleteSponsor($id);
        return redirect()->to('/admin/sponsor');
    }
}