<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->setAutoRoute(false); // Demi keamanan, nonaktifkan auto route

// ====================
// Public Routes
// ====================
$routes->get('/', 'Pages::index');
$routes->get('login', 'AuthController::index');
$routes->post('auth/login', 'AuthController::login');
$routes->get('auth/logout', 'AuthController::logout');


// ====================
// pages
// ====================
$routes->get('kegiatan/all', 'KegiatanController::all');
$routes->get('about', 'AboutUsController::index');
$routes->get('coach', 'CoachController::index');
$routes->get('coaching-session', 'CoachingController::index');



// ====================
// Admin Dashboard
// ====================
$routes->get('admin', 'Dash::index', ['filter' => 'authFilter']);

// ====================
// Hero Section
// ====================
$routes->get('admin/hero', 'HeroController::admin', ['filter' => 'authFilter']);
$routes->post('admin/hero/update', 'HeroController::updateHero', ['filter' => 'authFilter']);

// ====================
// About Us
// ====================
$routes->get('admin/about_us', 'AboutUsController::admin', ['filter' => 'authFilter']);
$routes->post('admin/update_about_us', 'AboutUsController::updateAboutUs', ['filter' => 'authFilter']);

// ====================
// Goals
// ====================
$routes->get('admin/goals', 'GoalsController::admin', ['filter' => 'authFilter']);
$routes->post('goals/update', 'GoalsController::update', ['filter' => 'authFilter']);


// ====================
// Certification
// ====================
$routes->get('admin/certification', 'CertificationController::admin', ['filter' => 'authFilter']);
$routes->post('admin/certification/update', 'CertificationController::update', ['filter' => 'authFilter']);

// ====================
// Portfolio
// ====================
$routes->get('admin/portfolio', 'PortfolioController::create', ['filter' => 'authFilter']);
$routes->post('portfolio/store', 'PortfolioController::store', ['filter' => 'authFilter']);
$routes->get('admin/portfolio/(:num)/edit', 'PortfolioController::edit/$1', ['filter' => 'authFilter']);
$routes->post('portfolio/update/(:num)', 'PortfolioController::update/$1', ['filter' => 'authFilter']);
$routes->get('portfolio/delete/(:num)', 'PortfolioController::delete/$1', ['filter' => 'authFilter']);
$routes->get('portfolio/all', 'PortfolioController::all');

// ====================
// Coaches
// ====================
$routes->get('admin/coach', 'CoachController::admin', ['filter' => 'authFilter']);
$routes->get('admin/coaches/create', 'CoachController::create', ['filter' => 'authFilter']);
$routes->post('admin/coaches/store', 'CoachController::store', ['filter' => 'authFilter']);
$routes->get('admin/coaches/edit/(:num)', 'CoachController::edit/$1', ['filter' => 'authFilter']);
$routes->post('admin/coaches/update/(:num)', 'CoachController::update/$1', ['filter' => 'authFilter']);
$routes->get('admin/coaches/delete/(:num)', 'CoachController::delete/$1', ['filter' => 'authFilter']);

// // ====================
// // Coaching Session
// // ====================
// $routes->get('admin/coaching', 'CoachingController::admin', ['filter' => 'authFilter']);
// $routes->get('admin/coaching/create', 'CoachingController::create', ['filter' => 'authFilter']);
// $routes->post('admin/coaching/store', 'CoachingController::store', ['filter' => 'authFilter']);
// $routes->get('admin/coaching/edit/(:num)', 'CoachingController::edit/$1', ['filter' => 'authFilter']);
// $routes->post('admin/coaching/update/(:num)', 'CoachingController::update/$1', ['filter' => 'authFilter']);
// $routes->post('admin/coaching/delete/(:num)', 'CoachingController::delete/$1', ['filter' => 'authFilter']);

// ====================
// All Coaching Session
// ====================
$routes->get('admin/coaching', 'CoachingController::admin', ['filter' => 'authFilter']);
$routes->get('admin/coaching/create', 'CoachingController::create', ['filter' => 'authFilter']);
$routes->post('admin/coaching/store', 'CoachingController::store', ['filter' => 'authFilter']);
$routes->get('admin/coaching/edit/(:num)', 'CoachingController::edit/$1', ['filter' => 'authFilter']);
$routes->post('admin/coaching/update/(:num)', 'CoachingController::update/$1', ['filter' => 'authFilter']);
$routes->post('admin/coaching/delete/(:num)', 'CoachingController::delete/$1', ['filter' => 'authFilter']);


// ====================
// Contact
// ====================
$routes->get('admin/contact', 'ContactController::index', ['filter' => 'authFilter']);
$routes->post('admin/contact/update', 'ContactController::update', ['filter' => 'authFilter']);

// ====================
// Sponsor
// ====================
$routes->get('admin/sponsor', 'SponsorController::admin', ['filter' => 'authFilter']);
$routes->get('admin/sponsor/create', 'SponsorController::create', ['filter' => 'authFilter']);
$routes->post('admin/sponsor/store', 'SponsorController::store', ['filter' => 'authFilter']);
$routes->get('admin/sponsor/edit/(:num)', 'SponsorController::edit/$1', ['filter' => 'authFilter']);
$routes->post('admin/sponsor/update/(:num)', 'SponsorController::update/$1', ['filter' => 'authFilter']);
$routes->get('admin/sponsor/delete/(:num)', 'SponsorController::delete/$1', ['filter' => 'authFilter']);

// ====================
// Footer
// ====================
$routes->get('admin/footer', 'FooterController::index', ['filter' => 'authFilter']);
$routes->post('admin/footer/update', 'FooterController::update', ['filter' => 'authFilter']);


// ====================
// Kegiatan
// ====================
$routes->get('admin/kegiatan', 'KegiatanController::index', ['filter' => 'authFilter']);
$routes->get('admin/kegiatan/create', 'KegiatanController::create', ['filter' => 'authFilter']);
$routes->post('admin/kegiatan/store', 'KegiatanController::store', ['filter' => 'authFilter']);
$routes->get('admin/kegiatan/edit/(:num)', 'KegiatanController::edit/$1', ['filter' => 'authFilter']);
$routes->post('admin/kegiatan/(:num)/update', 'KegiatanController::update/$1', ['filter' => 'authFilter']);
$routes->get('admin/kegiatan/delete_image/(:num)', 'KegiatanController::deleteImage/$1', ['filter' => 'authFilter']);
$routes->get('admin/kegiatan/delete/(:num)', 'KegiatanController::delete/$1', ['filter' => 'authFilter']);

// ====================
// Admin User Management
// ====================
$routes->get('admin/add', 'AdminController::add', ['filter' => 'authFilter']);
$routes->post('admin/save', 'AdminController::save', ['filter' => 'authFilter']);

// ====================
// Wildcard Error Routes
// ====================
$routes->get('admin/(:any)', 'ErrorsControllercopy::show404/$1');
$routes->get('/(:any)', 'ErrorsController::show404/$1');