<?php

namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\Controller;

class ContactController extends Controller
{
    public function index()
    {
        // Load model
        $model = new ContactModel();

        // Ambil data dari database (pastikan hanya 1 data yang ada)
        $data['contact'] = $model->find(1);

        // Kirim data ke view
        return view('admin/contact', $data);  // Passing 'contact' to the view
    }

    public function update()
    {
        // Ambil data yang dikirimkan lewat form
        $input = $this->request->getPost();

        // Validasi data
        if (!$this->validate([
            'contact_description' => 'required|string',
            'contact_address'     => 'required|string',
            'contact_phone'       => 'required|string',
            'contact_email'       => 'required|valid_email',
            'contact_map_url'     => 'required|valid_url',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Load model
        $model = new ContactModel();

        // Update data berdasarkan ID
        $model->update(1, [
            'contact_description' => $input['contact_description'],
            'contact_address'     => $input['contact_address'],
            'contact_phone'       => $input['contact_phone'],
            'contact_email'       => $input['contact_email'],
            'contact_map_url'     => $input['contact_map_url'],
        ]);

        // Redirect ke halaman admin setelah update
        return redirect()->to('/admin/contact')->with('success', 'Data berhasil diupdate');
    }
}
