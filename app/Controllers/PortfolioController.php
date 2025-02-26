<?php

namespace App\Controllers;

use App\Models\PortfolioModel;
use CodeIgniter\Controller;

class PortfolioController extends Controller
{
    public function create()
    {
        $portfolioModel = new PortfolioModel();
        $data['portfolios'] = $portfolioModel->findAll();
        return view('admin/portfolio', $data);
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
        // Corrected to object access
        $data['portfolio'] = $portfolioModel->find($id); // The result of find() is an object

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
            // Debugging: Check if validation fails and print the errors
            echo '<pre>';
            print_r($this->validator->getErrors()); // This will show validation error messages
            echo '</pre>';

            return redirect()->to('/admin/portfolio/' . $id . '/edit')->withInput();  // Return to the edit form with input data
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
            if ($portfolio && $portfolio->image) {  // Ensure object property access
                unlink('assets/imgs/portfolio/' . $portfolio->image);
            }
            $imagePath = $image->getRandomName();
            $image->move('assets/imgs/portfolio/', $imagePath);
            $data['image'] = $imagePath;
        }

        // Update database
        if ($portfolioModel->update($id, $data)) {
            // Successfully updated, redirect to portfolio list
            return redirect()->to('/admin/portfolio');
        } else {
            // Debugging: if update fails, show an error
            echo "Failed to update the portfolio.";
            echo "<br>";
            print_r($data);
            exit;
        }
    }


    public function delete($id)
    {
        $portfolioModel = new PortfolioModel();
        $portfolio = $portfolioModel->find($id);

        // Check if the portfolio exists
        if (!$portfolio) {
            return redirect()->to('/admin/portfolio')->with('error', 'Portfolio item not found.');
        }

        // Hapus gambar dari folder
        if ($portfolio->image) {  // Correct object property access
            unlink('assets/imgs/portfolio/' . $portfolio->image);
        }

        // Hapus data dari database
        $portfolioModel->delete($id);

        return redirect()->to('/admin/portfolio');
    }
}