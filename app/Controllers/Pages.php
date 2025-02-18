<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AboutUsModel;
use App\Models\HeroModel;
use App\Models\GoalsModel;
use App\Models\ProgramModel;
use App\Models\MaterialModel;
use App\Models\CertificationModel;
use App\Models\PortfolioModel;
use App\Models\CoachModel; // Make sure the Coach model is included

class Pages extends BaseController
{
    protected $aboutUsModel;
    protected $heroModel;
    protected $goalsModel;
    protected $programModel;
    protected $materialModel;
    protected $certificationModel;
    protected $portfolioModel;
    protected $coachModel; // Added property for Coach model

    public function __construct()
    {
        // Initialize the models
        $this->aboutUsModel = new AboutUsModel();
        $this->heroModel = new HeroModel();
        $this->goalsModel = new GoalsModel();
        $this->programModel = new ProgramModel();
        $this->materialModel = new MaterialModel();
        $this->certificationModel = new CertificationModel();
        $this->portfolioModel = new PortfolioModel();
        $this->coachModel = new CoachModel(); // Initialize CoachModel
    }

    public function index()
    {
        // Fetch data from models
        $aboutUsData = $this->aboutUsModel->getAboutUs();
        $heroData = $this->heroModel->getHero();
        $goalsData = $this->goalsModel->getGoals();
        $programData = $this->programModel->findAll();
        $materialData = $this->materialModel->findAll();
        $certificationData = $this->certificationModel->getCertification();

        // Fetch portfolio and coach data
        $portfolioData = $this->portfolioModel->findAll();
        $coachData = $this->coachModel->findAll(); // Fetching coach data

        // Pass the data to the view
        return view('index', [
            'aboutUsData' => $aboutUsData,
            'heroData' => $heroData,
            'goalsData' => $goalsData,
            'programData' => $programData,
            'materialData' => $materialData,
            'certificationData' => $certificationData,
            'portfolioData' => $portfolioData,
            'coachData' => $coachData // Passing coach data to the view
        ]);
    }
}