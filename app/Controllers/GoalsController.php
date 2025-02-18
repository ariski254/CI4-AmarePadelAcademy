<?php

namespace App\Controllers;

use App\Models\GoalsModel;

class GoalsController extends BaseController
{
    protected $goalsModel;

    public function __construct()
    {
        $this->goalsModel = new GoalsModel();
    }

    // Display the admin view to edit the goals
    public function admin()
    {
        $goalsData = $this->goalsModel->getGoals();
        return view('admin/goals', ['goalsData' => $goalsData]);
    }

    // Handle the update action for goals
    public function update()
    {
        $goalsData = [
            'vision'            => $this->request->getPost('vision'),
            'mission'           => $this->request->getPost('mission'),
            'key_success_factor' => $this->request->getPost('key_success_factor'),
            'services'          => $this->request->getPost('services')
        ];

        $this->goalsModel->updateGoals($goalsData);

        return redirect()->to('/admin/goals')->with('message', 'Data updated successfully');
    }
}