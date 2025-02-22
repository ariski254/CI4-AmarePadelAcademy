<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AboutUsModel;
use App\Models\HeroModel;
use App\Models\GoalsModel;
use App\Models\ProgramModel;
use App\Models\ProgramImageModel;  // Add this import
use App\Models\MaterialModel;
use App\Models\CertificationModel;
use App\Models\PortfolioModel;
use App\Models\CoachModel;
use App\Models\ContactModel;
use App\Models\SponsorModel;
use App\Models\FooterModel;

class Pages extends BaseController
{
    protected $aboutUsModel;
    protected $heroModel;
    protected $goalsModel;
    protected $programModel;
    protected $programImageModel; // Declare the new model here
    protected $materialModel;
    protected $certificationModel;
    protected $portfolioModel;
    protected $coachModel;
    protected $contactModel;
    protected $sponsorModel;
    protected $footerModel;

    public function __construct()
    {
        // Initialize the models
        $this->aboutUsModel = new AboutUsModel();
        $this->heroModel = new HeroModel();
        $this->goalsModel = new GoalsModel();
        $this->programModel = new ProgramModel();
        $this->programImageModel = new ProgramImageModel(); // Initialize the ProgramImageModel here
        $this->materialModel = new MaterialModel();
        $this->certificationModel = new CertificationModel();
        $this->portfolioModel = new PortfolioModel();
        $this->coachModel = new CoachModel();
        $this->contactModel = new ContactModel();
        $this->sponsorModel = new SponsorModel();
        $this->footerModel = new FooterModel();
    }

    public function index()
    {
        // Fetch data from models
        $aboutUsData = $this->aboutUsModel->getAboutUs();
        $heroData = $this->heroModel->getHero();
        $goalsData = $this->goalsModel->getGoals();
        $programsData = $this->programModel->findAll(); // Fetch all programs
        $materialData = $this->materialModel->findAll();
        $certificationData = $this->certificationModel->getCertification();
        $portfolioData = $this->portfolioModel->findAll();
        $coachData = $this->coachModel->findAll();
        $contactData = $this->contactModel->getContactDetails();
        $sponsorData = $this->sponsorModel->getAllSponsors();
        $footerData = $this->footerModel->getFooter(); // Footer data

        // Fetch the image (if necessary)
        $imageData = $this->programImageModel->first(); // Retrieve the first image from the database

        // Pass the data to the view, including the image
        return view('index', [
            'aboutUsData' => $aboutUsData,
            'heroData' => $heroData,
            'goalsData' => $goalsData,
            'programs' => $programsData, // Pass programs data correctly
            'materialData' => $materialData,
            'certificationData' => $certificationData,
            'portfolioData' => $portfolioData,
            'coachData' => $coachData,
            'contactData' => $contactData,
            'sponsorData' => $sponsorData,
            'footer' => $footerData, // Pass footer data correctly
            'image' => $imageData // Pass the image data correctly
        ]);
    }
}