<?php

namespace App\Controllers;

use App\Models\KegiatanModel;
use App\Models\KegiatanImageModel;
use CodeIgniter\Controller;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatanModel = new KegiatanModel();
        $imageModel = new KegiatanImageModel();

        $kegiatan = $kegiatanModel->findAll();
        $images = [];

        foreach ($kegiatan as $item) {
            $images[$item->id] = $imageModel->where('kegiatan_id', $item->id)->findAll();
        }

        return view('admin/kegiatan', [
            'kegiatan' => $kegiatan,
            'images' => $images
        ]);
    }

    public function create()
    {
        return view('admin/kegiatan_create');
    }

    public function store()
    {
        $kegiatanModel = new KegiatanModel();
        $imageModel = new KegiatanImageModel();

        if (!$this->validate([
            'title' => 'required|min_length[3]',
            'date' => 'required|valid_date',
            'description' => 'required|min_length[5]',
            'images' => 'uploaded[images.0]|is_image[images.0]' // validasi minimal 1 gambar
        ])) {
            return redirect()->back()->withInput()->with('error', 'Validasi gagal!');
        }

        // Simpan kegiatan
        $kegiatanId = $kegiatanModel->insert([
            'title' => $this->request->getPost('title'),
            'date' => $this->request->getPost('date'),
            'description' => $this->request->getPost('description')
        ], true);

        // Simpan gambar-gambar
        $files = $this->request->getFiles()['images'];
        foreach ($files as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $fileName = $file->getRandomName();
                $file->move('assets/imgs/kegiatan/', $fileName);
                $imageModel->save([
                    'kegiatan_id' => $kegiatanId,
                    'image' => $fileName
                ]);
            }
        }

        return redirect()->to('/admin/kegiatan')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kegiatanModel = new KegiatanModel();
        $imageModel = new KegiatanImageModel();

        $data['kegiatan'] = $kegiatanModel->find($id);
        $data['images'] = $imageModel->where('kegiatan_id', $id)->findAll();

        return view('admin/kegiatan_edit', $data);
    }

    public function update($id)
    {
        $kegiatanModel = new KegiatanModel();
        $imageModel = new KegiatanImageModel();

        if (!$this->validate([
            'title' => 'required|min_length[3]',
            'date' => 'required|valid_date',
            'description' => 'required|min_length[5]',
        ])) {
            return redirect()->back()->withInput();
        }

        $kegiatanModel->update($id, [
            'title' => $this->request->getPost('title'),
            'date' => $this->request->getPost('date'),
            'description' => $this->request->getPost('description')
        ]);

        // Cek jika ada gambar baru diupload
        $files = $this->request->getFiles()['images'] ?? [];
        foreach ($files as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $fileName = $file->getRandomName();
                $file->move('assets/imgs/kegiatan/', $fileName);

                $imageModel->save([
                    'kegiatan_id' => $id,
                    'image' => $fileName
                ]);
            }
        }

        return redirect()->to('/admin/kegiatan')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    public function delete($id)
    {
        $kegiatanModel = new KegiatanModel();
        $imageModel = new KegiatanImageModel();

        $images = $imageModel->where('kegiatan_id', $id)->findAll();
        foreach ($images as $img) {
            if ($img->image && file_exists('assets/imgs/kegiatan/' . $img->image)) {
                unlink('assets/imgs/kegiatan/' . $img->image);
            }
        }

        $imageModel->where('kegiatan_id', $id)->delete();
        $kegiatanModel->delete($id);

        return redirect()->to('/admin/kegiatan')->with('success', 'Kegiatan berhasil dihapus.');
    }

    public function deleteImage($imageId)
    {
        $imageModel = new KegiatanImageModel();
        $image = $imageModel->find($imageId);

        if ($image && file_exists('assets/imgs/kegiatan/' . $image->image)) {
            unlink('assets/imgs/kegiatan/' . $image->image);
        }

        $imageModel->delete($imageId);

        return redirect()->back()->with('success', 'Gambar berhasil dihapus.');
    }

    public function all()
    {
        $kegiatanModel = new \App\Models\KegiatanModel();
        $imageModel = new \App\Models\KegiatanImageModel();
        $footerModel = new \App\Models\FooterModel();

        $kegiatan = $kegiatanModel->findAll();
        $images = [];

        foreach ($kegiatan as $item) {
            $images[$item->id] = $imageModel->where('kegiatan_id', $item->id)->findAll();
        }

        $footer = $footerModel->getFooter();

        return view('pages/all_portfolio', [
            'kegiatan' => $kegiatan,
            'images' => $images,
            'footer' => $footer, // tambahkan ini
        ]);
    }
}