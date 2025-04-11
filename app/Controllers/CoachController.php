<?php

namespace App\Controllers;

use App\Models\CoachModel;

class CoachController extends BaseController
{
    // Method untuk menampilkan semua coach di halaman admin
    public function admin()
    {
        $model = new CoachModel();
        $coaches = $model->findAll();

        return view('admin/coach', ['coaches' => $coaches]);
    }

    // Method untuk menampilkan halaman form create coach
    public function create()
    {
        return view('admin/create_coach');
    }

    // Method untuk menyimpan coach baru
    public function store()
    {
        // Validation rules for input fields
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name'      => 'required|min_length[3]|max_length[255]',
            'role'      => 'required|min_length[3]|max_length[255]',
            'position'  => 'required|min_length[3]|max_length[255]',
            'image'     => 'uploaded[image]|is_image[image]|max_size[image,1024]',
            'twitter'   => 'permit_empty|valid_url',
            'facebook'  => 'permit_empty|valid_url',
            'instagram' => 'permit_empty|valid_url',
        ]);

        // Check if validation is successful
        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Handle the file upload
        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        // Store in public/assets/imgs/coach
        $image->move(ROOTPATH . 'public/assets/imgs/coach', $imageName);

        // Prepare the data to store
        $data = [
            'name'      => $this->request->getPost('name'),
            'role'      => $this->request->getPost('role'),
            'position'  => $this->request->getPost('position'),
            'twitter'   => $this->request->getPost('twitter'),
            'facebook'  => $this->request->getPost('facebook'),
            'instagram' => $this->request->getPost('instagram'),
            'image'     => $imageName,
        ];

        // Insert data into the database
        $model = new CoachModel();
        $model->insert($data);

        // Redirect to the coach list page with a success message
        return redirect()->to('/admin/coach')->with('message', 'Coach added successfully');
    }


    public function edit($id)
    {
        $model = new CoachModel();
        $coach = $model->find($id);
        return view('admin/edit_coach', ['coach' => $coach]);
    }
    // Method untuk menyimpan perubahan edit coach
    public function update($id)
    {
        // Set validation rules
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name'      => 'required|min_length[3]|max_length[255]',
            'role'      => 'required|min_length[3]|max_length[255]',
            'position'  => 'required|min_length[3]|max_length[255]',
            'image'     => 'permit_empty|is_image[image]|max_size[image,1024]',
            'twitter'   => 'permit_empty|valid_url',
            'facebook'  => 'permit_empty|valid_url',
            'instagram' => 'permit_empty|valid_url',
        ]);

        // Check if validation passed
        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Handle image upload if new image is provided
        $image = $this->request->getFile('image');
        if ($image->isValid()) {
            // Generate new random name for image
            $imageName = $image->getRandomName();
            // Move the image to the assets/imgs/coach folder
            $image->move(ROOTPATH . 'public/assets/imgs/coach', $imageName);
        } else {
            // Use the existing image if no new image is provided
            $imageName = $this->request->getPost('existing_image');
        }

        // Prepare data to update the coach record
        $data = [
            'name'      => $this->request->getPost('name'),
            'role'      => $this->request->getPost('role'),
            'position'  => $this->request->getPost('position'),
            'twitter'   => $this->request->getPost('twitter'),
            'facebook'  => $this->request->getPost('facebook'),
            'instagram' => $this->request->getPost('instagram'),
            'image'     => $imageName,
        ];

        // Update the coach data in the database
        $model = new CoachModel();
        $model->update($id, $data);

        // Redirect back to the coach list page
        return redirect()->to('/admin/coach')->with('message', 'Coach updated successfully');
    }

    // Method untuk menghapus coach
    public function delete($id)
    {
        $model = new CoachModel();
        $coach = $model->find($id);

        if ($coach) {
            // Delete image from the file system
            if (file_exists(ROOTPATH . 'public/assets/imgs/coach/' . $coach['image'])) {
                unlink(ROOTPATH . 'public/assets/imgs/coach/' . $coach['image']);
            }

            // Delete the coach data from the database
            $model->delete($id);
        }

        // Redirect to the coach list page with a success message
        return redirect()->to('/admin/coach')->with('message', 'Coach deleted successfully');
    }

    public function index()
    {
        // Load models
        $coachModel = new \App\Models\CoachModel();
        $footerModel  = new \App\Models\FooterModel();
        $certificationModel = new \App\Models\CertificationModel();
        $coachingModel = new \App\Models\CoachingModel();
        $imageModel = new \App\Models\CoachingImageModel();

        // Ambil 9 sesi coaching terbaru
        $sessions = $coachingModel->orderBy('date', 'DESC')->findAll(9);
        $coachingSessions = [];

        foreach ($sessions as $session) {
            $images = $imageModel->where('coaching_id', $session['id'])->findAll();

            // Ambil 1 gambar acak jika ada
            if (!empty($images)) {
                $randomImage = $images[array_rand($images)];
                $session['image'] = $randomImage['image'];
            } else {
                $session['image'] = 'default.jpg'; // fallback image
            }

            $coachingSessions[] = $session;
        }

        // Gabungkan semua data ke dalam 1 array
        $data = [
            'coachData' => $coachModel->findAll(),
            'footer' => $footerModel->getFooter(),
            'certificationData' => $certificationModel->getCertification(),
            'coachingSessions' => $coachingSessions
        ];

        return view('pages/coach', $data);
    }
}