<?php

namespace App\Controllers;

use App\Models\CoachingModel;
use App\Models\CoachingImageModel;

class CoachingController extends BaseController
{
    // Halaman publik (user)
    public function index()
    {
        $coachingModel = new CoachingModel();
        $imageModel = new CoachingImageModel();
        $footerModel  = new \App\Models\FooterModel();

        $sessions = $coachingModel->findAll();
        $images = [];

        foreach ($sessions as $session) {
            $images[$session['id']] = $imageModel->where('coaching_id', $session['id'])->findAll();
        }

        return view('pages/all_coachingsession', [
            'coachingSessions' => $sessions,
            'images' => $images,
            'footer'      => $footerModel->getFooter(),
        ]);
    }

    // Halaman admin list
    public function admin()
    {
        $model = new CoachingModel();
        $data['sessions'] = $model->orderBy('created_at', 'DESC')->findAll();
        return view('admin/coachingsession', $data);
    }

    // Tampilkan form create
    public function create()
    {
        return view('admin/create_coaching');
    }

    // Simpan data create
    public function store()
    {
        $sessionModel = new CoachingModel();
        $imageModel = new CoachingImageModel();

        $sessionData = [
            'title' => $this->request->getPost('title'),
            'date' => $this->request->getPost('date'),
            'description' => $this->request->getPost('description'),
        ];

        $sessionModel->insert($sessionData);
        $sessionId = $sessionModel->insertID();

        $files = $this->request->getFiles();
        if ($files && isset($files['images'])) {
            foreach ($files['images'] as $img) {
                if ($img->isValid() && !$img->hasMoved()) {
                    $newName = $img->getRandomName();
                    $img->move('assets/imgs/coaching', $newName);
                    $imageModel->save([
                        'coaching_id' => $sessionId,
                        'image' => $newName
                    ]);
                }
            }
        }

        return redirect()->to('/admin/coaching')->with('success', 'Sesi berhasil ditambahkan.');
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $sessionModel = new CoachingModel();
        $imageModel = new CoachingImageModel();

        $session = $sessionModel->find($id);
        $images = $imageModel->where('coaching_id', $id)->findAll();

        if (!$session) {
            return redirect()->to('/admin/coaching')->with('error', 'Sesi tidak ditemukan.');
        }

        return view('admin/edit_coaching', [
            'session' => $session,
            'images' => $images
        ]);
    }

    // Simpan hasil edit
    public function update($id)
    {
        $sessionModel = new CoachingModel();
        $imageModel = new CoachingImageModel();

        $session = $sessionModel->find($id);
        if (!$session) {
            return redirect()->to('/admin/coaching')->with('error', 'Sesi tidak ditemukan.');
        }

        $sessionData = [
            'title' => $this->request->getPost('title'),
            'date' => $this->request->getPost('date'),
            'description' => $this->request->getPost('description')
        ];
        $sessionModel->update($id, $sessionData);

        $files = $this->request->getFiles();
        if ($files && isset($files['images'])) {
            foreach ($files['images'] as $img) {
                if ($img->isValid() && !$img->hasMoved()) {
                    $newName = $img->getRandomName();
                    $img->move('assets/imgs/coaching', $newName);
                    $imageModel->save([
                        'coaching_id' => $id,
                        'image' => $newName
                    ]);
                }
            }
        }

        return redirect()->to('/admin/coaching')->with('success', 'Sesi berhasil diperbarui.');
    }

    // Hapus sesi
    public function delete($id)
    {
        $sessionModel = new CoachingModel();
        $imageModel = new CoachingImageModel();

        $images = $imageModel->where('coaching_id', $id)->findAll();
        foreach ($images as $img) {
            $path = 'assets/imgs/coaching/' . $img['image'];
            if (file_exists($path)) {
                @unlink($path);
            }
        }

        $imageModel->where('coaching_id', $id)->delete();
        $sessionModel->delete($id);

        return redirect()->to('/admin/coaching')->with('success', 'Sesi berhasil dihapus.');
    }

    public function allSessions()
    {
        $coachingModel = new \App\Models\CoachingModel();
        $imageModel = new \App\Models\CoachingImageModel();

        $sessions = $coachingModel->orderBy('date', 'DESC')->findAll();
        $images = [];

        foreach ($sessions as $session) {
            $images[$session['id']] = $imageModel->where('coaching_id', $session['id'])->findAll();
        }

        return view('pages/all_coachingsession', [
            'coachingSessions' => $sessions,
            'images' => $images
        ]);
    }
}