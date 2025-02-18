<?php

namespace App\Controllers;

use App\Models\PortfolioModel;
use CodeIgniter\Controller;

class PortfolioController extends Controller
{

    public function create()
    {
        return view('admin/portfolio');
    }

    public function store()
    {
        $portfolioModel = new PortfolioModel();

        // Validasi input
        if (!$this->validate([
            'image' => 'uploaded[image]|is_image[image]',
            'title' => 'required|min_length[3]',
            'description' => 'required|min_length[5]',
        ])) {
            return redirect()->to('/admin/portfolio')->withInput();
        }

        // Proses upload file
        $image = $this->request->getFile('image');
        $imagePath = $image->getRandomName();
        $image->move('assets/imgs/portfolio/', $imagePath);

        // Simpan data ke database
        $portfolioModel->save([
            'image' => $imagePath,
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ]);

        return redirect()->to('/admin/portfolio');
    }

    public function edit($id)
    {
        $portfolioModel = new PortfolioModel();
        $data['portfolio'] = $portfolioModel->find($id);

        return view('admin/portfolio_edit', $data);
    }

    public function update($id)
    {
        $portfolioModel = new PortfolioModel();

        // Validasi input
        if (!$this->validate([
            'title' => 'required|min_length[3]',
            'description' => 'required|min_length[5]',
        ])) {
            return redirect()->to('/admin/portfolio/' . $id . '/edit')->withInput();
        }

        // Update data portfolio
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ];

        // Jika ada gambar baru yang diupload
        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            // Hapus gambar lama jika ada
            $portfolio = $portfolioModel->find($id);
            if ($portfolio['image']) {
                unlink('assets/imgs/portfolio/' . $portfolio['image']);
            }
            $imagePath = $image->getRandomName();
            $image->move('assets/imgs/portfolio/', $imagePath);
            $data['image'] = $imagePath;
        }

        // Update database
        $portfolioModel->update($id, $data);

        return redirect()->to('/admin/portfolio');
    }

    public function delete($id)
    {
        $portfolioModel = new PortfolioModel();
        $portfolio = $portfolioModel->find($id);

        // Hapus gambar dari folder
        if ($portfolio['image']) {
            unlink('assets/imgs/portfolio/' . $portfolio['image']);
        }

        // Hapus data dari database
        $portfolioModel->delete($id);

        return redirect()->to('/admin/portfolio');
    }
}