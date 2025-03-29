<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AboutUsModel;
use App\Models\HeroModel;
use App\Models\GoalsModel;
use App\Models\ProgramModel;

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
        $programData = $this->programModel->findAll();

        $certificationData = $this->certificationModel->getCertification();
        $portfolioData = $this->portfolioModel->findAll();
        $coachData = $this->coachModel->findAll();
        $contactData = $this->contactModel->getContactDetails();
        $sponsorData = $this->sponsorModel->getAllSponsors();
        $footerData = $this->footerModel->getFooter(); // Footer data

        // Pass the data to the view
        return view('index', [
            'aboutUsData' => $aboutUsData,
            'heroData' => $heroData,
            'goalsData' => $goalsData,
            'programs' => $programData, // Pass the programs data with the correct key

            'certificationData' => $certificationData,
            'portfolioData' => $portfolioData,
            'coachData' => $coachData,
            'contactData' => $contactData,
            'sponsorData' => $sponsorData,
            'footer' => $footerData, // Pass footer data
        ]);
    }
}
