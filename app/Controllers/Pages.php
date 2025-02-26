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

        // Fetch program data and categorize it by program type (Kids, Adults, Competition)
        $programData = $this->programModel->findAll(); // Fetch all programs

        // Categorize programs by type
        $kidsProgram = [];
        $adultProgram = [];
        $competitionProgram = [];

        foreach ($programData as $program) {
            if ($program['category'] == 'kids') {
                $kidsProgram[] = $program;
            } elseif ($program['category'] == 'adult') {
                $adultProgram[] = $program;
            } elseif ($program['category'] == 'competition') {
                $competitionProgram[] = $program;
            }
        }

        // Fetch other related data
        $materialData = $this->materialModel->findAll();
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
            'kidsProgram' => $kidsProgram, // Pass Kids Program data
            'adultProgram' => $adultProgram, // Pass Adult Program data
            'competitionProgram' => $competitionProgram, // Pass Competition Program data
            'materialData' => $materialData,
            'certificationData' => $certificationData,
            'portfolioData' => $portfolioData,
            'coachData' => $coachData,
            'contactData' => $contactData,
            'sponsorData' => $sponsorData,
            'footer' => $footerData, // Pass footer data
        ]);
    }
}